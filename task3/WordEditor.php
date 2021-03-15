<?php

namespace task3;

class WordEditor {

    protected $commands;

    public function __construct(Clipboard $clipboard) {
        $this->clipboard = $clipboard;
        $this->currentCommandNumber = 0;
        $this->commands = []; 
    }

    protected function clearCommandsAfterCueernt() {
        while ($this->currentCommandNumber < count($this->commands)) {
            array_pop($this->commands);
        }
    }

    public function action(WordDocument $document, EditCommand $command) {
        $command->execute($document);

        if ($command->isLoggable()) {
            $this->commands[$this->currentCommandNumber++] = [$document, $command];
            $this->clearCommandsAfterCueernt();
        }
    }
        
    public function down(int $levels) {
        echo "Отменить $levels операций".PHP_EOL;
        
        for ($i = 0; $i < $levels; $i++)
        {
            if($this->currentCommandNumber > 0) {
                $command = $this->commands[--$this->currentCommandNumber];
                $command[1]->unExecute($command[0]);
            }
        }
    }
        
    public function up(int $levels) {
        echo "Вернуть $levels операций".PHP_EOL;
        
        for ($i = 0; $i < $levels; $i++)
        {
            if($this->currentCommandNumber < count($this->commands)) {
                $command = $this->commands[$this->currentCommandNumber++];
                $command[1]->Execute($command[0]);
            }
        }
    }
        

}