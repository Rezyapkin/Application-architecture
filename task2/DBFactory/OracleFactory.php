<?php

namespace DBFactory;

use DBConnection;
use DBQueryBuilder;
use DBRecord;

class OracleFactory extends DBFactory {

    public function createConnection(array $configConnection) {
        return new DBConnection\OracleConnection($configConnection);
    }

    public function createQueryBuilder() {
        return new DBQueryBuilder\OracleQueryBuilder($this->connection);
    }
    
    public function createRecord(array $data) {
        return new DBRecord\OracleRecord($this, $data);
    }

}
