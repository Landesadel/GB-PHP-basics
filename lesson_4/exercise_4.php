<?php

$factorial = function(int $n): int
{
    return($n < 2 ? 1 : $n * factorial($n-1));
};

print_r($factorial(5));