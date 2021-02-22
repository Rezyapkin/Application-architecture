<?php

namespace DBConnection;

class OracleConnection extends DBConnection {

    public function getDSNString() {
        return sprintf(
            "%oracle:host=%s;dbname=%s;charset=%s",
            $this->config['driver'],
            $this->config['host'],
            $this->config['database'],
            $this->config['charset']);
    }

}