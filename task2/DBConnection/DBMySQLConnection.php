<?php

namespace DBConnection;

class MySQLConnection extends DBConnection {

    public function getDSNString() {
        return sprintf(
            "%mysql:host=%s;dbname=%s;charset=%s",
            $this->config['driver'],
            $this->config['host'],
            $this->config['database'],
            $this->config['charset']);
    }

}