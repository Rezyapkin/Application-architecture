<?php

namespace DBFactory;

use DBConnection;
use DBQueryBuilder;
use DBRecord;

class PostgreSQLFactory extends DBFactory {

    public function createConnection(array $configConnection) {
        return new DBConnection\PostgreSQLConnection($configConnection);
    }

    public function createQueryBuilder() {
        return new DBQueryBuilder\PostgreSQLQueryBuilder($this->connection);
    }
    
    public function createRecord(array $data) {
        return new DBRecord\PostgreSQLRecord($this, $data);
    }

}
