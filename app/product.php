<?php

class Product {
  public $name;
  public $price;
  public $description;
  public $brand;

  function __construct($param) {
    $this->name = $param['name'];
    $this->price = $param['price'];
    $this->description = $param['description'];
    $this->brand = $param['brand'];
  }

}