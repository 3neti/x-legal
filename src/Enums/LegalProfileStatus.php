<?php

declare(strict_types=1);

namespace LBHurtado\XLegal\Enums;

enum LegalProfileStatus: string
{
    case UnderAnalysis = 'under_analysis';
    case CounselReviewed = 'counsel_reviewed';
    case ApprovedWorkingModel = 'approved_working_model';
    case Superseded = 'superseded';

    public function mayAuthorizeOperations(): bool
    {
        return in_array($this, [
            self::CounselReviewed,
            self::ApprovedWorkingModel,
        ], true);
    }
}
