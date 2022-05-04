<?php

$i = 1;
while ($i <= 100) {
  if($i % 3 == 0) {
      if ($i % 5 == 0) {
          echo " FizzBuzz ";
      } else {
          echo " Fizz ";
      }
      $i++;
  }elseif($i % 5 == 0) {
      echo " Buzz ";
      $i++;
  }else {
      echo " $i ";
      $i++;
  }
}
