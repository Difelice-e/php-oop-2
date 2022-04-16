<?php 

require_once __DIR__. '/index.php';

class cart{
  public $products;
  public $nProducts;
  public $totPrice;

  public function addProduct($product){
    $this->products[] = $product;
  }

  public function calcTot(){
    foreach($this->products as $value){
      $this->totPrice += $value->price;
    }
  }

  public function countProducts(){
    return $this->nProducts = count($this->products);
  }
}

?>