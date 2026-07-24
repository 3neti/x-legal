<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\Contracts;

use LBHurtado\XLegal\ValueObjects\JurisdictionContext;
use LBHurtado\XLegal\ValueObjects\TreasuryPolicyProfile;

interface TreasuryPolicyProfileResolverContract
{
    public function resolve(JurisdictionContext $context): TreasuryPolicyProfile;
}
