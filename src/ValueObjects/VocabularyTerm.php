<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\ValueObjects;

final readonly class VocabularyTerm
{
    public function __construct(
        public string $key,
        public string $label,
        public string $description,
        public string $audience,
        public string $profile,
        public string $profileVersion,
        public bool $approvedForPublicDisplay,
        /** @var list<string> */
        public array $traceReferences = [],
    ) {}
}
