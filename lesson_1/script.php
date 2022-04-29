<?php

$name = readline("Введите ваше имя.\n");
$age = readline("Введите ваш возраст.\n");

$questionTask = "$name, какая задача стоит перед вами сегодня?\n";
$questionTime = "Сколько по времени займёт данная задача?\n";

$task1 = readline($questionTask);
$time1 = readline($questionTime);

$task2 = readline($questionTask);
$time2 = readline($questionTime);

$task3 = readline($questionTask);
$time3 = readline($questionTime);

$sum = $time1 + $time2 + $time3;

echo "Вас зовут $name, вам $age лет.\n";
echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n";
echo "- $task1 ($time1),\n";
echo "- $task2 ($time2),\n";
echo "- $task3 ($time3).\n";
echo "Примерное время на выполнение плана = " . $sum . " часа/ов";
