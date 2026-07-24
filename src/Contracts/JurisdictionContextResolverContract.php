<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\Contracts;

use LBHurtado\XLegal\ValueObjects\JurisdictionContext;

interface JurisdictionContextResolverContract
{
    /**
     * @param  array{jurisdiction?: string|null, legal_entity_reference?: string|null, profile?: string|null}  $overrides
     */
    public function resolve(array $overrides = []): JurisdictionContext;
}
