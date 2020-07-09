<?php

//=======================================
//       　　　　DaoAbstract
//---------------------------------------
//　　　　　　　Daoのスーパークラス
//　DBのコネクトを取得するコンストラクタを持つ
//=======================================

abstract class DaoAbstract {

    protected $db;

    //DBコネクタ取得を行うコンストラクタ
    function __construct() {
        $this->db = new PDO('mysql:host=mysql;dbname=food_recoder', 'root', 'pass');
    }

}



?>