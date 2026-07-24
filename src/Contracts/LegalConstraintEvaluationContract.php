<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\Contracts;

use LBHurtado\XLegal\ValueObjects\LegalConstraintDecision;
use LBHurtado\XLegal\ValueObjects\TreasuryOperationContext;

interface LegalConstraintEvaluationContract
{
    public function evaluate(TreasuryOperationContext $context): LegalConstraintDecision;
}
