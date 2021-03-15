<?php

namespace task2;

require_once "../config.php";
require_once "../Autoload.php";

spl_autoload_register([new \Autoload(), 'loadClass']);

echo "<h3>Задание 2</h3>";

$order1 = new Order(10000, 79229292929);
$order2 = new Order(20000, 79229111119);
$order3 = new Order(30000, 79129292929);

$order1->pay(new QiwiPayment());
$order2->pay(new YandexPayment());
$order3->pay(new WebMoneyPayment());

echo "<hr>";

echo $order1->getPayInfo() . "<br>";
echo $order2->getPayInfo() . "<br>";
echo $order3->getPayInfo() . "<br>";