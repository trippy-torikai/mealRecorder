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
$foodId;
if(isset($_GET['q'])) {
    $foodId = (int)$_GET['q'];
}

$dao = new Dao();
$imagePaths = $dao->selectImage($foodId);

$_SESSION['imagePaths'] = $imagePaths;

header('Location: http://localhost:80/detail.php');
?>



