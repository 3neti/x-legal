<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\Services;

use LBHurtado\XLegal\Contracts\CommercialLegalConstraintEvaluationContract;
use LBHurtado\XLegal\Contracts\TreasuryPolicyProfileResolverContract;
use LBHurtado\XLegal\Enums\PolicyDecision;
use LBHurtado\XLegal\ValueObjects\CommercialOperationContext;
use LBHurtado\XLegal\ValueObjects\LegalConstraintDecision;

final readonly class AdvisoryCommercialLegalConstraintEvaluator implements CommercialLegalConstraintEvaluationContract
{
    public function __construct(
        private TreasuryPolicyProfileResolverContract $profiles,
    ) {}

    public function evaluate(CommercialOperationContext $context): LegalConstraintDecision
    {
        $profile = $this->profiles->resolve($context->jurisdiction);
        $traceReferences = array_values(array_unique([
            ...$profile->traceReferences,
            ...$context->traceReferences,
        ]));

        if (! $profile->mayAuthorizeOperations()) {
            return new LegalConstraintDecision(
                decision: PolicyDecision::ReviewRequired,
                reason: "Legal profile [{$profile->key}] is {$profile->status->value} and remains advisory.",
                profile: $profile->key,
                profileVersion: $profile->version,
                effectiveAt: $profile->effectiveAt,
                traceReferences: $traceReferences,
            );
        }

        if ($profile->effectiveAt !== null && $profile->effectiveAt > $context->effectiveAt) {
            return new LegalConstraintDecision(
                decision: PolicyDecision::ReviewRequired,
                reason: "Legal profile [{$profile->key}] is not yet effective for this commercial operation.",
                profile: $profile->key,
                profileVersion: $profile->version,
                effectiveAt: $profile->effectiveAt,
                traceReferences: $traceReferences,
            );
        }

        $configuredDecision = $profile->decisions[$context->operation] ?? null;
        $decision = is_string($configuredDecision)
            ? PolicyDecision::tryFrom($configuredDecision)
            : null;

        if ($decision === null) {
            return new LegalConstraintDecision(
                decision: PolicyDecision::ReviewRequired,
                reason: "Commercial operation [{$context->operation}] has no approved policy decision.",
                profile: $profile->key,
                profileVersion: $profile->version,
                effectiveAt: $profile->effectiveAt,
                traceReferences: $traceReferences,
            );
        }

        return new LegalConstraintDecision(
            decision: $decision,
            reason: "Commercial operation [{$context->operation}] was evaluated by legal profile [{$profile->key}].",
            profile: $profile->key,
            profileVersion: $profile->version,
            effectiveAt: $profile->effectiveAt,
            traceReferences: $traceReferences,
        );
    }
}
