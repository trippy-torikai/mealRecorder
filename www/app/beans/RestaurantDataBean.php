<?php

//================================
//       RestaurantDataBean
//--------------------------------
//　  お店の情報を格納するbeanクラス
//================================

class RestaurantDataBean {
    private $id;                     //管理ID
    private $name;                  //店名
    private $address;               //住所
    private $closestStation;        //最寄り駅
    private $priceAverage;          //予算
    private $tags;                  //タグ　配列


//
//  getter
//
    public function getName() {
        return $this->name;
    }
    public function getAddress() {
        return $this->address;
    }
    public function getClosestStation() {
        return $this->closestStation;
    }
    public function getPriceAverage() {
        return $this->priceAverage;
    }
    public function getTags() {
        return $this->tags;
    }



}




?>