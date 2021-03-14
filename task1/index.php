<?php

namespace task1;

use task1\contacts\Person;
use task1\notify\{EmailNotify, SMSNotify, INotify, Notify};

require_once "../config.php";
require_once "../Autoload.php";

spl_autoload_register([new \Autoload(), 'loadClass']);

echo "<h3>Задание 1</h3>";
echo "<ul>";
echo "<li>Сделал без интерфейсов и абстрактных классов, т.к. именно в этой задаче не вижу других наблюдателей и наблюдаемых! Или нужно было?</li>";
echo "<li>Как правильнее было организовать хранение и выбор типов из предопределенных значений?</li></ul>";

$hadHunter = new HadHunter();
$phpProgrammer = new TypeVacancy("Программист PHP");
$dmitry = new Applicant("Дмитрий", 35, "dmitry@yandex.ru");
var_dump($dmitry);
echo '<br>';

$misha = new Applicant("Михаил", 37, "mmm@yandex.ru");
var_dump($misha);
echo '<br>';

$hadHunter->subscribe($misha, $phpProgrammer);
echo 'Подписали на вакансии программиста Михаила<br>';

$hadHunter->subscribe($dmitry, $phpProgrammer);
echo 'Подписали на вакансии программиста Дмитрия<br>';

echo 'Далее добавим новую вакансию<br>';
$vacancy = new Vacancy("В крупную компанию требуется PHP-программист", $phpProgrammer, "Заработная плата отличная. Чай, кофе, печеньки в ассортименте.");
$hadHunter->addVacancy($vacancy);


echo 'Отписали Михаила<br>';
$hadHunter->describe($misha, $phpProgrammer);

echo 'Снова добавим новую вакансию<br>';
$vacancy = new Vacancy("В маленькую компанию требуется PHP-программист", $phpProgrammer, "Заработная плата небольшая. Опыт получите большой!");
$hadHunter->addVacancy($vacancy);