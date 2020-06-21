<?php

class Dao {
    
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

}




?>