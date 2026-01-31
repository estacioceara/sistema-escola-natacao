<?php

declare(strict_types=1);

use App\Enum\EducationalPlanStatusEnum;

return [
    [
        'name' => 'Plano Básico',
        'value' => 99.89,
        'status' => EducationalPlanStatusEnum::ACTIVE,
    ],
    [
        'name' => 'Plano Premium',
        'value' => 159.59,
        'status' => EducationalPlanStatusEnum::ACTIVE,
    ],
    [
        'name' => 'Plano de Entrada',
        'value' => 9.09,
        'status' => EducationalPlanStatusEnum::CANCELED,
    ],
    [
        'name' => 'Plano Antigo',
        'value' => 59.90,
        'status' => EducationalPlanStatusEnum::EXPIRED,
    ],
    [
        'name' => 'Plano Premium Prime',
        'value' => 398.19,
        'status' => EducationalPlanStatusEnum::ACTIVE,
    ],
];
