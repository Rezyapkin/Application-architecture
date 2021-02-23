<?php

namespace task1\notify;

use task1\contacts\Person;

class EMailNotify extends DecoratorNotify
{

    public function sendNotify(string $message, Person $to)
    {
        //TODO Тут должна быть бизнес-логика по отправке Email
        echo "Email (" . $to->email . "): ".$message."<br>";
        $this->notify->sendNotify($message, $to);
    }

}