<?php

declare(strict_types=1);

use App\Controller\TeacherController;

return [
    '/professores' => [TeacherController::class, 'list'],
    '/api/professores' => [TeacherController::class, 'getAll'],
    '/professores/adicionar' => [TeacherController::class, 'add'],
    '/professores/editar' => [TeacherController::class, 'edit'],
    '/professores/view' => [TeacherController::class, 'view'],
    '/professores/excluir' => [TeacherController::class, 'remove'],
];
