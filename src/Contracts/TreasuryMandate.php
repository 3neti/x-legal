<?php

namespace LBHurtado\XLegal\Contracts;

use DateTimeImmutable;

interface TreasuryMandate
{
    public function principalId(): string;

    public function mandateId(): string;

    public function isLimitedToSettlementPurposes(): bool;

    public function isStoredValueUseProhibited(): bool;

    public function effectiveDate(): DateTimeImmutable;

    public function isRevokedOrTerminated(): bool;
}
