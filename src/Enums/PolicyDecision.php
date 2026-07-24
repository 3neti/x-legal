<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\Enums;

enum PolicyDecision: string
{
    case Allowed = 'allowed';
    case Blocked = 'blocked';
    case ReviewRequired = 'review_required';
}
