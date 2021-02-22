<?php

namespace DBConnection;

class OracleConnection extends DBConnection {

    public function getDSNString() {
        return sprintf(
            "oracle:host=%s;dbname=%s;charset=%s",
            $this->configConnection['host'],
            $this->configConnection['database'],
            $this->configConnection['charset']);
    }


}