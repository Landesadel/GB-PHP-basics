<?php

$numApple = (int)readline("Введите кол-во яблок: ");

$num = $numApple % 100;


if ($num > 19) {
    $num = $numApple % 10;

}

switch ($num) {
    case 1:
        echo "У вас $numApple яблоко";
        break;

    case 2: case 3: case 4:
        echo "У вас $numApple яблока";
        break;

    default:
        echo "У вас $numApple яблок";
        break;

}
