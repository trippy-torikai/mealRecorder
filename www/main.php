<?php session_start();
//session_startは先頭で行う
require_once('/var/www/html/app/model/loginService.php');
?>

<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/main.css"> 
</head>
<body>
    <?php 
    //sessionでobjectを受け渡す場合はserializeが必要
    $loginUser = unserialize($_SESSION['loginUser']);
    ?>
    
    <header>
        <p class="title">Food Recorder</p>
        <form action="" method="post">
            <input class="sarch-window" name="serchString" type="text" placeholder="キーワードで探す"＞
            <input type="submit">
            <p class="menu-btn">■</p>
        </form>
    </header> 
    <div class="header2">
        

    </div>

    <a href="./app/controller/detailController.php?q=1">カレー</a><br>
    <a href="./app/controller/detailController.php?q=2">ラーメン</a><br>
    <a href="./app/controller/detailController.php?dwed">null　test</a>
    <a href="./app/controller/detailController.php">null　2test</a>
</body>