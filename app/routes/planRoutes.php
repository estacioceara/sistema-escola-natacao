<?php

declare(strict_types=1);

use App\Controller\EducationalPlanController;

return [
    '/planos' => [EducationalPlanController::class, 'list'],
    '/api/planos' => [EducationalPlanController::class, 'getAll'],
    '/planos/adicionar' => [EducationalPlanController::class, 'add'],
    '/planos/editar' => [EducationalPlanController::class, 'edit'],
    '/planos/view' => [EducationalPlanController::class, 'view'],
    '/planos/excluir' => [EducationalPlanController::class, 'remove'],
];
