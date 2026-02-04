<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\StudentService;

final class StudentController extends AbstractController
{
    public const string VIEW_LIST = 'student/list';
    public const string VIEW_ADD = 'student/add';
    public const string VIEW_EDIT = 'student/edit';
    public const string VIEW_VIEW = 'student/view';

    private readonly StudentService $service;

    public function __construct()
    {
        $this->service = new StudentService();
    }

    public function list(): void
    {
        $students = $this->service->findAll();

        $this->render(self::VIEW_LIST, [
            'students' => $students,
        ]);
    }

    public function getAll(): void
    {
        $students = array_map(function ($student) {
            return [
                'id' => $student->getId(),
                'nome' => $student->getName(),
                'telefone' => $student->getPhone(),
                'cpf' => $student->getCpf(),
            ];
        }, $this->service->findAll());

        header('Content-type: application/json');

        echo json_encode($students);
        exit;
    }

    public function add(): void
    {
        if (empty($_POST)) {
            $this->render(self::VIEW_ADD);

            return;
        }

        // TODO: Implementar createFromForm no StudentService
        // $this->service->createFromForm($_POST);
        $this->redirectToURL('/alunos');
    }

    public function edit(): void
    {
        $this->render(self::VIEW_EDIT);
    }

    public function view(): void
    {
        $this->render(self::VIEW_VIEW);
    }

    public function remove(): void
    {
        if (isset($_GET['id'])) {
            $id = (int) $_GET['id'];
            $this->service->remove($id);
        }

        $this->redirectToURL('/alunos');
    }
}
