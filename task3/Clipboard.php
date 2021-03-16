<?php

namespace task3;

class Clipboard {

    private $clipboard;

    public function __construct() {
        $this->clear();
    }

    public function clear() {
        $this->$clipboard = "";
    }

    public function get() {
        return $this->$clipboard;
    }

    public function put(string $text) {
        return $this->$clipboard = $text;
    }

}