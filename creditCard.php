<?php 

class creditCard{
    private $cardNumber;
    private $expiration;
    private $cvv;
  
    function __construct($_cardNumber, $_expiration, $_cvv){
      $this->cardNumber = $_cardNumber;
      $this->expiration = $_expiration;
      $this->cvv = $_cvv;
    }
  
    public function getNumero(){
      return $this->cardNumber;
    }
  
    public function getscadenza(){
      return $this->expiration;
    }
  
    public function getcvv(){
      return $this->cvv;
    }
}

?>