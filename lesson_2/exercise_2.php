<?php

//Exercise 2
$userName = readline("Введите ваше имя: \n");
echo "Здравствуйте $userName!\n";
pointBack:
$quantityTasks = readline("Введите кол-во задач на сегодня: \n");
$numb = is_numeric($quantityTasks);

if ($numb == true) {
    echo "это число";
}else {
    echo "Некорректный ввод, введите число!\n";
    goto pointBack;
}
