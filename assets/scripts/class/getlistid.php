<?php

class GETLISTID{

    private $_KODEBOOKING;
   
    
    function __construct(){ }

    function convertJSON(){
        $b = array(
            'kodebooking'=>$this->get_KODEBOOKING(),
            
        ); 
        $json_b = json_encode($b);
        return $json_b;
    }

    /**
     * Get the value of _KODEBOOKING
     */
    public function get_KODEBOOKING() {
        return $this->_KODEBOOKING;
    }

    /**
     * Set the value of _KODEBOOKING
     */
    public function set_KODEBOOKING($_KODEBOOKING): self {
        $this->_KODEBOOKING = $_KODEBOOKING;
        return $this;
    }

}