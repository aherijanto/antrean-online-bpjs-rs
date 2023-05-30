<?php

class UPDATEANTREANFARMASI{

    private $_KODEBOOKING;
    private $_JENISRESEP;
    private $_TASKID;
    private $_WAKTU;
    
    
    function __construct(){ }

    function convertJSON(){
        $b = array(
            'kodebooking'=>$this->get_KODEBOOKING(),
            'taskid'=>$this->get_TASKID(),
            'waktu'=>$this->get_WAKTU(),
            'jenisresep'=>$this->get_JENISRESEP(),
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
     * Get the value of _TASKID
     */
    public function get_TASKID() {
        return $this->_TASKID;
    }

    /**
     * Set the value of _TASKID
     */
    public function set_TASKID($_TASKID): self {
        $this->_TASKID = $_TASKID;
        return $this;
    }

    /**
     * Get the value of _WAKTU
     */
    public function get_WAKTU() {
        return $this->_WAKTU;
    }

    /**
     * Set the value of _WAKTU
     */
    public function set_WAKTU($_WAKTU): self {
        $this->_WAKTU = $_WAKTU;
        return $this;
    }
}