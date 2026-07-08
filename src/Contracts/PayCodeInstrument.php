<?php

namespace LBHurtado\XLegal\Contracts;

interface PayCodeInstrument
{
    public function payCode(): string;

    public function settlementInstructionId(): string;

    public function principalId(): string;

    public function isRedemptionCredential(): bool;

    public function representsStoredValue(): bool;
}
