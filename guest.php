<?php 

require_once __DIR__. '/creditCard.php';

class guest{
    public $name;
    public $surname;
    public $email;
    public $address;
    public $telephone;
    protected $credit_card = [];
    public $cart;

    function __construct($_name, $_surname, $_email, $_address, $_telephone, $_credit_card, $_cart) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->address = $_address;
        $this->telephone = $_telephone;
        $this->credit_card [] = $_credit_card;
        $this->cart [] = $_cart;
    }
}

?>