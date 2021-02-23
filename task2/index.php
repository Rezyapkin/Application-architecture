<?php

namespace task2;

use task2\arealib\{CircleAreaLib, SquareAreaLib};
use task2\ourarea\{CircleAreaAdapter, SquareAreaAdapter};

require_once "../config.php";
require_once "../Autoload.php";

spl_autoload_register([new \Autoload(), 'loadClass']);

echo 'Площадь круга с окружностью 10: ' .(new CircleAreaAdapter(new CircleAreaLib))->circleArea(10);
echo '<br>';
echo 'Площадь квадрата со стороной 10: ' .(new SquareAreaAdapter(new SquareAreaLib))->squareArea(10);