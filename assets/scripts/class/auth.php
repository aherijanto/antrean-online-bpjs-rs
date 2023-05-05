<?php
error_reporting(E_ALL);
ini_set("display_errors","On");

class AUTH{
    private $_username;
    private $_password;
    
    const validuser='annisaajkn';
    const validpass='ws4nN15a4jKn';

    function __construct(){ 
       
    }

    /**
     * Get the value of _username
     */
    public function get_username() {
        return $this->_username;
    }

    /**
     * Set the value of _username
     */
    public function set_username($_username): self {
        $this->_username = $_username;
        return $this;
    }

    /**
     * Get the value of _password
     */
    public function get_password() {
        return $this->_password;
    }

    /**
     * Set the value of _password
     */
    public function set_password($_password): self {
        $this->_password = $_password;
        return $this;
    }

    function _AUTHVALID(){
       
        if($this->get_username() === self::validuser && $this->get_password() === self::validpass){
            return 'pass';
        }
        return 'failed';
    }
}
?>