<?php

declare(strict_types=1);

use App\Controller\StudentController;

return [
    '/alunos' => [StudentController::class, 'list'],
    '/api/alunos' => [StudentController::class, 'getAll'],
    '/alunos/adicionar' => [StudentController::class, 'add'],
    '/alunos/editar' => [StudentController::class, 'edit'],
    '/alunos/view' => [StudentController::class, 'view'],
    '/alunos/excluir' => [StudentController::class, 'remove'],
];
