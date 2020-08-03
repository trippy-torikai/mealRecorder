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
	<link rel="stylesheet" type="text/css" href="/resource/css/detail.css">
</head>
<body>
    <header>
        <h1>FOOD RECODER</h1>
    </header>

    <div class="main-contents">
        <div class="top-contents">
            <h1><?php echo $_SESSION['restaurantData']['name'] ?></h1>
        </div>
        <div class="mid-contents">
            <div class="picture-wrapper">        
                <img id="main-picture" src="resource/img/images/<?php echo $_SESSION['imagePaths'][0] ?>">
                <div class="sub-picture">
                    <img id="picture-1" src="resource/img/images/<?php echo $_SESSION['imagePaths'][0] ?>">
                    <img id="picture-2" src="resource/img/images/<?php echo $_SESSION['imagePaths'][1] ?>">
                    <img id="picture-3" src="resource/img/images/<?php echo $_SESSION['imagePaths'][2] ?>">
                    <img id="picture-4" src="resource/img/images/<?php echo $_SESSION['imagePaths'][3] ?>">
                </div>
            </div>
            <div class="comment-wrapper">
                <div class="comment">
                    <h3 class=comment-title><?php echo $_SESSION['comments'][0]['tittle'] ?></h3>
                    <h4 class=comment-text><?php echo $_SESSION['comments'][0]['text'] ?></h4>
                    <h4 class=comment-rank><?php echo $_SESSION['comments'][0]['rank'] ?></h4>
                    <h4 class=comment-name><?php echo $_SESSION['comments'][0]['name'] ?></h4>
                </div>
                <div class="comment">
                    <h3 class=comment-title><?php echo $_SESSION['comments'][1]['tittle'] ?></h3>
                    <h4 class=comment-text><?php echo $_SESSION['comments'][1]['text'] ?></h4>
                    <h4 class=comment-rank><?php echo $_SESSION['comments'][1]['rank'] ?></h4>
                    <h4 class=comment-name><?php echo $_SESSION['comments'][1]['name'] ?></h4>
                </div>
            </div>
            <div class="info-wrapper">
                <h1>住所：<?php echo $_SESSION['restaurantData']['address'] ?></h1>
                <h1>最寄り駅：<?php echo $_SESSION['restaurantData']['closestStation'] ?></h1>
                <h1>予算：<?php echo $_SESSION['restaurantData']['priceAverage'] ?>円</h1>
            </div>
        </div>
        <?php
            foreach($_SESSION['restaurantTags'] as $tag) {
                echo $tag;
            }
        ?>
        <a href="main.php">戻る</a>       
    </div>

    

    <!-- js呼び出し -->
    <script type="text/javascript" src="/resource/js/detail.js"></script>

</body>