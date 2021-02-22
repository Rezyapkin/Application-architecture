<?php

namespace DBRecord;

class MySQLRecord extends DBRecord {

    public function getSaveSQL() {
        return "MySQL-запрос для сохранения записи<br>";
    }


}