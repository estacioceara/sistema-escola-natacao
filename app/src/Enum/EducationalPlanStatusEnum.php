<?php

declare(strict_types=1);

namespace App\Enum;

enum EducationalPlanStatusEnum: string
{
    case ACTIVE = 'ACTIVE';
    case EXPIRED = 'EXPIRED';
    case CANCELED = 'CANCELED';
}
