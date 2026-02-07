<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Teacher;
use App\Entity\Address;
use Doctrine\ORM\EntityRepository;
use InvalidArgumentException;

class TeacherService extends AbstractService
{
    private readonly EntityRepository $repository;

    public function __construct()
    {
        parent::__construct();
        $this->repository = $this->entityManager->getRepository(Teacher::class);
    }

    public function findAll(): array
    {
        return $this->repository->findAll();
    }

    public function findBy(array $criteria): array
    {
        return $this->repository->findBy($criteria);
    }

    public function find(int $id): Teacher
    {
        $teacher = $this->repository->find($id);

        if (!$teacher) {
            throw new InvalidArgumentException('Professor não encontrado');
        }

        return $teacher;
    }

    public function update(Teacher $teacher): Teacher
    {
        $this->entityManager->persist($teacher);
        $this->entityManager->flush();

        return $teacher;
    }

    public function remove(int $id): void
    {
        $teacher = $this->find($id);
        $this->entityManager->remove($teacher);
        $this->entityManager->flush();
    }

    public function create(Teacher $teacher): void
    {
        $this->entityManager->persist($teacher);
        $this->entityManager->flush();
    }

    public function createFromForm(array $data): void
    {
        // Criar endereço
        $address = new Address();
        $address->fill($data);

        // Criar professor
        $teacher = new Teacher();
        $teacher->setName(trim($data['name']));
        $teacher->setCpf(!empty($data['cpf']) ? trim($data['cpf']) : null);
        $teacher->setCategory(trim($data['category']));
        $teacher->setAddress($address);
        
        // Processar turnos (checkboxes)
        $shifts = isset($data['shifts']) && is_array($data['shifts']) ? $data['shifts'] : [];
        $teacher->setShifts($shifts);

        $this->entityManager->persist($address);
        $this->entityManager->persist($teacher);
        $this->entityManager->flush();
    }
}
