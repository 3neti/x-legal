<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\Tests\Feature;

use DateTimeImmutable;
use InvalidArgumentException;
use LBHurtado\XLegal\Enums\PolicyDecision;
use LBHurtado\XLegal\Services\AdvisoryLegalConstraintEvaluator;
use LBHurtado\XLegal\Services\ConfiguredJurisdictionContextResolver;
use LBHurtado\XLegal\Services\ConfiguredLegalVocabularyResolver;
use LBHurtado\XLegal\Services\ConfiguredTreasuryPolicyProfileResolver;
use LBHurtado\XLegal\ValueObjects\TreasuryOperationContext;
use PHPUnit\Framework\TestCase;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use SplFileInfo;

final class LegalRuntimeContractsTest extends TestCase
{
    public function test_jurisdiction_context_requires_explicit_legal_identity(): void
    {
        $resolver = new ConfiguredJurisdictionContextResolver([
            'profile' => 'treasury-settlement-ph-v1',
        ]);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('explicit legal jurisdiction');

        $resolver->resolve(['currency' => 'PHP']);
    }

    public function test_jurisdiction_context_can_be_overridden_without_currency_inference(): void
    {
        $resolver = new ConfiguredJurisdictionContextResolver([
            'jurisdiction' => 'SG',
            'legal_entity_reference' => 'entity-default',
            'profile' => 'treasury-settlement-sg-v1',
        ]);

        $context = $resolver->resolve([
            'jurisdiction' => 'ph',
            'legal_entity_reference' => 'entity-ph-001',
            'profile' => 'treasury-settlement-ph-v1',
        ]);

        $this->assertSame('PH', $context->jurisdiction);
        $this->assertSame('entity-ph-001', $context->legalEntityReference);
        $this->assertSame('treasury-settlement-ph-v1', $context->profile);
    }

    public function test_vocabulary_is_profile_audience_and_version_specific(): void
    {
        $config = $this->profiles();
        $context = (new ConfiguredJurisdictionContextResolver([
            'jurisdiction' => 'PH',
            'legal_entity_reference' => 'entity-ph-001',
            'profile' => 'treasury-settlement-ph-v1',
        ]))->resolve();

        $term = (new ConfiguredLegalVocabularyResolver($config))->resolve(
            term: 'treasury_position',
            context: $context,
            audience: 'operator',
        );

        $this->assertSame('Treasury Position', $term->label);
        $this->assertSame('operator', $term->audience);
        $this->assertSame('2026-07-25.1', $term->profileVersion);
        $this->assertFalse($term->approvedForPublicDisplay);
        $this->assertSame(['legal-trace:ph-working-model'], $term->traceReferences);
    }

    public function test_default_operator_vocabulary_uses_treasury_product_language(): void
    {
        /** @var array{profiles: array<string, array<string, mixed>>} $config */
        $config = require dirname(__DIR__, 2).'/config/x-legal.php';
        $context = (new ConfiguredJurisdictionContextResolver([
            'jurisdiction' => 'PH',
            'legal_entity_reference' => 'entity-ph-001',
            'profile' => 'treasury-settlement-ph-v1',
        ]))->resolve();
        $resolver = new ConfiguredLegalVocabularyResolver($config['profiles']);

        $terms = [
            'internal_balance' => 'Client Funds',
            'outstanding_pay_codes' => 'Outstanding Pay Codes',
            'issuance_capacity' => 'Issuance Capacity',
            'account_funding' => 'Account Funding',
            'reusable_funding_address' => 'Reusable Funding Address',
            'provider_account' => 'Provider Account',
            'exact_funding_intent' => 'Exact Funding Intent',
        ];

        foreach ($terms as $key => $label) {
            $term = $resolver->resolve($key, $context);

            $this->assertSame($label, $term->label);
            $this->assertNotSame('', $term->description);
            $this->assertFalse($term->approvedForPublicDisplay);
        }
    }

    public function test_draft_profiles_are_advisory_even_when_they_contain_an_allowed_decision(): void
    {
        $profiles = $this->profiles();
        $profiles['treasury-settlement-ph-v1']['decisions'] = [
            'recognize_verified_client_funds' => 'allowed',
        ];

        $evaluator = new AdvisoryLegalConstraintEvaluator(
            new ConfiguredTreasuryPolicyProfileResolver($profiles),
        );

        $decision = $evaluator->evaluate($this->operationContext());

        $this->assertSame(PolicyDecision::ReviewRequired, $decision->decision);
        $this->assertFalse($decision->permitsExecution());
        $this->assertStringContainsString('remains advisory', $decision->reason);
        $this->assertSame(
            ['legal-trace:ph-working-model', 'evidence:netbank:123'],
            $decision->traceReferences,
        );
    }

