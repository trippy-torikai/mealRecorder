<?php session_start();
//session_startは先頭で行う
require_once('/var/www/html/app/model/loginService.php');
?>

<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/index.css">
</head>
<body>
    <?php 
    //sessionでobjectを受け渡す場合はserializeが必要
    $loginUser = unserialize($_SESSION['loginUser']);
    echo '<h1>'.$loginUser->getUserId().'</h1>';
    ?>
    

    <a href="./app/controller/detailController.php?q=1">カレー</a><br>
    <a href="./app/controller/detailController.php?q=2">ラーメン</a>
</body>