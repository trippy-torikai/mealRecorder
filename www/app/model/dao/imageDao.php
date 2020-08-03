<?php

//=============================
//       　ImageDao
//-----------------------------
//　　　image用のdaoクラス
//=============================

require_once('/var/www/html/app/model/daoAbstract.php');


class ImageDao extends DaoAbstract {

    //===================================
    // 関数名：selectImage
    //-----------------------------------   
    // 店舗画像パスをDBから取得する
    // 取得したパスは一次元配列に格納してreturn
    // 取得できなかた場合はboolean(false)を返す
    //====================================

    public function selectImage($restaurantId) {

        //sql生成
        $sql = ('SELECT img_path 
                FROM images WHERE restaurant_id = :restaurant_id ORDER BY priority');

        //検索するIDをバインドして実行、一次配列に整形
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':restaurant_id', $restaurantId, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
    
        //配列が取得できていなければfalseをreturn
        if(count($result) == 0) {
            return false;
        } 

        return $result;
    }

}



?>