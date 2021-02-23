<?php

namespace task1\notify;

use task1\contacts\Person;

interface INotify {

    public function sendNotify(string $message, Person $to);

}