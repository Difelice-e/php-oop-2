<?php 

class product {
    public $brand;
    public $name;
    public $category;
    public $description;
    public $price;
  
    function __construct($_brand, $_name, $_category, $_description, $_price){
      
      $this->brand = $_brand;
      $this->name = $_name;
      $this->category = $_category;
      $this->description = $_description;
      $this->price = $_price;
    }
  };

?>