<?php

//================================
//             User
//--------------------------------
//　ユーザーの情報を格納するbeanクラス
//================================

class User {

    private $name;
    private $password;
    private $userId;
    
    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }

}

?>