<?php

$numbArray = [];
$max = 200;
$min = 1;
$count = 200;
$n = 0;

while($n < $count) {
    $number = mt_rand($min, $max); //генерация случайного числа
    if(!in_array($number, $numbArray)) {
        $numbArray[] = $number;
        $n++;
    }
}
sort($numbArray);
print_r($numbArray);