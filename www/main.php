<?php session_start()
//session_startは先頭で行う
?>

<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/index.css">
</head>
<body>
    <?php 
    require_once('/var/www/html/app/model/loginService.php');

    //sessionでobjectを受け渡す場合はserializeが必要
    $loginUser = unserialize($_SESSION['loginUser']);
    //echo $loginUser->getUserId();
    ?>
    
    <h1?>test</h1>
    <a href="./detail.php?q=1">リンク</a>


</body>