<?php

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Шампанское',
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Телефон',
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

$searchItem = (string)readline('Введите предмет который хотите найти: ');

function searchInArr (string $searchItem, array $arr): bool {
    foreach ($arr as $indexVal => $value) {
        if (is_array($value)) {
            if(searchInArr($searchItem, $value))
           return true;
        } else {

                if ($searchItem == $value) {
                    return true;
                }
        }
    }
    return false;
}

var_dump(searchInArr($searchItem, $box));