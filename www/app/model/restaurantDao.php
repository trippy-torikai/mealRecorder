<?php

//=============================
//        RestaurantDao
//-----------------------------
//　　  店舗情報用のdaoクラス
//=============================

require_once('/var/www/html/app/model/daoAbstract.php');
//require_once('/var/www/html/app/model/restaurantDataBean.php');


class RestaurantDao extends DaoAbstract {

    public function selectData($restaurantId) {

        $buffer = $this->db->query("select * from restaurants where id='".$restaurantId."'");
        //echo var_dump($buffer);
        $restaurantData = $buffer->fetch(PDO::FETCH_ASSOC);
        return $restaurantData;
    }
}


?>