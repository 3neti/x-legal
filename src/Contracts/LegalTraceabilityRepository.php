<?php

namespace LBHurtado\XLegal\Contracts;

use LBHurtado\XLegal\ValueObjects\ArchitecturalInvariant;
use LBHurtado\XLegal\ValueObjects\LegalAuthority;
use LBHurtado\XLegal\ValueObjects\LegalTrace;
use LBHurtado\XLegal\ValueObjects\RegulatoryConstraint;

interface LegalTraceabilityRepository
{
    public function linkLegalAuthority(string $artifactId, LegalAuthority $authority): void;

    public function linkRegulatoryConstraint(string $artifactId, RegulatoryConstraint $constraint): void;

    public function linkArchitecturalInvariant(string $artifactId, ArchitecturalInvariant $invariant): void;

    public function linkPackageArtifact(string $artifactId, string $packageCodeArtifact): void;

    public function linkOpenQuestion(string $artifactId, string $questionId): void;

    public function legalTraceFor(string $artifactId): LegalTrace;
}
