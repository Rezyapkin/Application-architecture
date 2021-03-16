<?php 

function findPrimeDivisors($value) {
    $stack = new SplStack();
    $n = 2;
    while ($n <= $value) {
        if ($value % $n === 0) {
            if ($stack->count() === 0 or $stack->top() < $n) $stack->push($n);
            $value /= $n;
        } else $n++;
    }    

    return $stack;
}

echo "Найдем простые делители 13195<br>";
var_dump(findPrimeDivisors(13195));

echo "<br>Самый больший делитель 600851475143 = " . findPrimeDivisors(600851475143)->top();

echo "<br>Возможно есть алгоритм проще, но это то что пришло сходу на ум. Да и отрабатывает быстро на тестовом числе. Можно конечно не хранить делители в стэке. Но я решил его использовать для наглядности.";