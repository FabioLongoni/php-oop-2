<?php
class User {
  public $name = 'Pippo Baudo';
  public $shopping = [];
  public $payment = 0;

  function __construct($param) {
    $this->shopping=$param;
    $this->setPayment($param);
  }
  public function setPayment($param) {
    foreach ($param as $value) {
        $this->payment += $value->price;
    }
  }
}
