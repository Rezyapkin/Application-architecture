<?php

namespace task3;

class PasteCommand extends EditCommand {
    
    public function __construct(int $start) {
        $this->start = $start;
        $this->substr = "";
    }

    public function execute(WordDocument $document) {
        $this->substr = $document->wordEditor->clipboard->get();
        $text = mb_substr($document->getText(), 0, $this->start) . $this->substr . mb_substr($document->getText(), $this->start);
        $document->setText($text);
    }

    public function unExecute(WordDocument $document) {
        $text = mb_substr($document->getText(), 0, $this->start) . mb_substr($document->getText(), $this->start + mb_strlen($this->substr));
        $document->setText($text);
    }

}