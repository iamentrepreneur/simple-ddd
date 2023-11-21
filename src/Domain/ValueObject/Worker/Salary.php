<?php

namespace App\Domain\ValueObject\Worker;

use http\Exception\InvalidArgumentException;

final readonly class Salary
{
    public function __construct(
        private readonly int $salary
    )
    {
    }
    
    public function getSalary(): int
    {
        return $this->salary;
    }

    public function asserSalaryValid($value): void
    {
        if ($value < 0) {
            throw new InvalidArgumentException('Значение должно быть больше 0');
        }
    }
}