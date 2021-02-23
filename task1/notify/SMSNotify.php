<?php

namespace task1\notify;

use task1\contacts\Person;

class SMSNotify extends DecoratorNotify
{

    public function sendNotify(string $message, Person $to)
    {
        //TODO Тут должна быть бизнес-логика по отправке SMS
        echo "SMS-сообщение (" . $to->phone . "): ".$message."<br>";
        $this->notify->sendNotify($message, $to);
    }

}