<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Student;
use App\Entity\Address;
use App\Entity\StudentResponsible;
use DateTime;
use Doctrine\ORM\EntityRepository;
use InvalidArgumentException;

class StudentService extends AbstractService
{
    private readonly EntityRepository $repository;

    public function __construct()
    {
        parent::__construct();
        $this->repository = $this->entityManager->getRepository(Student::class);
    }

    public function findAll(): array
    {
        return $this->repository->findAll();
    }

    public function findBy(array $criteria): array
    {
        return $this->repository->findBy($criteria);
    }

    public function find(int $id): Student
    {
        $student = $this->repository->find($id);

        if (!$student) {
            throw new InvalidArgumentException('Aluno não encontrado');
        }

        return $student;
    }

    public function update(Student $student): Student
    {
        $this->entityManager->persist($student);
        $this->entityManager->flush();

        return $student;
    }

    public function remove(int $id): void
    {
        $student = $this->find($id);
        $this->entityManager->remove($student);
        $this->entityManager->flush();
    }

    public function create(Student $student): void
    {
        $this->entityManager->persist($student);
        $this->entityManager->flush();
    }

    public function createFromForm(array $data): void
    {
        // Criar endereço
        $address = new Address();
        $address->fill($data);

        // Criar responsável
        $responsible = new StudentResponsible();
        $responsible->setName(trim($data['responsibleName']));
        $responsible->setDocument(trim($data['responsibleDocument']));
        $responsible->setPhone(trim($data['responsiblePhone']));
        $responsible->setEmail(trim($data['responsibleEmail']));
        $responsible->setAddress($address);

        // Criar aluno
        $student = new Student(
            trim($data['name']),
            new DateTime($data['birthDate']),
            !empty($data['cpf']) ? trim($data['cpf']) : null,
            trim($data['phone']),
            trim($data['notes']),
            $address,
            $responsible
        );

        $this->entityManager->persist($address);
        $this->entityManager->persist($responsible);
        $this->entityManager->persist($student);
        $this->entityManager->flush();
    }
}
