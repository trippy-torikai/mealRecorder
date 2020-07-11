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
    <header>
    </header>
    <div class="main-contents">
        <div class="top-contents">
            <h1><?php echo $_SESSION['restaurantData']['name'] ?></h1>
        </div>
        <div class="mid-contents">
            <div class="picture-wrapper">        
                <img class="main-picture" src="img/images/<?php echo $_SESSION['imagePaths'][0] ?>">
                <div class="sub-picture">
                    <img src="img/images/<?php echo $_SESSION['imagePaths'][0] ?>">
                    <img src="img/images/<?php echo $_SESSION['imagePaths'][1] ?>">
                    <img src="img/images/<?php echo $_SESSION['imagePaths'][2] ?>">
                    <img class="end-subpicture" src="img/images/<?php echo $_SESSION['imagePaths'][3] ?>">
                </div>
            </div>
            <div class="info-wrapper">
                <h1>住所：<?php echo $_SESSION['restaurantData']['address'] ?></h1>
                <h1>最寄り駅：<?php echo $_SESSION['restaurantData']['closestStation'] ?></h1>
                <h1>予算：<?php echo $_SESSION['restaurantData']['priceAverage'] ?>円</h1>
            </div>
        </div>

        <a href="main.php">戻る</a>

        
    </div>
</body>