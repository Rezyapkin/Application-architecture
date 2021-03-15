<?php

namespace task3;

class WordDocument {

    protected $text;

    public function __construct(WordEditor $wordEditor) {
        $this->text = "";
        $this->wordEditor = $wordEditor; 
    }

    public function open(string $filename) {
        $this->text = file_get_contents($filename, FILE_USE_INCLUDE_PATH);
    }

    public function save(string $filename) {
        file_put_contents($filename, $this->text, FILE_APPEND | LOCK_EX);
    }

    public function print() {
        echo "<p>{$this->text}</p>";
    }    

    public function length() {
        return mb_strlen($this->text);
    } 
    
    public function getText() {
        return $this->text;
    }

    public function setText(string $newText) {
        $this->text = $newText;
    }

}