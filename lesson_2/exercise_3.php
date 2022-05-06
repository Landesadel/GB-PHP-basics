<?php

pointBack:
$numFinger = (int)readline("Введите число: ");

if ($numFinger >= 1) {

    if($numFinger > 9) {
        do  {
            $numFinger = $numFinger - 8;
        } while ($numFinger >= 9);
    }

    switch ($numFinger)  {
        case 1: case 9: {
            echo "Мизинец";
            break;
        }
        case 2: case 8: {
            echo "Безымянный";
            break;
        }
        case 3: case 7: {
            echo "Средний";
            break;
        }
        case 4: case 6: {
            echo "Указательный";
            break;
        }
        case 5 : {
            echo "Большой";
            break;
        }
        default: echo "error $numFinger";
    }

} else {
    echo "Некорректное значение! ";
    goto pointBack;
}
