<?php

namespace App\Domain\Repository;

use App\Domain\Entity\Worker;

interface WorkerRepositoryInterface
{
    public function add(): void;
    public function remove(): void;
    public function getById(int $id): Worker;
}