<?php

namespace DBConnection;

class PostgreSQLConnection extends DBConnection {

    public function getDSNString() {
        return sprintf(
            "pgsql:host=%s;dbname=%s;charset=%s",
            $this->configConnection['host'],
            $this->configConnection['database'],
            $this->configConnection['charset']
        );
        
    }

}