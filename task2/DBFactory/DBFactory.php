<?php

namespace DBFactory;

abstract class DBFactory{

    private $connection = null;
    private $queryBuilder = null;
    private $configConnection = [];

    public function __construct(array $configConnection) {
        $this->configConnection = $configConnection;
        $this->$connection = $this->createConnection($configConnection);
        $this->$queryBuilder = $this->createQueryBuilder();
    }

    public function query() {
        return $this->$queryBuilder;
    }

    abstract public function createConnection(array $configConnection);
    abstract public function createQueryBuilder();
    abstract public function createRecord(array $data);

    
}
