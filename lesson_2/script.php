<?php

//Exercise 1:
$question = "Вопрос: Что в конце XIX века было основным товаром на Лубянской площади в Москве во время Введенской ярмарки?\n";
$answers = " 1: Марки\n 2: Медяки\n 3: Сани\n 4: Бублики\n";
$n = 1;

pointBack:
echo $question . "\n" . $answers;
$answerUser = readline( "введите номер ответа: \n");
$answer = is_numeric($answerUser);

if ($answer == true) {
    if ($answerUser == 3) {
        echo " Ответ верный!";
    } elseif ($answerUser > 4) {
        echo "вариантов ответа всего 4, попробуйте ещё раз.\n";
        goto pointBack;
    } else {
        if ($n < 2) {
            echo "Не верный вариант ответа, осталась одна попытка.\n";
            $n++;
            goto pointBack;
        } else {
            echo "Не правильный вариант ответа, вы проиграли.";
        }
    }

} else  {
 echo " Некорректный ввод, введите число!\n";
    goto pointBack;
}

