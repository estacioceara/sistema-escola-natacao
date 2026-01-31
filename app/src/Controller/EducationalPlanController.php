<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\EducationalPlanService;

final class EducationalPlanController extends AbstractController
{
    public const string VIEW_LIST = 'plan/list';
    public const string VIEW_ADD = 'plan/add';
    public const string VIEW_EDIT = 'plan/edit';
    public const string VIEW_VIEW = 'plan/view';

    private readonly EducationalPlanService $service;

    public function __construct()
    {
        $this->service = new EducationalPlanService();
    }

    public function list(): void
    {
        $plans = $this->service->findAll();

        $this->render(self::VIEW_LIST, [
            'plans' => $plans,
        ]);
    }

    public function getAll(): void
    {
        $plans = array_map(function ($dado) {
            return [
                'id' => $dado->getId(),
                'nome' => $dado->getName(),
                'valor' => $dado->getValue(),
            ];
        }, $this->service->findAll());

        header('Content-type: application/json');

        echo json_encode($plans);
        exit;
    }

    public function add(): void
    {
        if (empty($_POST)) {
            $this->render(self::VIEW_ADD);

            return;
        }

        $this->service->createFromForm($_POST);
        $this->redirectToURL('/planos');
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
        echo 'Removendo plano';
    }
}
