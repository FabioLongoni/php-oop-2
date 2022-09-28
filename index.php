<?php

include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/product.php';
include_once __DIR__ . '/app/PetAccessories.php';

$data = [
  'name' => 'Crocchette di manzo',
  'price'=> 19.99,
  'description'=> 'Le migliori crocchette sulla piazza',
  'brand'=> 'Felix',
  'weight'=> 1
];
$crocchette = new PetFood($data);
var_dump($crocchette);

$data2 = [
  'name' => 'Guinzaglio',
  'price'=> 9.99,
  'description' => 'Guinzaglio adatto a tutte le taglie',
  'brand' => 'Yimidon',
  'length' => 3,
];
$leash = new PetAccessories($data2);
var_dump($leash);
