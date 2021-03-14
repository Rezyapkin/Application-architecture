<?php

namespace task1;

class Vacancy {
    public function __construct(string $name, TypeVacancy $typeVacancy, string $description) {
        $this->name = $name;
        $this->typeVacancy = $typeVacancy;
        $this->description = $description;
    }

    public function __toString() {
        return "{$this->name} ({$this->description})";
    }
}