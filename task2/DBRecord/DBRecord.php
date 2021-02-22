<?php

namespace DBRecord;

use DBConnection\DBConnection;

abstract class DBRecord {

    private $connection = null;
    private $data = [];

    public function __constructor(DBConnection $connection, array $data) {
        $this->$connection = $connection;
        $this->$data = $data;
    }

    public function __set($property, $value) {
        if (array_key_exists($property, $this->data)) {
            $this[$property] = $value;
        }
    }

    public function __get($property) {
        if (array_key_exists($property, $this->data)) {
            return $this[$property];
        }
    }

    public function save() {
        $this->$connection->query()->executeSQL($this->getSaveSQL(), $data);
    }

    abstract public function getSaveSQL();

}