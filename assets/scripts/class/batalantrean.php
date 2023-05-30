<?php

class BATALANTREAN{

    private $_KODEBOOKING;
    private $_KETERANGAN;
    
    
    function __construct(){ }

    function convertJSON(){
        $b = array(
            'kodebooking'=>$this->get_KODEBOOKING(),
            'keterangan'=>$this->get_KETERANGAN(),
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

    

    /**
     * Get the value of _KETERANGAN
     */
    public function get_KETERANGAN() {
        return $this->_KETERANGAN;
    }

    /**
     * Set the value of _KETERANGAN
     */
    public function set_KETERANGAN($_KETERANGAN): self {
        $this->_KETERANGAN = $_KETERANGAN;
        return $this;
    }
}