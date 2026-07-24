<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\Services;

use InvalidArgumentException;
use LBHurtado\XLegal\Contracts\LegalVocabularyResolverContract;
use LBHurtado\XLegal\Enums\LegalProfileStatus;
use LBHurtado\XLegal\ValueObjects\JurisdictionContext;
use LBHurtado\XLegal\ValueObjects\VocabularyTerm;

final readonly class ConfiguredLegalVocabularyResolver implements LegalVocabularyResolverContract
{
    /**
     * @param  array<string, array<string, mixed>>  $profiles
     */
    public function __construct(private array $profiles) {}

    public function resolve(
        string $term,
        JurisdictionContext $context,
        string $audience = 'operator',
    ): VocabularyTerm {
        $profile = $this->profiles[$context->profile] ?? null;
        $definition = is_array($profile)
            ? ($profile['vocabulary'][$audience][$term] ?? null)
            : null;

        if (! is_array($profile) || ! is_array($definition)) {
            throw new InvalidArgumentException(
                "Vocabulary term [{$term}] is not configured for [{$context->profile}:{$audience}].",
            );
        }

        $jurisdiction = mb_strtoupper(trim((string) ($profile['jurisdiction'] ?? '')));

        if ($jurisdiction !== $context->jurisdiction) {
            throw new InvalidArgumentException(
                "Vocabulary profile [{$context->profile}] does not apply to jurisdiction [{$context->jurisdiction}].",
            );
        }

        $status = LegalProfileStatus::from(
            $this->requiredString($profile, 'status', $context->profile),
        );

        return new VocabularyTerm(
            key: $term,
            label: $this->requiredString($definition, 'label', $term),
            description: $this->requiredString($definition, 'description', $term),
            audience: $audience,
            profile: $context->profile,
            profileVersion: $this->requiredString($profile, 'version', $context->profile),
            approvedForPublicDisplay: $status->mayAuthorizeOperations()
                && ($profile['public_display_approved'] ?? false) === true,
            traceReferences: is_array($profile['trace_references'] ?? null)
                ? array_values(array_filter(
                    $profile['trace_references'],
                    static fn (mixed $reference): bool => is_string($reference) && trim($reference) !== '',
                ))
                : [],
        );
    }

    /**
     * @param  array<string, mixed>  $values
     */
    private function requiredString(array $values, string $key, string $subject): string
    {
        $value = trim((string) ($values[$key] ?? ''));

        if ($value === '') {
            throw new InvalidArgumentException("[{$subject}] requires [{$key}].");
        }

        return $value;
    }
}
