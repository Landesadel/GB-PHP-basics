<?php

require_once 'Comment.php';
require_once 'Task.php';
require_once 'TaskService.php';
require_once 'User.php';

$user = new User('Luck', 'Luck@mail.ru', 26);

$task = new Task($user);



$task->setDescription('Doing something');
$task->setPriority(2);


TaskService::addComment($user, $task, 'finish it later');
TaskService::addComment($user, $task, 'Don\'t forget to mark');
TaskService::addComment($user, $task, 'Hot priority!');

//print_r($task1);
//print_r($task2);

foreach ($task->getComments() as $comment) {
    echo $comment->getText() . ", " . PHP_EOL;
    echo "задача: " .  $comment->getTask()->getDescription() . PHP_EOL;
    echo "пользователь: " . $comment->getAuthor()->getUserName() . PHP_EOL;
}