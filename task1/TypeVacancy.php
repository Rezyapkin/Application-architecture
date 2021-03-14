<?php

namespace task1;

class TypeVacancy {
    const VALID_TYPES = [
        'Программист PHP',
        'Программист Python',
        'Программист Java',
        'Верстальщик (HTML, CSS)'
    ]; 

    public function __construct(string $name) {
        if (in_array($name, self::VALID_TYPES)) {
            $this->name = $name;
        } else die("Профессии '{$name}' не существует");

    }

    public function __toString() {
        return $this->name;
    }

}