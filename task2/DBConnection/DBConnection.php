<?php

namespace DBConnection;

abstract class DBConnection{

    protected $configConnection=[];
    protected $connection=null;

    public function __construct(array $configConnection) {
        $this->configConnection = $configConnection;
        //$this->connection = new \PDO($this->getDSNString(), $this->$configConnection['login'], $this->$configConnection['password']);
        echo "Соединились с базой данных: ".$this->getDSNString().'<br>';
    }


    abstract public function getDSNString();

}