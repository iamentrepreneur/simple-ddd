<?php

namespace App\Domain\ValueObject\Worker;

use http\Exception\InvalidArgumentException;

final readonly class Name
{
    public function __construct(
        private string $name,
        private string $surName,
        private string $middleName,
    )
    {
        $this->assertNameValid($name);
        $this->assertSurNameValid($surName);
        $this->assertMiddleValid($middleName);
    }

    public function getFullName(): string
    {
        return $this->getSurName() . " " . $this->getName() . " " . $this->getMiddleName();
    }
    
    public function getName(): string
    {
        return $this->name;
    }

    public function getSurName(): string
    {
        return $this->surName;
    }

    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    private function assertNameValid($value): void
    {
        if (preg_match("/^[А-ЯЁ][а-яё]+$/u", $value)) {
            throw new InvalidArgumentException('Имя должно состоять только из русских букв');
        }
    }

    private function assertSurNameValid($value): void
    {
        if (preg_match("/^[А-ЯЁ][а-яё]+$/u", $value)) {
            throw new InvalidArgumentException('Фамилия должно состоять только из русских букв');
        }
    }

    private function assertMiddleValid($value): void
    {
        if (preg_match("/^[А-ЯЁ][а-яё]+$/u", $value)) {
            throw new InvalidArgumentException('Отчество должно состоять только из русских букв');
        }
    }
}