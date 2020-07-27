<?php 
//session_startは先頭で行う
session_start();

//クラスを呼び出す時は必要
require_once('/var/www/html/app/model/utils.php');
require_once('/var/www/html/app/model/userDao.php');
require_once('/var/www/html/app/model/imageDao.php');
require_once('/var/www/html/app/model/restaurantDao.php');
require_once('/var/www/html/app/model/restaurantTagDao.php');
require_once('/var/www/html/app/model/commentDao.php');

//認証確認
$utils = new Utils();
$utils->isAuthenticated($_SESSION['loginUser']);

//パラメータ取得
//取得されたパラメータで選択された飲食店を判断する
$restaurantId;
if(isset($_GET['q'])) {
    $restaurantId = (int)$_GET['q'];
}

//画像パスを取得、セッションに配置
$imageDao = new ImageDao(); 
$imagePaths = $imageDao->selectImage($restaurantId);
$_SESSION['imagePaths'] = $imagePaths;

//店舗情報を取得、セッションに配置
$restaurantDao = new RestaurantDao(); 
$restaurantData = $restaurantDao->selectData($restaurantId);
$_SESSION['restaurantData'] = $restaurantData;

//店舗tag情報を取得、セッションに配置
$restaurantTagDao = new RestaurantTagDao(); 
$restaurantTags = $restaurantTagDao->selectTag($restaurantId);
$_SESSION['restaurantTags'] = $restaurantTags;

//店舗コメント情報を取得、セッションに配置
$commentDao = new CommentDao(); 
$comments = $commentDao->selectComment($restaurantId);
$_SESSION['comments'] = $comments;

//detail.phpへリダイレクト
header('Location: http://localhost:80/detail.php');

?>