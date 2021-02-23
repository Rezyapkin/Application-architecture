<?php

namespace task2\ourarea;

use task2\arealib\CircleAreaLib;

class CircleAreaAdapter implements ICircle {
    private $circleArea;
 
    public function __construct(CircleAreaLib $circleArea)
    {
        $this->circleArea = $circleArea;
    }

    function circleArea(float $circumference) {
        $diagonal = $circumference / M_PI;
        return $this->circleArea->getCircleArea($diagonal);
    }

}