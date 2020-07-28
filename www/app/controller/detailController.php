<?php 
//session_startは先頭で行う
session_start();

//クラスを呼び出す時は必要
require_once('/var/www/html/app/model/utils.php');
require_once('/var/www/html/app/model/dao/userDao.php');
require_once('/var/www/html/app/model/service/detailService.php');


//認証確認
$utils = new Utils();
$utils->isAuthenticated($_SESSION['loginUser']);

//パラメータ取得
//取得されたパラメータで選択された飲食店を判断する
$restaurantId;
if(isset($_GET['q'])) {
    $restaurantId = (int)$_GET['q'];
}

//レストラン情報を取得、セッションに格納
$detailService = new DetailService();
$detailService->getDetailData($restaurantId);

//detail.phpへリダイレクト
header('Location: http://localhost:80/detail.php');

?>