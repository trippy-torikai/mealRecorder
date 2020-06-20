<?php

class loginService {

        private $userName;
        private $password;
        private $userId;

    function __construct($userName, $password) {
        $this->userName = $userName;
        $this->password = $password;
    }

    public function getUserName() {
        return $this->userName;
    }
}



?>