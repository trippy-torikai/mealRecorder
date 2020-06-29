<?php 
class Utils {

    public function isAuthenticated($loginuser) {
        if(!isset($loginuser)) {
            header('Location: http://localhost:80/');
        }
    }


}

?>