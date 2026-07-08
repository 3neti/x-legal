<?php

namespace LBHurtado\XLegal\ValueObjects;

readonly class LegalAuthority
{
    public function __construct(
        public string $source,
        public string $reference,
        public string $description,
        public string $status = 'hypothesis',
    ) {
    }

    public function asArray(): array
    {
        return [
            'source' => $this->source,
            'reference' => $this->reference,
            'description' => $this->description,
            'status' => $this->status,
        ];
    }
}
