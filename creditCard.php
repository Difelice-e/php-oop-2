<?php 

class creditCard{
    private $cardNumber;
    private $expiration;
    private $cvv;
  
    function __construct($_cardNumber, $_expiration, $_cvv){
        if(strlen($_cardNumber) == 16){
            $this->cardNumber = $_cardNumber;
        } else {
            echo 'Wrong card number';
        }
      
        if(strlen($_cvv) == 3){
            $this->cvv = $_cvv;
        } else {
            echo 'Wrong cvv';
        }
        $this->expiration = $_expiration;
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

    public function addCreditCard($cardNumber, $expiration, $cvv){
        $this->cardNumber = $cardNumber;
        $this->expiration = $expiration;
        $this->cvv = $cvv;
    }
}

?>