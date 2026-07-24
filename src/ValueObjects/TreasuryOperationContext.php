<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\ValueObjects;

use DateTimeImmutable;
use InvalidArgumentException;

final readonly class TreasuryOperationContext
{
    public string $currency;

    /**
     * @param  list<string>  $traceReferences
     */
    public function __construct(
        public string $operation,
        public string $principalReference,
        public string $mandateReference,
        public string $treasuryPositionReference,
        public string $settlementResourceReference,
        public int $amountMinor,
        string $currency,
        public string $purpose,
        public string $idempotencyKey,
        public DateTimeImmutable $effectiveAt,
        public JurisdictionContext $jurisdiction,
        public array $traceReferences = [],
    ) {
        $currency = mb_strtoupper(trim($currency));

        foreach ([
            'operation' => $operation,
            'principal reference' => $principalReference,
            'mandate reference' => $mandateReference,
            'Treasury Position reference' => $treasuryPositionReference,
            'Settlement Resource reference' => $settlementResourceReference,
            'purpose' => $purpose,
            'idempotency key' => $idempotencyKey,
        ] as $name => $value) {
            if (trim($value) === '') {
                throw new InvalidArgumentException("The {$name} is required.");
            }
        }

        if ($amountMinor < 0) {
            throw new InvalidArgumentException('The amount in minor units cannot be negative.');
        }

        if (mb_strlen($currency) !== 3) {
            throw new InvalidArgumentException('The currency must be a three-letter ISO code.');
        }

        $this->currency = $currency;
    }
}
