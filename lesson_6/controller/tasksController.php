<?php

include_once 'model/User.php';
include_once 'model/Task.php';
include_once 'model/TaskProvider.php';
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();

} else {
    header("Location: /");
    die();
}

$taskProvider = new TaskProvider();

if (isset($_GET['action']) && $_GET['action'] === 'add')
{
    $taskProvider->addTask(new Task($_POST['task']));
    header("Location: /?controller=tasks");
    die();
}

//$taskProvider->addTask(new Task('Выяснить кто отец'));
//$taskProvider->addTask(new Task('Захватить мир.'));
$tasks = $taskProvider->getUndoneList();

include "view/tasks.php";


