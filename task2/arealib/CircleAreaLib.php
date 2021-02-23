<?php

namespace task2\arealib;

class CircleAreaLib
{
   public function getCircleArea(float $diagonal)
   {
       $area = (M_PI * $diagonal**2)/4;

       return $area;
   }
}