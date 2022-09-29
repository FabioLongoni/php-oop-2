<?php

include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/product.php';
include_once __DIR__ . '/app/PetAccessories.php';
include_once __DIR__ . '/app/User.php';

$data = [
  'name' => 'Crocchette di manzo',
  'price'=> 19.99,
  'description'=> 'Le migliori crocchette sulla piazza',
  'brand'=> 'Felix',
  'weight'=> 1
];
$crocchette = new PetFood($data);
//var_dump($crocchette);

$data2 = [
  'name' => 'Guinzaglio',
  'price'=> 9.99,
  'description' => 'Guinzaglio adatto a tutte le taglie',
  'brand' => 'Yimidon',
  'length' => 5,
];
$leash = new PetAccessories($data2);
//var_dump($leash);


try {
  $priceNotValid = new PetFood($data);
} catch (Exception $e) {
  ?><h1> <?= $e->getMessage();?></h1> <?php
};



$shopping = [$crocchette,$crocchette,$leash];

//var_dump($shopping);

$user = new User($shopping);
var_dump($user);
