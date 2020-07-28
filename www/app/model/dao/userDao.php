<?php

//=============================
//       　  UserDao
//-----------------------------
//　　ユーザー情報用のdaoクラス
//=============================

require_once('/var/www/html/app/model/daoAbstract.php');


class UserDao extends DaoAbstract{

    public function selectUserId($userName, $password) {

        $userId = $this->db->query("select user_id from login_id where password='".$password."' and user_name='".$userName."'");
        //echo var_dump($userId);
        $result = $userId->fetch()['user_id'];
        return $result;
    }

}




?>