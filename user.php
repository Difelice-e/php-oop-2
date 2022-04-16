<?php 

class user{
    public $name;
    public $surname;
    public $email;
    private $password;
    public $address;
    public $telephone;

    function __construct($_name, $_surname, $_email, $_password, $_address, $_telephone){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->password = $_password;
        $this->address = $_address;
        $this->telephone = $_telephone;
    }
}

?>