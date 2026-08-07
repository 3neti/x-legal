<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\Contracts;

use LBHurtado\XLegal\ValueObjects\CommercialOperationContext;
use LBHurtado\XLegal\ValueObjects\LegalConstraintDecision;

interface CommercialLegalConstraintEvaluationContract
{
    public function evaluate(CommercialOperationContext $context): LegalConstraintDecision;
}
