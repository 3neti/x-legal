<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\Services;

use LBHurtado\XLegal\Contracts\JurisdictionContextResolverContract;
use LBHurtado\XLegal\ValueObjects\JurisdictionContext;

final readonly class ConfiguredJurisdictionContextResolver implements JurisdictionContextResolverContract
{
    /**
     * @param  array{jurisdiction?: string|null, legal_entity_reference?: string|null, profile?: string|null}  $defaults
     */
    public function __construct(private array $defaults = []) {}

    public function resolve(array $overrides = []): JurisdictionContext
    {
        $context = array_replace($this->defaults, $overrides);

        return new JurisdictionContext(
            jurisdiction: (string) ($context['jurisdiction'] ?? ''),
            legalEntityReference: (string) ($context['legal_entity_reference'] ?? ''),
            profile: (string) ($context['profile'] ?? ''),
        );
    }
}
