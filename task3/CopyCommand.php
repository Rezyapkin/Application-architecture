<?php

namespace task3;

class CopyCommand extends EditCommand {
    
    public function isLoggable() {
        return False;
    }

    public function __construct(int $start, int $end) {
        $this->start = $start;
        $this->end = $end < $start ? $start : $end;
        $this->substr = "";
    }

    public function execute(WordDocument $document) {
        $part_text = mb_substr($document->getText(), $this->start, $this->end - $this->start + 1);
        $this->substr = $part_text;
        $document->wordEditor->clipboard->put($part_text);
    }

    public function unExecute(WordDocument $document) {

    }

}