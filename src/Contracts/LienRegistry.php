<?php

namespace LBHurtado\XLegal\Contracts;

interface LienRegistry
{
    public function reserveForInstruction(string $instructionId, int $amount): string;

    public function releaseReservation(string $reservationId): void;

    public function markReservationExecuted(string $reservationId): void;

    public function queryActiveLiens(): array;
}
