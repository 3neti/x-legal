<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\Services;

use DateTimeImmutable;
use InvalidArgumentException;
use LBHurtado\XLegal\Contracts\TreasuryPolicyProfileResolverContract;
use LBHurtado\XLegal\Enums\LegalProfileStatus;
use LBHurtado\XLegal\ValueObjects\JurisdictionContext;
use LBHurtado\XLegal\ValueObjects\TreasuryPolicyProfile;

final readonly class ConfiguredTreasuryPolicyProfileResolver implements TreasuryPolicyProfileResolverContract
{
    /**
     * @param  array<string, array<string, mixed>>  $profiles
     */
    public function __construct(private array $profiles) {}

    public function resolve(JurisdictionContext $context): TreasuryPolicyProfile
    {
        $profile = $this->profiles[$context->profile] ?? null;

        if (! is_array($profile)) {
            throw new InvalidArgumentException("Legal policy profile [{$context->profile}] is not configured.");
        }

        $jurisdiction = mb_strtoupper(trim((string) ($profile['jurisdiction'] ?? '')));

        if ($jurisdiction !== $context->jurisdiction) {
            throw new InvalidArgumentException(
                "Legal policy profile [{$context->profile}] does not apply to jurisdiction [{$context->jurisdiction}].",
            );
        }

        $effectiveAt = $profile['effective_at'] ?? null;

        return new TreasuryPolicyProfile(
            key: $context->profile,
            version: $this->requiredString($profile, 'version', $context->profile),
            status: LegalProfileStatus::from(
                $this->requiredString($profile, 'status', $context->profile),
            ),
            jurisdiction: $jurisdiction,
            effectiveAt: is_string($effectiveAt) && trim($effectiveAt) !== ''
                ? new DateTimeImmutable($effectiveAt)
                : null,
            decisions: is_array($profile['decisions'] ?? null)
                ? $profile['decisions']
                : [],
            traceReferences: is_array($profile['trace_references'] ?? null)
                ? array_values(array_filter(
                    $profile['trace_references'],
                    static fn (mixed $reference): bool => is_string($reference) && trim($reference) !== '',
                ))
                : [],
        );
    }

    /**
     * @param  array<string, mixed>  $profile
     */
    private function requiredString(array $profile, string $key, string $profileName): string
    {
        $value = trim((string) ($profile[$key] ?? ''));

        if ($value === '') {
            throw new InvalidArgumentException(
                "Legal policy profile [{$profileName}] requires [{$key}].",
            );
        }

        return $value;
    }
}
