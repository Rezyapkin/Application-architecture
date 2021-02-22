<?php

namespace DBQueryBuilder;

use DBConnection\DBConnection;

// Тут решил делать не абсрактный класс. По идее реализуем традиционную работу с SQL а в неследниках вносим правки, учитвающие диалект конкретной СУБД.
class DBQueryBuilder {
    private $connection=null;

    public function __constructor(DBConnection $connection) {
        $this->$connection = $connection;
    }

    public function getAllFromTable($table) {
        echo "SELECT * FROM ".$table. "; //".get_class($this)."<br>";
    }

    public function executeSQL($sql, $params) {
        echo $sql."<br>";
    }

}

