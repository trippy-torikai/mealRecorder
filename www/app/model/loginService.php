<?php
require_once('/var/www/html/app/model/dao.php');

class loginService {

        private $userName;
        private $password;
        private $userId;

    function __construct($userName, $password) {
        $this->userName = $userName;
        $this->password = $password;

        $dao = new Dao();
        $this->userId = $dao->selectUserId($userName, $password);
    }

    public function getUserName(){
        return $this->userName;
    }
    public function getUserId() {
        return $this->userId;
    }
}



?>