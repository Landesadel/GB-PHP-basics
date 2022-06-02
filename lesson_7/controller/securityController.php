<?php

require_once 'model/Base.php';
require_once 'model/User.php';
require 'model/UserProvider.php';
$pdo = require 'db.php';
session_start();

$error = null;

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    header("Location: index.php");
    die();
}

if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider($pdo);
    $user = $userProvider->getByUserNameAndPassword($username, $password);
    if ($user === null) {
        $error = 'Пользователь не найден.';
    } else {
        $_SESSION['username'] = $user;
        $_SESSION['username'] = $user->getId();
        header("Location: index.php");
        die();
    }
}

include "view/signin.php";
