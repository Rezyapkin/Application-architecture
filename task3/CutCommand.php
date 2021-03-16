<?php

namespace task3;

class CutCommand extends CopyCommand {
    
    public function isLoggable() {
        return True;
    }

    public function __construct(int $start, int $end) {
        parent::__construct($start, $end);
    }

    public function execute(WordDocument $document) {
        if ($this->substr) {
            return;
        }
        parent::execute($document);
        $text = mb_substr($document->getText(), 0, $this->start) . mb_substr($document->getText(), $this->end + 1);
        $document->setText($text);
    }

    public function unExecute(WordDocument $document) {
        $text = mb_substr($document->getText(), 0, $this->start) . $this->substr . mb_substr($document->getText(), $this->start);
        $document->setText($text);
    }

}