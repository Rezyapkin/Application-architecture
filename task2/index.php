<?php

function checkString($str) {
    $BRACKETS = [
        '[' => ']',
        '(' => ')',
        '{' => '}',
    ];
    
    $QUOTES = [
        '"',
        "'",
    ];

    $stack = new SplStack();
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        // Открылась кавычка, значит игнорируем все до этой кавычки
        if ($stack->count() and in_array($stack->top(), $QUOTES)) {
            if ($stack->top() === $char) {
                $stack->pop();
            }

        } else if (in_array($char, $QUOTES) or array_key_exists($char, $BRACKETS)) {
        // Открывающие скобки или кавычи
            $stack->push($char);

        } else if (in_array($char, $BRACKETS)) {
        //Закрывающиеся скобки

            if ($stack->count() and $BRACKETS[$stack->top()] === $char) {
                $stack->pop();
            } else return False;

        }
    }
    return $stack->count() === 0;
}

function printCheckString($str) {
    echo "<b>{$str}</b> - " . (checkString($str) ? "ok" : "bad") . "<br>";
}

printCheckString("Это тестовый вариант проверки (задачи со скобками). И вот еще скобки: {[][()]}");
printCheckString("((a + b)/ c) - 2");
printCheckString("([ошибка)");
printCheckString('"(")');
printCheckString('")C кавычками работать умеем("');


