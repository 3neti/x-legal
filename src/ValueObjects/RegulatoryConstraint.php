<?php

namespace LBHurtado\XLegal\ValueObjects;

readonly class RegulatoryConstraint
{
    public function __construct(
        public string $jurisdiction,
        public string $identifier,
        public string $text,
        public string $riskLevel = 'open',
    ) {
    }

    public function asArray(): array
    {
        return [
            'jurisdiction' => $this->jurisdiction,
            'identifier' => $this->identifier,
            'text' => $this->text,
            'riskLevel' => $this->riskLevel,
        ];
    }
}
