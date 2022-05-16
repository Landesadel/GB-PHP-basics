<?php

$arr1 = [1, 4, 2, 14, 7, 54, 7, 9, 15, 2];
$arr2 = [9, 3, 6, 10, 5, 3, 13, 11, 8, 1];
$arrResult = [];

for ($i = 0; $i < sizeof($arr1); $i++) {
    $result = $arr1[$i] * $arr2[$i];
    $arrResult[] = $result;
};

print_r($arrResult);

