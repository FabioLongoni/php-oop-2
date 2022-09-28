<?php

require_once __DIR__ .'/product.php';

class PetAccessories extends Product {
  public $length;
  function __construct($param) {
    parent::__construct($param);
    $this->length = $param['length'];

    if($param['length'] < 3) {
      $this->price = 9.99;
    }else {
      $this->price = 15.99;
    }
  }
}