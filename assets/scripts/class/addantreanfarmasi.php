<?php

class ADDANTREANFARMASI{

    private $_KODEBOOKING;
    private $_JENISRESEP;
    private $_NOMORANTREAN;
    private $_KETERANGAN;
    
    
    function __construct(){ }

    function convertJSON(){
        $b = array(
            'kodebooking'=>$this->get_KODEBOOKING(),
            'jenisresep'=>$this->get_JENISRESEP(),
            'nomorantrean'=>$this->get_NOMORANTREAN(),
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
     * Get the value of _JENISRESEP
     */
    public function get_JENISRESEP() {
        return $this->_JENISRESEP;
    }

    /**
     * Set the value of _JENISRESEP
     */
    public function set_JENISRESEP($_JENISRESEP): self {
        $this->_JENISRESEP = $_JENISRESEP;
        return $this;
    }

    /**
     * Get the value of _NOMORANTREAN
     */
    public function get_NOMORANTREAN() {
        return $this->_NOMORANTREAN;
    }

    /**
     * Set the value of _NOMORANTREAN
     */
    public function set_NOMORANTREAN($_NOMORANTREAN): self {
        $this->_NOMORANTREAN = $_NOMORANTREAN;
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