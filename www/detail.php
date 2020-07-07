<?php session_start();
//session_startは先頭で行う..//


//クラスを呼び出す時は必要
require_once('/var/www/html/app/model/utils.php');

//認証確認
$utils = new Utils();
$utils->isAuthenticated($_SESSION['loginUser']);

?>


<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/detail.css">
</head>
<body>
    <div class="header">
    </div>
    <div class="main-contents">
        <h1>詳細</h1>
        <img class="main-picture" src="img/images/<?php echo $_SESSION['imagePaths'][0] ?>">
            <div class="sub-picture">
                <img src="img/images/<?php echo $_SESSION['imagePaths'][0] ?>">
                <img src="img/images/<?php echo $_SESSION['imagePaths'][1] ?>">
                <img src="img/images/<?php echo $_SESSION['imagePaths'][2] ?>">
                <img src="img/images/<?php echo $_SESSION['imagePaths'][3] ?>">
            </div>
        <a href="main.php">戻る</a>

        
    </div>
</body>