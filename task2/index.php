<?php

function generateRandArray(int $n) {
    $last = 0;
    $array = [];
    for ($i == 0; $i < $n; $i++) {
        $last = $last + random_int(0, 3);
        $array[] = $last;
    }

    return $array;
}

class SearchValues {

    public function __construct($array, $value) {
        $this->array = $array;
        $this->value = $value;
    }

    //Делим сегмент напополам
    private function devidedSegment(&$segment) {
        $center = (int)floor(($segment[0] + $segment[1])/2); 
        if (
            ($segment[0] < $segment[1] and $this->array[$center] < $this->value) or //Левый сегмент
            ($segment[0] > $segment[1] and $this->array[$center] > $this->value)  //Правый сегмент 
           ) {
            $segment[0] = $center;
        } else {
            $segment[1] = $center;    
        }
    }


    //Если отрезок состоит из двух элементов, то укорачиваем до 1 (причем укорачиваем в нужном направлении)
    private function checkAndCorrectSegment(&$segment) {
        if (abs($segment[0] - $segment[1]) <= 1) {
            if ($this->array[$segment[0]] == $this->value) {
                $segment[1] = $segment[0];
            } else {
                $segment[0] = $segment[1];
            }
        }
    }

    public function search() {

        $end = count($this->array) - 1;

        //Выйдем из метода, если массив пустой, или искомое значение находится за пределами массива
        if ($end < 0 or $this->value < $this->array[0] or $this->value > $this->array[$end]) return null;
    
        $left = [0, $end]; //Левый отрезок 
        $right = [$end, 0]; //Правый отрезок

        while (($this->array[$left[0]] < $this->value or $this->array[$right[0]] > $this->value) and ($left[0] < $left[1] or $right[0] > $right[1])) {
            //половиним левый отрезок, если нужно.
            if ($this->array[$left[0]] < $this->value and $left[0] < $left[1]) {
                $this->devidedSegment($left);
                $this->checkAndCorrectSegment($left);
            }

            //половиним правый отрезок, если нужно.
            if ($this->array[$right[0]] > $this->value and $right[0] > $right[1]) {
                $this->devidedSegment($right);
                $this->checkAndCorrectSegment($right);
            } 

        }

        if ($this->array[$left[0]] == $this->value) {
            $result = [];
            for ($i = $left[0]; $i <= $right[0]; $i++) {
                $result[] = $this->array[$i];
            }

            return $result;

        } else return null;
    }

}

echo "<h3>Все, включая генерацию массива и алгоритм, писал с нуля (даже Ваш код не смотрел).</h3>";

for ($i == 0; $i < 30; $i++) {
    $array = generateRandArray(random_int(20, 30));
    $arrayStr = implode(", ", $array);
    $value = $array[random_int(0, count($array)-1)];
    $finded = (new SearchValues($array, $value))->search();
    $resultStr = isset($finded) ? "[" . implode(", ", $finded) . "]" : "Элемент {$value} не найден"; 
    echo "Тестовый массив: [{$arrayStr}]. Искомый элемент: {$value}. Результат: {$resultStr}<br>";
}