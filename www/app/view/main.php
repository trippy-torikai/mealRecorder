<?php session_start();
//session_startは先頭で行う
require_once('/var/www/html/app/model/loginService.php');
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/resource/css/main.css"> 
    <link rel="stylesheet" type="text/css" href="/resource/css/base-header.css">
</head>
<body>
    <?php 
    //sessionでobjectを受け渡す場合はserializeが必要
    $loginUser = unserialize($_SESSION['loginUser']);
    ?>
    
    <!-- <header>
        <h1>FOOD RECODER</h1>
    </header> -->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/app/view/base-header.php'); ?> 

    <div class="main-contents">
        <a href="/app/controller/detailController.php?q=1">カレー</a><br>
        <a href="/app/controller/detailController.php?q=2">ラーメン</a><br>
        <a href="/app/controller/detailController.php?dwed">null　test</a>
        <a href="/app/controller/detailController.php">null　2test</a>

        <br>
        <a href="/app/controller/searchController.php">search</a>
    </div>

    
</body>