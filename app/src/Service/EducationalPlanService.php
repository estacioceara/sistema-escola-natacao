<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\EducationalPlan;
use App\Enum\EducationalPlanStatusEnum;
use DateTime;
use Doctrine\ORM\EntityRepository;
use InvalidArgumentException;

class EducationalPlanService extends AbstractService
{
    private readonly EntityRepository $repository;

    public function __construct()
    {
        parent::__construct();
        // ei parceira, pega lá o repositorio da entidade Plan
        $this->repository = $this->entityManager->getRepository(EducationalPlan::class);
    }

    public function findAll(): array
    {
        // é o mesmo que um "SELECT * FROM EducationPlan
        return $this->repository->findAll();
    }

    public function findBy(array $criteria): array
    {
        return $this->repository->findBy($criteria);
    }

    public function find(int $id): EducationalPlan
    {
        $plan = $this->repository->find($id);

        if (!$plan) {
            throw new InvalidArgumentException('Plano não encontrado');
        }

        return $plan;
    }

    public function update(EducationalPlan $advertiserPlan): EducationalPlan
    {
        $this->entityManager->persist($advertiserPlan);
        $this->entityManager->flush();

        return $advertiserPlan;
    }

    public function remove(int $id): void
    {
        $plan = $this->find($id);
        $this->entityManager->remove($plan);
        $this->entityManager->flush();
    }

    public function create(EducationalPlan $advertiserPlan): void
    {
        $this->entityManager->persist($advertiserPlan);
        $this->entityManager->flush();
    }

    public function createFromForm(array $data): void
    {
        $plan = new EducationalPlan();
        $plan->setAdvertiserId(random_int(1, 1000));
        $plan->setName(trim($data['name']));
        $plan->setStartDate(new DateTime($data['startDate']));
        $plan->setStatus(EducationalPlanStatusEnum::from($data['status']));
        $plan->setEndDate(!empty($data['endDate']) ? new DateTime($data['endDate']) : null);

        $this->entityManager->persist($plan);
        $this->entityManager->flush();
    }
}
