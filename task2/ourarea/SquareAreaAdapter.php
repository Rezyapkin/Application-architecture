<?php

namespace task2\ourarea;

use task2\arealib\SquareAreaLib;

class SquareAreaAdapter implements ISquare {
    private $squareArea;
 
    public function __construct(SquareAreaLib $squareArea)
    {
        $this->squareArea = $squareArea;
    }

    function squareArea(float $sideSquare) {
        $diagonal = $sideSquare * sqrt(2);
        return $this->squareArea->getSquareArea($diagonal);
    }

}