<?php

$factorial = function(int $n) use(&$factorial): int
{
    return $n == 0 ? 1 : $n * $factorial($n-1);
};

print_r($factorial(5));