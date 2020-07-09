<?php

abstract class DaoAbstract {

    private $db;
    
    function __construct() {
        $this->db = new PDO('mysql:host=mysql;dbname=food_recoder', 'root', 'pass');
    }
}



?>