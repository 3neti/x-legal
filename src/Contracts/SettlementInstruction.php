<?php

namespace LBHurtado\XLegal\Contracts;

use DateTimeImmutable;

interface SettlementInstruction
{
    public function instructionId(): string;

    public function principalId(): string;

    public function amount(): string;

    public function purpose(): string;

    public function expiryDate(): ?DateTimeImmutable;

    public function isGeneralPurposeStoredValue(): bool;
}
