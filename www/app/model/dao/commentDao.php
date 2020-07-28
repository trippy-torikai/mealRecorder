<?php

//=============================
//        commentDao
//-----------------------------
//　　 店舗コメント用のdaoクラス
//=============================

require_once('/var/www/html/app/model/daoAbstract.php');

class commentDao extends DaoAbstract {


    //===================================
    // 関数名：selectComment
    //-----------------------------------   
    // 店舗コメント情報をDBから取得する
    // 取得したパラメータは以下の変数を持った
    // 配列に格納してreturn
    //====================================

    public function selectComment($restaurantId) {

        //sql生成
        $sql = ('SELECT * 
                FROM comments AS comments LEFT JOIN users AS users 
                ON comments.user_id = users.user_id 
                WHERE restaurant_id = :restaurant_id');

        //バインドと実行
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':restaurant_id', $restaurantId, PDO::PARAM_INT);
        $stmt->execute();
        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $comments;
    }
}


?>