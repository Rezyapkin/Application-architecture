<?php

namespace DBConnection;

class MySQLConnection extends DBConnection {

    public function getDSNString() {
        return sprintf(
            "mysql:host=%s;dbname=%s;charset=%s",
            $this->configConnection['host'],
            $this->configConnection['database'],
            $this->configConnection['charset']);
    }

}