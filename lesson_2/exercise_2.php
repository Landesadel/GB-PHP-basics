<?php

//Exercise 2
$userName = readline("Введите ваше имя: \n");
echo "Здравствуйте $userName!\n";
pointBack:
$quantityTasks = readline("Введите кол-во задач на сегодня: \n");
$numb = is_numeric($quantityTasks);
$taskString = "";
$n = 0;
$sum = 0;

if ($numb == true) {
    do {
        $questionTask = readline("$userName, напишите какая задача стоит перед вами сегодня?\n");
        $questionTime = (int)readline("Сколько по времени займёт данная задача?\n");
        $sum += $questionTime;
        $timeAndTask = "- " . $questionTask . "(" . $questionTime . ")\n";
        $taskString .= $timeAndTask;
        $n++;
    } while ($n < $quantityTasks);

    echo ("$userName, ваш список задач на сегодня: \n" . $taskString);
    echo ("Примерное время на выполнение плана: " . $sum . " часа/ов\n");
    echo "Удачного дня, $userName";
}else {
    echo "Некорректный ввод, введите число!\n";
    goto pointBack;
}
