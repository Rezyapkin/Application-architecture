<?php

require("TSingleton.php");


// Ну а это пример использования трейта TSingleton
class Db
{

    use TSingletone;

    private $config = [
        'driver' => 'mysql',
        'host' => 'localhost',
        'login' => 'root',
        'password' => 'root',
        'database' => 'geekbrains',
        'charset' => 'utf8'
    ];

    private $connection = null;

    private function getConnection() {
        if (is_null($this->connection)) {
            $this->connection = new PDO($this->prepareDsnString(),
                $this->config['login'],
                $this->config['password']);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        }
        return $this->connection;
    }

    private function prepareDsnString() {
         return sprintf( "%s:host=%s;dbname=%s;charset=%s",
            $this->config['driver'],
            $this->config['host'],
            $this->config['database'],
            $this->config['charset']
         );

    } 

}