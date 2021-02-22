<?php

/*
На самом деле на уроках по PHP II мы делали Singleton именно на трейтах. 
Поэтому в нашей группе должны все сделать и понимать о чем речь)))
Вот ссылка по мой Git с трейтом Sinleton в домашке на PHP2:
https://github.com/Rezyapkin/PHP2/blob/lesson_3/traits/TSingletone.php
*/

trait TSingleton {
    private static $instance = null;

    public static function getInstance() {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}
}
