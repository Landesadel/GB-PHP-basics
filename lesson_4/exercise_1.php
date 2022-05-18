<?php

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$definitionNumber = function ($number) {
    $result = $number % 2;
    if ($result == 0) {
        return (" Число чётное ");
    } else return (" Число нечетное ");
};

$newArr = array_map($definitionNumber, $numbers);

print_r($newArr);