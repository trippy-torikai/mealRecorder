<?php

require_once('/var/www/html/app/model/loginService.php');

$userName = $_POST['userName'];
$password = $_POST['password'];

    //未入力の場合indexに戻す
    if($userName == null || $password == null) {
        header('Location: http://localhost:80/');
    }

    $loginUser = new loginService($userName, $password);
    if($loginUser->getUserId() == null) {
        header('Location: http://localhost:80/');
    }
    session_start();
    $_SESSION['loginUser'] = serialize($loginUser);
    header('Location: http://localhost:80/main.php');
?>