<?php session_start()
//session_startは先頭で行う
?>

<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/detail.css">
</head>
<body>
    <?php
    $foodId;

    if(isset($_GET['q'])) {
        $foodId = $_GET['q'];
    }
    ?>

    <div class="main-contents">
        <h1>詳細</h1>
        <img class="main-picture" src="img/images/07894_l.jpg">
            <div class="sub-picture">
                <img src="img/images/703693.jpeg">
                <img src="img/images/710189.jpeg">
                <img src="img/images/gourmet4346_s.jpg">
            </div>
        
        
    </div>
    <h1><?php echo $foodId ?></h1>
</body>