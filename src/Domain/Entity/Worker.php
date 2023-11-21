<?php

namespace App\Domain\Entity;

use App\Domain\ValueObject\Worker\Age;
use App\Domain\ValueObject\Worker\Gender;
use App\Domain\ValueObject\Worker\Id;
use App\Domain\ValueObject\Worker\Name;
use App\Domain\ValueObject\Worker\Salary;

final class Worker
{
    public function __construct(
        private readonly Id     $id,
        private readonly Age    $age,
        private readonly Gender $gender,
        private readonly Name   $name,
        private readonly Salary $salary
    )
    {
    }

    public function getId(): Id
    {
        return $this->id;
    }

    public function getAge(): Age
    {
        return $this->age;
    }

    public function getGender(): Gender
    {
        return $this->gender;
    }

    public function getName(): Name
    {
        return $this->name;
    }

    public function getSalary(): Salary
    {
        return $this->salary;
    }

}