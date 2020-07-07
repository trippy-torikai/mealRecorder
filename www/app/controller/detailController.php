<?php 
//session_startは先頭で行う
session_start();

//クラスを呼び出す時は必要
require_once('/var/www/html/app/model/utils.php');
require_once('/var/www/html/app/model/dao.php');



//認証確認
$utils = new Utils();
$utils->isAuthenticated($_SESSION['loginUser']);


//パラメータ取得
//取得されたパラメータで選択された飲食店を判断する
$restaurantId;
if(isset($_GET['q'])) {
    $restaurantId = (int)$_GET['q'];
}

//dbコネクトを取得
$dao = new Dao();

//画像パスを取得、セッションに配置 
$imagePaths = $dao->selectImage($restaurantId);
$_SESSION['imagePaths'] = $imagePaths;

//店舗情報を取得、セッションに配置
$restaurantData = $dao->selectRestaurantData($restaurantId);
$_SESSION['restaurantData'] = $restaurantData;


header('Location: http://localhost:80/detail.php');
?>



