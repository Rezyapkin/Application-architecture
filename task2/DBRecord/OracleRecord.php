<?php

namespace OracleRecord;

class OracleRecord extends DBRecord {

    public function getSaveSQL() {
        return "Oracle-запрос для сохранения записи<br>";
    }

}