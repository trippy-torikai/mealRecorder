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
    ?>
    
    <div class="header">
        <p class="title">Food Recorder</p>
        <form action="" method="post">
            <input class="sarch-window" name="serchString" type="text" placeholder="キーワードで探す"＞
            <input type="submit">
        </form>
        <p class="menu-btn">■</p>
    </div>

    <a href="./app/controller/detailController.php?q=1">カレー</a><br>
    <a href="./app/controller/detailController.php?q=2">ラーメン</a>
</body>