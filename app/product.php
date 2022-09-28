<?php

class Product {
  public $name;
  public $price;
  public $poster;
  public $description;
  public $weight;
  public $volume;
  public $brand;
  public $categories;

  //function __constructor($name, $poster, $description,$weight, $volume, $brand, $categories, $price = 0)
  function __constructor($param) {
    $this->name = $param['name'];
    $this->price = $param['price'];
    //$this->poster = $param['poster'];
    $this->description = $param['description'];
    //$this->weight = $param['weight'];
    //$this->volume = $param['volume'];
    //$this->brand = $param['brand'];
    //$this->categories = $param['categories'];
  }

}