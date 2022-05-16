<?php

$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирил' => 3,
        'Иринова Ирина' => 4,
        'Маринова Марина' => 2
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Дмитриев Дмитрий' => 2,
        'Катеринова Екатерина' => 4,
        'Александров Александр' => 2
    ]
];

$badMarks = [];

$groupName = array_keys($students);

//расчёт среднего знач 1-й группы
$marks1 = array_values($students['ИТ20']);
$resultGr1 = (array_sum($marks1) / count($marks1));


//расчёт среднего знач 2-й группы
$marks2 = array_values($students['БАП20']);
$resultGr2 = (array_sum($marks2) / count($marks2));


if($resultGr1 > $resultGr2) {
    echo "Группа $groupName[0] имеет большую успеваемость, средний бал которой = " . $resultGr1 . PHP_EOL;
}elseif($resultGr1 < $resultGr2) {
    echo "Группа $groupName[1] имеет большую успеваемость, средний бал которой = " . $resultGr2 . PHP_EOL;
} else echo "Группы $groupName[1] и $groupName[0] одинаковы по успеваемости.";


foreach ($students as $groupName => $studentNames) {
    foreach ($studentNames as $studentName => $mark) {
        if ($mark < 3) {
            $badMarks[] =  "$groupName: $studentName";
        }
    }
}

$strStudents = implode(', ', $badMarks);

print_r($strStudents . " - студенты поставленные на отчисление, имеющие оценку ниже 3х балов.");


