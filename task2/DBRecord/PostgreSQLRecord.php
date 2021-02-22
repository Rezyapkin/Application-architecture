<?php

namespace DBRecord;

class PostgreSQLRecord extends DBRecord {

    public function getSaveSQL() {
        return "PostgreSQL-запрос для сохранения записи<br>";
    }

}