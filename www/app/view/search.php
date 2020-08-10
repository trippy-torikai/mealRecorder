<?php 
session_start();
//session_startは先頭で行う..//

// 【検索項目】
// ・店名
// ・タグ

// （・ユーザー
// 　・最寄り
// 　・位置情報検索）

// 検索窓１つ
// 検索項目を切り替えられる
// 非同期通信で結果表示


//クラスを呼び出す時は必要
require_once('/var/www/html/app/model/utils.php');

//認証確認
$utils = new Utils();
$utils->isAuthenticated($_SESSION['loginUser']);

?>


<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/resource/css/search.css">
    <link rel="stylesheet" type="text/css" href="/resource/css/base-header.css">
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/app/view/base-header.php'); ?> 

    <div class="main-contents">
        <div class="menu">
            <input id="search-str" type="test">
            <select name=”item”>
                <option value="restaurant-name">店名</option>
                <option value="restaurant-tag">タグ</option>
            </select>
            <select name=”mode”>
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>
        <br>
        <br>
        <div id="result">
            <a id="output">
        </div>
        <a href="./main.php">戻る</a>       
    </div>


    <!-- js呼び出し -->
    <script type="text/javascript" src="/resource/js/searchAjax.js"></script>
</body>
