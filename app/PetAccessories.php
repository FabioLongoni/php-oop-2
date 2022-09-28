<?php

require_once __DIR__ .'/product.php';

class PetAccessories extends Product {
  public $length;
  function __construct($param) {
    parent::__construct($param);
    $this->length = $param['length'];
  }
}