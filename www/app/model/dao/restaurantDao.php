<?php

//=============================
//        RestaurantDao
//-----------------------------
//　　  店舗情報用のdaoクラス
//=============================

require_once('/var/www/html/app/model/daoAbstract.php');

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

        // $buffer = $this->db->query("select * from restaurants where id='".$restaurantId."'");
        // //echo var_dump($buffer);
        // $restaurantData = $buffer->fetch(PDO::FETCH_ASSOC);
        // return $restaurantData;



        //sql生成
        $sql = ('SELECT * 
        FROM restaurants WHERE restaurant_id = :restaurant_id');

        //検索するIDをバインドして実行、一次配列に整形
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':restaurant_id', $restaurantId, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        //配列が取得できていなければfalseをreturn
        if(count($result) == 0) {
            return false;
        } 

        return $result;
    }
}


?>