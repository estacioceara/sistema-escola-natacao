<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\TeacherService;

final class TeacherController extends AbstractController
{
    public const string VIEW_LIST = 'teacher/list';
    public const string VIEW_ADD = 'teacher/add';
    public const string VIEW_EDIT = 'teacher/edit';
    public const string VIEW_VIEW = 'teacher/view';

    private readonly TeacherService $service;

    public function __construct()
    {
        $this->service = new TeacherService();
    }

    public function list(): void
    {
        $teachers = $this->service->findAll();

        $this->render(self::VIEW_LIST, [
            'teachers' => $teachers,
        ]);
    }

    public function getAll(): void
    {
        $teachers = array_map(function ($teacher) {
            return [
                'id' => $teacher->getId(),
                'nome' => $teacher->getName(),
                'cpf' => $teacher->getCpf(),
                'categoria' => $teacher->getCategory(),
            ];
        }, $this->service->findAll());

        header('Content-type: application/json');

        echo json_encode($teachers);
        exit;
    }

    public function add(): void
    {
        if (empty($_POST)) {
            $this->render(self::VIEW_ADD);

            return;
        }

        $this->service->createFromForm($_POST);
        $this->redirectToURL('/professores');
    }

    public function edit(): void
    {
        $this->render(self::VIEW_EDIT);
    }

    public function view(): void
    {
        $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
        
        if ($id === 0) {
            $this->redirectToURL('/professores');
            return;
        }

        try {
            $teacher = $this->service->find($id);
            
            $this->render(self::VIEW_VIEW, [
                'teacher' => $teacher,
            ]);
        } catch (\InvalidArgumentException $e) {
            $this->redirectToURL('/professores');
        }
    }

    public function remove(): void
    {
        if (isset($_GET['id'])) {
            $id = (int) $_GET['id'];
            $this->service->remove($id);
        }

        $this->redirectToURL('/professores');
    }
}
