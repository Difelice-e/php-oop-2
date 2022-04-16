<?php 

class guest{
    public $name;
    public $surname;
    public $email;
    public $address;
    public $telephone;

    function __construct($_name, $_surname, $_email, $_address, $_telephone){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->address = $_address;
        $this->telephone = $_telephone;
    }
}

?>