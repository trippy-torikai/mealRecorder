<?php
require_once('/var/www/html/app/model/userDao.php');

class loginService {

        private $userName;
        private $password;
        private $userId;

    function __construct($userName, $password) {
        $this->userName = $userName;
        $this->password = $password;

        $userDao = new UserDao();
        $this->userId = $userDao->selectUserId($userName, $password);
    }

    public function getUserName(){
        return $this->userName;
    }
    public function getUserId() {
        return $this->userId;
    }
}



?>