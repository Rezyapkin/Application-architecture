<?php

namespace DBConnection;

class PostgreSQLConnection extends DBConnection {

    public function getDSNString() {
        return sprintf(
            "%pgsql:host=%s;dbname=%s;charset=%s",
            $this->config['driver'],
            $this->config['host'],
            $this->config['database'],
            $this->config['charset']);
    }

}