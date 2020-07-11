<?php

//=============================
//        RestaurantDao
//-----------------------------
//　　  店舗情報用のdaoクラス
//=============================

require_once('/var/www/html/app/model/daoAbstract.php');
//require_once('/var/www/html/app/model/restaurantDataBean.php');


class RestaurantDao extends DaoAbstract {


    //===================================
    // 関数名：selectData
    //-----------------------------------   
    // 店舗情報をDBから取得する
    // 取得したパラメータは以下の変数を持った
    // 配列に格納してreturn
    //  
    //  id：店舗管理番号
    //  name：店舗名
    //  address：住所
    //  closestStation：最寄り駅
    //  priceAvarage：予算
    //====================================

    public function selectData($restaurantId) {

        $buffer = $this->db->query("select * from restaurants where id='".$restaurantId."'");
        //echo var_dump($buffer);
        $restaurantData = $buffer->fetch(PDO::FETCH_ASSOC);
        return $restaurantData;
    }
}


?>