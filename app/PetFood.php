<?php

require_once __DIR__ .'/product.php';

class PetFood extends Product {
  public $weight;
  function __construct($param) {
    parent::__construct($param);
    $this->weight = $param['weight'];
  }
};