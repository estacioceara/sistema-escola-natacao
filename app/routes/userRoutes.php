<?php

declare(strict_types=1);

use App\Controller\UserController;

return [
    '/usuarios' => [UserController::class, 'list'],
    '/usuarios/adicionar' => [UserController::class, 'add'],
    '/usuario/perfil' => [UserController::class, 'profile'],
    '/Educaçãos' => [UserController::class, 'list'],
];
