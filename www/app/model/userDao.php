<?php

class UserDao {
    
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=mysql;dbname=food_recoder', 'root', 'pass');
    }


    public function selectUserId($userName, $password) {

        $userId = $this->db->query("select user_id from login_id where password='".$password."' and user_name='".$userName."'");
        //echo var_dump($userId);
        $result = $userId->fetch()['user_id'];
        return $result;
    }

    public function selectImage($foodId) {

        //DB接続とクエリ実行
        $images = $this->db->query("select img_path from images where food_id=".$foodId." ORDER BY priority");
        //fetchで整形
        $result = $images->fetchAll(PDO::FETCH_COLUMN);
        return $result;
    }

}




?>