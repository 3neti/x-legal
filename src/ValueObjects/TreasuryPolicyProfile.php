<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\ValueObjects;

use DateTimeImmutable;
use LBHurtado\XLegal\Enums\LegalProfileStatus;

final readonly class TreasuryPolicyProfile
{
    /**
     * @param  array<string, string>  $decisions
     * @param  list<string>  $traceReferences
     */
    public function __construct(
        public string $key,
        public string $version,
        public LegalProfileStatus $status,
        public string $jurisdiction,
        public ?DateTimeImmutable $effectiveAt,
        public array $decisions,
        public array $traceReferences = [],
    ) {}

    public function mayAuthorizeOperations(): bool
    {
        return $this->status->mayAuthorizeOperations();
    }
}
