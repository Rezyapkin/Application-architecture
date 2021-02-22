<?php

namespace DBRecord;

use DBFactory\DBFactory;

abstract class DBRecord {

    protected $factory = null;
    protected $data = [];

    public function __construct(DBFactory $factory, array $data) {
        $this->factory = $factory;
        $this->data = $data;
    }

    public function __set($property, $value) {
        if (array_key_exists($property, $this->data)) {
            $this->data[$property] = $value;
        }
    }

    public function __get($property) {
        if (array_key_exists($property, $this->data)) {
            return $this->data[$property];
        }
    }

    public function save() {
        $this->factory->query()->executeSQL($this->getSaveSQL(), $data);
    }

    abstract public function getSaveSQL();

}