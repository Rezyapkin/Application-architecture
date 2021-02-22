<?php

namespace DBFactory;

use DBConnection;
use DBQueryBuilder;
use DBRecord;

class MySQLFactory extends DBFactory {

    public function createConnection(array $configConnection) {
        return new DBConnection\MySQLConnection($configConnection);
    }

    public function createQueryBuilder() {
        return new DBQueryBuilder\MySQLQueryBuilder($this->connection);
    }
    
    public function createRecord(array $data) {
        return new DBRecord\MySQLRecord($this, $data);
    }

}
