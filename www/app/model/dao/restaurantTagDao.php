<?php

//=============================
//      RestaurantTagDao
//-----------------------------
//　　店舗tag情報用のdaoクラス
//=============================

require_once('/var/www/html/app/model/daoAbstract.php');


class RestaurantTagDao extends DaoAbstract {

    //===================================
    // 関数名：selectTag
    //-----------------------------------   
    // 店舗tag情報をDBから取得する
    // 取得したtagは一次元
    // 配列に格納してreturn
    // 取得できなかた場合はboolean(false)を返す
    //====================================

    public function selectTag($restaurantId) {

        //sql生成
        $sql = ('SELECT body 
                FROM tags AS tags LEFT JOIN restaurants_tags AS restag 
                ON tags.tag_id = restag.tag_id 
                WHERE restaurant_id = :restaurant_id');

        //検索するIDをバインドして実行、一次配列に整形
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':restaurant_id', $restaurantId, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $restaurantTags = array_column($result, 0);

        //配列が取得できていなければfalseをreturn
        if(count($restaurantTags) == 0) {
            return false;
        } 

        return $restaurantTags;
        

    }

        
}



?>