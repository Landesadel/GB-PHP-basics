<?php

$someArr = [1, 3, 2, 6, 4, 2];

function newArr( array $arr): string
{
    $newArr = [];

    sort($arr);
    $maxNumb = end($arr); //определение максимального значения массива
    $newArr [] = $maxNumb . " - максимальное значение";
    $newArr [] = $arr[0] . " - минимальное значение";  //добавление минимального значения массива
    $averageValue = array_sum($arr) / count($arr);
    $newArr [] = $averageValue . " - среднее арифметическое значение"; //добавление среднего значения

    return print_r($newArr);
}

newArr($someArr);

