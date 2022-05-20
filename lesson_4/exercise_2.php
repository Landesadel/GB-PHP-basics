<?php

$someArr = [1, 3, 2, 6, 4, 2];

function newArr( array $arr): array
{
    $newArr = [];

    $newArr ['max'] = max($arr); //определение максимального значения массива
    $newArr ['min'] = min($arr);  //добавление минимального значения массива
    $newArr ['avg'] = array_sum($arr) / count($arr); //добавление среднего значения

    return $newArr;
}

print_r(newArr($someArr));

