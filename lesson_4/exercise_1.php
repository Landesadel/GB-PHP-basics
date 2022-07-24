<?php

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$definitionNumber = function (int $number): string
{

   return ($number & 1)? "нечётное" : "Чётное";

};

print_r(array_map($definitionNumber, $numbers));