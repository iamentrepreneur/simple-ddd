<?php

namespace App\Domain\ValueObject\Worker;

use http\Exception\InvalidArgumentException;

final readonly class Age
{
    public function __construct(private int $age)
    {
        $this->assertAgeValid($age);
    }

    public function getAge(): int
    {
        return $this->age;
    }

    private function assertAgeValid($value): void
    {
        if ($value < 18) {
            throw new InvalidArgumentException('Возраст должен быть от 18 лет');
        }
    }
}