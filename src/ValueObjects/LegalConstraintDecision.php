<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\ValueObjects;

use DateTimeImmutable;
use LBHurtado\XLegal\Enums\PolicyDecision;

final readonly class LegalConstraintDecision
{
    /**
     * @param  list<string>  $traceReferences
     */
    public function __construct(
        public PolicyDecision $decision,
        public string $reason,
        public string $profile,
        public string $profileVersion,
        public ?DateTimeImmutable $effectiveAt,
        public array $traceReferences = [],
    ) {}

    public function permitsExecution(): bool
    {
        return $this->decision === PolicyDecision::Allowed;
    }
}
