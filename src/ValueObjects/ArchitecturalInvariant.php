<?php

namespace LBHurtado\XLegal\ValueObjects;

readonly class ArchitecturalInvariant
{
    public function __construct(
        public string $code,
        public string $text,
        public string $status = 'proposed',
        public string $reviewer = '',
    ) {
    }

    public function asArray(): array
    {
        return [
            'code' => $this->code,
            'text' => $this->text,
            'status' => $this->status,
            'reviewer' => $this->reviewer,
        ];
    }
}