    public function test_reviewed_profiles_apply_explicit_decisions_only(): void
    {
        $profiles = $this->profiles();
        $profiles['treasury-settlement-ph-v1']['status'] = 'counsel_reviewed';
        $profiles['treasury-settlement-ph-v1']['effective_at'] = '2026-08-01T00:00:00+08:00';
        $profiles['treasury-settlement-ph-v1']['decisions'] = [
            'recognize_verified_client_funds' => 'allowed',
        ];

        $evaluator = new AdvisoryLegalConstraintEvaluator(
            new ConfiguredTreasuryPolicyProfileResolver($profiles),
        );

        $allowed = $evaluator->evaluate(
            $this->operationContext(effectiveAt: '2026-08-02T00:00:00+08:00'),
        );
        $unclassified = $evaluator->evaluate(
            $this->operationContext(operation: 'transfer_between_providers'),
        );

        $this->assertTrue($allowed->permitsExecution());
        $this->assertSame(PolicyDecision::Allowed, $allowed->decision);
        $this->assertSame('2026-08-01', $allowed->effectiveAt?->format('Y-m-d'));
        $this->assertSame(PolicyDecision::ReviewRequired, $unclassified->decision);
    }

    public function test_future_reviewed_profiles_remain_review_required(): void
    {
        $profiles = $this->profiles();
        $profiles['treasury-settlement-ph-v1']['status'] = 'counsel_reviewed';
        $profiles['treasury-settlement-ph-v1']['effective_at'] = '2026-08-01T00:00:00+08:00';
        $profiles['treasury-settlement-ph-v1']['decisions'] = [
            'recognize_verified_client_funds' => 'allowed',
        ];

        $decision = (new AdvisoryLegalConstraintEvaluator(
            new ConfiguredTreasuryPolicyProfileResolver($profiles),
        ))->evaluate($this->operationContext());

        $this->assertSame(PolicyDecision::ReviewRequired, $decision->decision);
        $this->assertStringContainsString('not yet effective', $decision->reason);
    }

    public function test_policy_profile_must_match_the_explicit_jurisdiction(): void
    {
        $context = (new ConfiguredJurisdictionContextResolver([
            'jurisdiction' => 'SG',
            'legal_entity_reference' => 'entity-sg-001',
            'profile' => 'treasury-settlement-ph-v1',
        ]))->resolve();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('does not apply to jurisdiction [SG]');

        (new ConfiguredTreasuryPolicyProfileResolver($this->profiles()))->resolve($context);
    }

    public function test_runtime_layer_has_no_provider_wallet_or_x_change_dependencies(): void
    {
        $sourceRoot = dirname(__DIR__, 2).'/src';
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($sourceRoot));
        $source = '';

        /** @var SplFileInfo $file */
        foreach ($files as $file) {
            if ($file->isFile() && $file->getExtension() === 'php') {
                $contents = file_get_contents($file->getPathname());
                $source .= is_string($contents) ? $contents : '';
            }
        }

        $this->assertStringNotContainsString('Bavix\\', $source);
        $this->assertStringNotContainsString('LBHurtado\\Wallet\\', $source);
        $this->assertStringNotContainsString('LBHurtado\\XChange\\', $source);
        $this->assertStringNotContainsString('LBHurtado\\Emi\\', $source);
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    private function profiles(): array
    {
        return [
            'treasury-settlement-ph-v1' => [
                'version' => '2026-07-25.1',
                'status' => 'under_analysis',
                'jurisdiction' => 'PH',
                'effective_at' => null,
                'public_display_approved' => false,
                'trace_references' => ['legal-trace:ph-working-model'],
                'decisions' => [],
                'vocabulary' => [
                    'operator' => [
                        'treasury_position' => [
                            'label' => 'Treasury Position',
                            'description' => 'A purpose-bound internal position.',
                        ],
                    ],
                ],
            ],
        ];
    }

    private function operationContext(
        string $operation = 'recognize_verified_client_funds',
        string $effectiveAt = '2026-07-24T09:00:00+08:00',
    ): TreasuryOperationContext {
        $jurisdiction = (new ConfiguredJurisdictionContextResolver([
            'jurisdiction' => 'PH',
            'legal_entity_reference' => 'entity-ph-001',
            'profile' => 'treasury-settlement-ph-v1',
        ]))->resolve();

        return new TreasuryOperationContext(
            operation: $operation,
            principalReference: 'principal:user:5',
            mandateReference: 'mandate:user:5:treasury',
            treasuryPositionReference: 'position:netbank:primary:php:user:5',
            settlementResourceReference: 'resource:netbank:primary:php',
            amountMinor: 2_000_000,
            currency: 'php',
            purpose: 'self_top_up',
            idempotencyKey: 'funding-evidence:netbank:123',
            effectiveAt: new DateTimeImmutable($effectiveAt),
            jurisdiction: $jurisdiction,
            traceReferences: ['evidence:netbank:123'],
        );
    }
}
