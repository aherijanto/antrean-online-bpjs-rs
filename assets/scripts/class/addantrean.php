<?php

class ADDANTREAN{

    private $_KODEBOOKING;
    private $_JENISPASIEN;
    private $_NOMORKARTU;
    private $_NIK;
    private $_NOHP;
    private $_KODEPOLI;
    private $_NAMAPOLI;
    private $_PASIENBARU;
    private $_NORM;
    private $_TANGGALPERIKSA;
    private $_KODEDOKTER;
    private $_NAMADOKTER;
    private $_JAMPRAKTEK;
    private $_JENISKUNJUNGAN;
    private $_NOMORREFERENSI;
    private $_NOMORANTREAN;
    private $_ANGKAANTREAN;
    private $_ESTIMASIDILAYANI;
    private $_SISAKUOTAJKN;
    private $_KUOTAJKN;
    private $_SISAKUOTANONJKN;
    private $_KUOTANONJKN;
    private $_KETERANGAN;
    
    function __construct(){ }

    function convertJSON(){
        $b = array(
            'kodebooking'=>$this->get_KODEBOOKING(),
            'jenispasien'=>$this->get_JENISPASIEN(),
            'nomorkartu'=>$this->get_NOMORKARTU(),
            'nik'=>$this->get_NIK(),
            'nohp'=>$this->get_NOHP(),
            'kodepoli'=>$this->get_KODEPOLI(),
            'namapoli'=>$this->get_NAMAPOLI(),
            'pasienbaru'=>$this->get_PASIENBARU(),
            'norm'=>$this->get_NORM(),
            'tanggalperiksa'=>$this->get_TANGGALPERIKSA(),
            'kodedokter'=>$this->get_KODEDOKTER(),
            'namadokter'=>$this->get_NAMADOKTER(),
            'jampraktek'=>$this->get_JAMPRAKTEK(),
            'jeniskunjungan'=>$this->get_JENISKUNJUNGAN(),
            'nomorreferensi'=>$this->get_NOMORREFERENSI(),
            'nomorantrean'=>$this->get_NOMORANTREAN(),
            'angkaantrean'=>$this->get_ANGKAANTREAN(),
            'estimasidilayani'=>$this->get_ESTIMASIDILAYANI(),
            'sisakuotajkn'=>$this->get_SISAKUOTAJKN(),
            'kuotajkn'=>$this->get_KUOTAJKN(),
            'sisakuotanonjkn'=>$this->get_SISAKUOTANONJKN(),
            'kuotanonjkn'=>$this->get_KUOTANONJKN(),
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
     * Get the value of _JENISPASIEN
     */
    public function get_JENISPASIEN() {
        return $this->_JENISPASIEN;
    }

    /**
     * Set the value of _JENISPASIEN
     */
    public function set_JENISPASIEN($_JENISPASIEN): self {
        $this->_JENISPASIEN = $_JENISPASIEN;
        return $this;
    }

    /**
     * Get the value of _NOMORKARTU
     */
    public function get_NOMORKARTU() {
        return $this->_NOMORKARTU;
    }

    /**
     * Set the value of _NOMORKARTU
     */
    public function set_NOMORKARTU($_NOMORKARTU): self {
        $this->_NOMORKARTU = $_NOMORKARTU;
        return $this;
    }

    /**
     * Get the value of _NIK
     */
    public function get_NIK() {
        return $this->_NIK;
    }

    /**
     * Set the value of _NIK
     */
    public function set_NIK($_NIK): self {
        $this->_NIK = $_NIK;
        return $this;
    }

    /**
     * Get the value of _NOHP
     */
    public function get_NOHP() {
        return $this->_NOHP;
    }

    /**
     * Set the value of _NOHP
     */
    public function set_NOHP($_NOHP): self {
        $this->_NOHP = $_NOHP;
        return $this;
    }

    /**
     * Get the value of _KODEPOLI
     */
    public function get_KODEPOLI() {
        return $this->_KODEPOLI;
    }

    /**
     * Set the value of _KODEPOLI
     */
    public function set_KODEPOLI($_KODEPOLI): self {
        $this->_KODEPOLI = $_KODEPOLI;
        return $this;
    }

    /**
     * Get the value of _NAMAPOLI
     */
    public function get_NAMAPOLI() {
        return $this->_NAMAPOLI;
    }

    /**
     * Set the value of _NAMAPOLI
     */
    public function set_NAMAPOLI($_NAMAPOLI): self {
        $this->_NAMAPOLI = $_NAMAPOLI;
        return $this;
    }

    /**
     * Get the value of _PASIENBARU
     */
    public function get_PASIENBARU() {
        return $this->_PASIENBARU;
    }

    /**
     * Set the value of _PASIENBARU
     */
    public function set_PASIENBARU($_PASIENBARU): self {
        $this->_PASIENBARU = $_PASIENBARU;
        return $this;
    }

    /**
     * Get the value of _NORM
     */
    public function get_NORM() {
        return $this->_NORM;
    }

    /**
     * Set the value of _NORM
     */
    public function set_NORM($_NORM): self {
        $this->_NORM = $_NORM;
        return $this;
    }

    /**
     * Get the value of _TANGGALPERIKSA
     */
    public function get_TANGGALPERIKSA() {
        return $this->_TANGGALPERIKSA;
    }

    /**
     * Set the value of _TANGGALPERIKSA
     */
    public function set_TANGGALPERIKSA($_TANGGALPERIKSA): self {
        $this->_TANGGALPERIKSA = $_TANGGALPERIKSA;
        return $this;
    }

    /**
     * Get the value of _KODEDOKTER
     */
    public function get_KODEDOKTER() {
        return $this->_KODEDOKTER;
    }

    /**
     * Set the value of _KODEDOKTER
     */
    public function set_KODEDOKTER($_KODEDOKTER): self {
        $this->_KODEDOKTER = $_KODEDOKTER;
        return $this;
    }

    /**
     * Get the value of _NAMADOKTER
     */
    public function get_NAMADOKTER() {
        return $this->_NAMADOKTER;
    }

    /**
     * Set the value of _NAMADOKTER
     */
    public function set_NAMADOKTER($_NAMADOKTER): self {
        $this->_NAMADOKTER = $_NAMADOKTER;
        return $this;
    }

    /**
     * Get the value of _JAMPRAKTEK
     */
    public function get_JAMPRAKTEK() {
        return $this->_JAMPRAKTEK;
    }

    /**
     * Set the value of _JAMPRAKTEK
     */
    public function set_JAMPRAKTEK($_JAMPRAKTEK): self {
        $this->_JAMPRAKTEK = $_JAMPRAKTEK;
        return $this;
    }

    /**
     * Get the value of _JENISKUNJUNGAN
     */
    public function get_JENISKUNJUNGAN() {
        return $this->_JENISKUNJUNGAN;
    }

    /**
     * Set the value of _JENISKUNJUNGAN
     */
    public function set_JENISKUNJUNGAN($_JENISKUNJUNGAN): self {
        $this->_JENISKUNJUNGAN = $_JENISKUNJUNGAN;
        return $this;
    }

    /**
     * Get the value of _NOMORREFERENSI
     */
    public function get_NOMORREFERENSI() {
        return $this->_NOMORREFERENSI;
    }

    /**
     * Set the value of _NOMORREFERENSI
     */
    public function set_NOMORREFERENSI($_NOMORREFERENSI): self {
        $this->_NOMORREFERENSI = $_NOMORREFERENSI;
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
     * Get the value of _ANGKAANTREAN
     */
    public function get_ANGKAANTREAN() {
        return $this->_ANGKAANTREAN;
    }

    /**
     * Set the value of _ANGKAANTREAN
     */
    public function set_ANGKAANTREAN($_ANGKAANTREAN): self {
        $this->_ANGKAANTREAN = $_ANGKAANTREAN;
        return $this;
    }

    /**
     * Get the value of _ESTIMASIDILAYANI
     */
    public function get_ESTIMASIDILAYANI() {
        return $this->_ESTIMASIDILAYANI;
    }

    /**
     * Set the value of _ESTIMASIDILAYANI
     */
    public function set_ESTIMASIDILAYANI($_ESTIMASIDILAYANI): self {
        $this->_ESTIMASIDILAYANI = $_ESTIMASIDILAYANI;
        return $this;
    }

    /**
     * Get the value of _SISAKUOTAJKN
     */
    public function get_SISAKUOTAJKN() {
        return $this->_SISAKUOTAJKN;
    }

    /**
     * Set the value of _SISAKUOTAJKN
     */
    public function set_SISAKUOTAJKN($_SISAKUOTAJKN): self {
        $this->_SISAKUOTAJKN = $_SISAKUOTAJKN;
        return $this;
    }

    /**
     * Get the value of _KUOTAJKN
     */
    public function get_KUOTAJKN() {
        return $this->_KUOTAJKN;
    }

    /**
     * Set the value of _KUOTAJKN
     */
    public function set_KUOTAJKN($_KUOTAJKN): self {
        $this->_KUOTAJKN = $_KUOTAJKN;
        return $this;
    }

    /**
     * Get the value of _SISAKUOTANONJKN
     */
    public function get_SISAKUOTANONJKN() {
        return $this->_SISAKUOTANONJKN;
    }

    /**
     * Set the value of _SISAKUOTANONJKN
     */
    public function set_SISAKUOTANONJKN($_SISAKUOTANONJKN): self {
        $this->_SISAKUOTANONJKN = $_SISAKUOTANONJKN;
        return $this;
    }

    /**
     * Get the value of _KUOTANONJKN
     */
    public function get_KUOTANONJKN() {
        return $this->_KUOTANONJKN;
    }

    /**
     * Set the value of _KUOTANONJKN
     */
    public function set_KUOTANONJKN($_KUOTANONJKN): self {
        $this->_KUOTANONJKN = $_KUOTANONJKN;
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