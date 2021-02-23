<?php

namespace task1;

use task1\contacts\Person;
use task1\notify\{EmailNotify, SMSNotify, INotify, Notify};

require_once "../config.php";
require_once "../Autoload.php";

spl_autoload_register([new \Autoload(), 'loadClass']);

$client = new Person("Иванов Иван", "+7-999-111-99-11", "ivanov@ya.ru");

(new SMSNotify(new EmailNotify(new Notify)))->sendNotify("Привет мир!", $client);

