<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\Contracts;

use LBHurtado\XLegal\ValueObjects\JurisdictionContext;
use LBHurtado\XLegal\ValueObjects\VocabularyTerm;

interface LegalVocabularyResolverContract
{
    public function resolve(
        string $term,
        JurisdictionContext $context,
        string $audience = 'operator',
    ): VocabularyTerm;
}
