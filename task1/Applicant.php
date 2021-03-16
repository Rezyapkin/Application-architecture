<?php

namespace task1;

class Applicant {

    public function __construct(string $name, int $stage, string $email) {
        $this->name = $name;
        $this->stage = $stage;
        $this->email = $email;
    }

    public function sendEmail($message) {
        echo "{$this->name} получил e-mail! {$message} <br>";
    }

}