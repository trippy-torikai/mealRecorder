<?php

//=============================
//      Validatation
//-----------------------------
//　detailページ用の情報を取得する
//=============================

class Validation {


    //===================================
    // 関数名：isValidRestaurantId
    //-----------------------------------
    // 引数がrestaurantIdの要件を満たしているか判定
    // booleanを返す
    //====================================

    public function isValidRestaurantId($restaurantId) {

        if(!is_int($restaurantId)) {
            return false;
            
        }
        if(!isset($restaurantId)) {
            return false;
        }
        if($restaurantId == 0) {
            return false;
        }

        return true;
    }

     
} 



?>