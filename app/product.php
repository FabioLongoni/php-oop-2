<?php

class Product {
  public $name;
  public $price = 0;
  public $description;
  public $brand;

  function __construct($param) {
    $this->name = $param['name'];
    $this->setPrice($param);
    $this->description = $param['description'];
    $this->brand = $param['brand'];
  }

  public function setPrice($param) {
    $productPrice = $param['price'];
    if( $productPrice > 0) {
      $this->price = $productPrice;
    }else {
      throw new Exception('Il prezzo non è valido');
    }
  }
}