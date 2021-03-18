<?php

function generateTestArray(int $n) {
    $array = [];
    for ($i == 0; $i <= $n; $i++) {
        $array[] = $i + 1;
    }
    unset($array[random_int(1, $n-1)]);
    return array_values($array);

}

function findValue($array) {
    $start = 0;
    $end = count($array) - 1;
    while ($end > $start + 1) {
        $current = floor(($end + $start) / 2);
        if ($array[$current] > $current + 1) {
            $end = $current;
        } else {
            $start = $current;
        }
    }
    return $array[$start] + 1;
}


for ($i == 0; $i < 30; $i++) {
    $array = generateTestArray(random_int(20, 30));
    $arrayStr = implode(", ", $array);
    $value = findValue($array);
    echo "Тестовый массив: [{$arrayStr}]. Ответ: {$value} <br>";
}