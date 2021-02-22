<?php

require_once 'Autoload.php';
spl_autoload_register([new Autoload(), 'loadClass']);

echo "<h1>Домашнее задание к уроку №4</h1>";


$config = [
    'host' => '127.0.0.1',
    'database' => 'demo',
    'charset' => 'utf8',
    'login' => 'admin',
    'password' => 'pwd'
];

$mysql = new DBFactory\MySQLFactory($config);
$mysql->query()->getAllFromTable('products');
$record = $mysql->createRecord(['name' => "Вася"]);
echo $record->name . '<br>';
$record->save();