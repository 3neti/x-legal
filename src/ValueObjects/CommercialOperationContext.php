<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\ValueObjects;

use DateTimeImmutable;
use InvalidArgumentException;

final readonly class CommercialOperationContext
{
    public string $currency;

    /**
     * @param  list<string>  $traceReferences
     */
    public function __construct(
        public string $operation,
        public string $principalReference,
        public string $mandateReference,
        public string $commercialOfferingReference,
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
            'Commercial Offering reference' => $commercialOfferingReference,
            'purpose' => $purpose,
            'idempotency key' => $idempotencyKey,
        ] as $name => $value) {
            if (trim($value) === '') {
                throw new InvalidArgumentException("The {$name} is required.");
            }
        }

        if ($amountMinor < 0) {
            throw new InvalidArgumentException('The commercial amount in minor units cannot be negative.');
        }

        if (preg_match('/^[A-Z]{3}$/', $currency) !== 1) {
            throw new InvalidArgumentException('The currency must be a three-letter ISO code.');
        }

        $this->currency = $currency;
    }
}
