<?php

namespace App\Application\UseCase\Worker;

use App\Domain\Entity\Worker;
use App\Domain\Repository\WorkerRepositoryInterface;
use App\Domain\ValueObject\Worker\Age;
use App\Domain\ValueObject\Worker\Gender;
use App\Domain\ValueObject\Worker\Id;
use App\Domain\ValueObject\Worker\Name;
use App\Domain\ValueObject\Worker\Salary;

class CreateWorkerUseCase
{
    public function __construct(
        private WorkerRepositoryInterface $workerRepository
    )
    {
    }

    public function execute()
    {
        $worker = new Worker(
            new Id(1),
            new Age(20),
            new Gender('муж'),
            new Name('Илья', 'Волков', 'Викторович'),
            new Salary(1000)
        );

        $this->workerRepository->add($worker);

        return $worker;
    }
}