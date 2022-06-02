<?php

require_once 'model/Base.php';
include_once 'model/User.php';
include_once 'model/Task.php';
include_once "model/ITask.php";
include_once 'model/TaskProvider.php';
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();

} else {
    header("Location: /");
    die();
}

$taskProvider = new TaskProvider($pdo);

if (isset($_GET['action']) && $_GET['action'] === 'add')
{
    if(empty($_POST['task'])) {
        throw new Exception('No task');
    }

    $taskProvider->addTask(new Task($_POST['task']));
    header("Location: /?controller=tasks");
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'done')
{
    $id = $_GET['id'];
    $taskProvider->doDoneTask($id);
    header("Location: /?controller=tasks");
    die();
}

if (isset($_GET['action']) && $_GET['action'] ==='apidone') {
    $id = $_GET['ID'];
    $taskProvider->doDoneTask($id);
    $response = [
        'status' => 'ok',
        'id' => $id
    ];

    echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    die();
}

//$taskProvider->addTask(new Task('Выяснить кто отец'));
//$taskProvider->addTask(new Task('Захватить мир.'));
$tasks = $taskProvider->getUndoneList();

include "view/tasks.php";


