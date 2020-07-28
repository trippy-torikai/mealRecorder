<?php

//=============================
//       　ImageDao
//-----------------------------
//　　　image用のdaoクラス
//=============================

require_once('/var/www/html/app/model/daoAbstract.php');


class ImageDao extends DaoAbstract {

    public function selectImage($foodId) {

        //foodIdを元に対応する画像パスを取得
        $images = $this->db->query("select img_path from images where food_id=".$foodId." ORDER BY priority");
        //fetchで配列に格納
        $result = $images->fetchAll(PDO::FETCH_COLUMN);
        return $result;
    }

}



?>