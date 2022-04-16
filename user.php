<?php 

require_once __DIR__. '/guest.php';

class user extends guest{
    private $password;
    protected $discount;

    function __construct($_name, $_surname, $_email, $_password, $_address, $_telephone, $_credit_card, $_cart){
        parent::__construct($_name, $_surname, $_email, $_address, $_telephone, $_credit_card, $_cart);
        $this->password = $_password;
    }

    public function getDiscount(){
        if($this->password){
            $this->discount = 20;
        } else {
            echo 'Sign up for a 20% off on your orders now!';
        }
    }
}

?>