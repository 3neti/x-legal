<?php

namespace LBHurtado\XLegal\ValueObjects;

readonly class LegalTrace
{
    /**
     * @param array<int, LegalAuthority> $authorities
     * @param array<int, RegulatoryConstraint> $constraints
     * @param array<int, ArchitecturalInvariant> $invariants
     */
    public function __construct(
        public array $authorities = [],
        public array $constraints = [],
        public array $invariants = [],
        public array $packageArtifacts = [],
        public array $openQuestions = [],
    ) {
    }

    public function asArray(): array
    {
        return [
            'authorities' => $this->authorities,
            'constraints' => $this->constraints,
            'invariants' => $this->invariants,
            'packageArtifacts' => $this->packageArtifacts,
            'openQuestions' => $this->openQuestions,
        ];
    }
}
