<?php

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$definitionNumber = function (int $number): string {
   /* $result = $number % 2;
    if ($result == 0) {
        return (" Число чётное ");
    } else return (" Число нечетное ");*/

    $result = ((bool)($number & 1));

    if (!$result) return ("Чётное");
    else return ("нечётное");
};

$newArr = array_map($definitionNumber, $numbers);

print_r($newArr);