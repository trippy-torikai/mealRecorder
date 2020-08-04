<?php 
//session_startは先頭で行う
session_start();

//クラスを呼び出す時は必要
require_once('/var/www/html/app/model/utils.php');
require_once('/var/www/html/app/model/dao/userDao.php');
require_once('/var/www/html/app/model/service/detailService.php');
require_once('/var/www/html/app/model/utils/validation.php');

//認証確認
$utils = new Utils();
$utils->isAuthenticated($_SESSION['loginUser']);

//validationClass呼び出し
$validation = new Validation();

//@task
//$validationにどこまで機能を持たせるか迷う
//あくまで検証結果をbooleanで返すだけにするか
//またはエラーメッセージを取得する機能もつけるか

$restaurantId = $_GET['q'];
if(empty($restaurantId)) {
    header('Location: http://localhost:80/app/view/main.php');
    exit;       //@task これがないと何故かdetail.phpに飛んでしまう 要解析
}

if(!$validation->isValidRestaurantId($restaurantId)) {
    //@task
    //エラーメッセージ
    //遷移元に戻る・・方法わからないので今度実装する
    header('Location: http://localhost:80/app/view/main.php');
};

//レストラン情報を取得、セッションに格納
$detailService = new DetailService();
$isSuccess = $detailService->getDetailData($restaurantId);
if($isSuccess == false) {
    header('Location: http://localhost:80/app/view/main.php');
}

//detail.phpへリダイレクト
header('Location: http://localhost:80/app/view/detail.php');

?>