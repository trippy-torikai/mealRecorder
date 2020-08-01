<?php

//=============================
//        detailService
//-----------------------------
//　detailページ用の情報を取得する
//=============================

require_once('/var/www/html/app/model/dao/imageDao.php');
require_once('/var/www/html/app/model/dao/restaurantDao.php');
require_once('/var/www/html/app/model/dao/restaurantTagDao.php');
require_once('/var/www/html/app/model/dao/commentDao.php');

class detailService {

    //===================================
    // 関数名：getDetailData
    //-----------------------------------
    // 引数：  $restaurantId  レストランID
    //
    // 店舗情報を取得してセッションに格納する
    //====================================

    public function getDetailData($restaurantId) {

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
        if($restaurantTags == false) {
            header('Location: http://localhost:80/main.php');
        }
        $_SESSION['restaurantTags'] = $restaurantTags;

        //店舗コメント情報を取得、セッションに配置
        $commentDao = new CommentDao(); 
        $comments = $commentDao->selectComment($restaurantId);
        $_SESSION['comments'] = $comments;

    }
}



?>