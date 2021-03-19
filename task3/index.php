<?php

function generateTestArray(int $n) {
    $array = [];
    for ($i == 0; $i <= $n; $i++) {
        $array[] = random_int(1, $n*2);
    }
    return $array;
}


function mySort($array, $start=0, $stop=-1) {
    if ($stop < 0) {
        $stop = count($array) - 1;
    }

    if ($stop<=$start) return [$array[$start]];
    
    $current = (int)(($start + $stop) / 2);
    $leftArray = mySort($array, $start, $current);
    $rightArray = mySort($array, $current + 1, $stop);

    
    $left = 0;
    $right = 0;
    $count_left = count($leftArray);
    $count_right = count($rightArray);
    $resultArray = [];

    while ($left < $count_left and $right < $count_right) {
        if ($leftArray[$left] > $rightArray[$right]) {
            $resultArray[] = $rightArray[$right];
            $right++;
        } else {
            $resultArray[] = $leftArray[$left];
            $left++;
        }  
    }

    // Дописываем хвосты
    for ($i = $left ; $i < $count_left; $i++) {
        $resultArray[] = $leftArray[$i];
    }

    for ($i = $right ; $i < $count_right; $i++) {
        $resultArray[] = $rightArray[$i];
    }

    return $resultArray;

}

echo "<h3>Пишу сам, никуда не смотрю)))</h3>";
for ($i == 0; $i < 30; $i++) {
    $array = generateTestArray(random_int(20, 30));
    $arrayStr = implode(", ", $array);
    $arrayFinalStr = implode(", ", mySort($array));
    echo "Тестовый массив: [{$arrayStr}].<br>";
    echo "Итоговый массив: [{$arrayFinalStr}].<br>";
    echo "<hr>";
}