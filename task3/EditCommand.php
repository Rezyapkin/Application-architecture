<?php

namespace task3;

abstract class EditCommand {

    #Можем для отдельных команд отключать логирование
    public function isLoggable() {
        return True;
    }

    abstract public function execute(WordDocument $document);
    abstract public function unExecute(WordDocument $document);

}