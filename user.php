<?php 

require_once __DIR__. '/guest.php';

class user extends guest{
    private $password;

    function __construct($_name, $_surname, $_email, $_password, $_address, $_telephone){
        parent::__construct($_name, $_surname, $_email, $_address, $_telephone);
        $this->password = $_password;
    }
}

?>