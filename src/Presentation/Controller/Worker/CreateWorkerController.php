<?php

namespace App\Presentation\Controller\Worker;

use App\Application\UseCase\Worker\CreateWorkerUseCase;

readonly class CreateWorkerController
{
    public function __construct(private CreateWorkerUseCase $createWorkerUseCase)
    {
    }

    public function createWorker(): null
    {
        $worker = $this->createWorkerUseCase->execute();

        return null;
    }
}