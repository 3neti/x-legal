<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\ValueObjects;

use InvalidArgumentException;

final readonly class JurisdictionContext
{
    public string $jurisdiction;

    public string $legalEntityReference;

    public string $profile;

    public function __construct(
        string $jurisdiction,
        string $legalEntityReference,
        string $profile,
    ) {
        $jurisdiction = mb_strtoupper(trim($jurisdiction));
        $legalEntityReference = trim($legalEntityReference);
        $profile = trim($profile);

        if ($jurisdiction === '') {
            throw new InvalidArgumentException('An explicit legal jurisdiction is required.');
        }

        if ($legalEntityReference === '') {
            throw new InvalidArgumentException('An explicit legal entity reference is required.');
        }

        if ($profile === '') {
            throw new InvalidArgumentException('An explicit legal policy profile is required.');
        }

        $this->jurisdiction = $jurisdiction;
        $this->legalEntityReference = $legalEntityReference;
        $this->profile = $profile;
    }
}
