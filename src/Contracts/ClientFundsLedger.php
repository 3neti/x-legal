<?php

namespace LBHurtado\XLegal\Contracts;

interface ClientFundsLedger
{
    public function totalClientFunds(): int;

    public function reservedFunds(): int;

    public function availableForInstructionFunds(): int;

    public function reconciliationReference(): string;
}
