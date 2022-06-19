<?php

//Exercise 1:
$question = "Вопрос: Что в конце XIX века было основным товаром на Лубянской площади в Москве во время Введенской ярмарки?\n";
$answers = " 1: Марки\n 2: Медяки\n 3: Сани\n 4: Бублики\n";
$n = 1;

echo $question . "\n" . $answers;
$answerUser = readline( "введите номер ответа: \n");
$answer = is_numeric($answerUser);
while ($answer !== true) {
    echo " Некорректный ввод, введите число!\n";
    $answerUser = readline( "введите номер ответа: \n");
    $answer = is_numeric($answerUser);
}
while ($n < 3) {
    if ($answerUser == 3) {
        echo " Ответ верный!";
        break;
    } elseif ($answerUser > 4 || $answerUser < 1) {
        echo "вариантов ответа всего 4, попробуйте ещё раз.\n";
        $answerUser = readline( "введите номер ответа: \n");
    } else {
        if ($n < 2) {
            echo "Не верный вариант ответа, осталась одна попытка.\n";
            $answerUser = readline( "введите номер ответа: \n");
            $n++;
        } else {
            echo "Не правильный вариант ответа, вы проиграли.";
            break;
        }
    }

}





