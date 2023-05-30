<?php
error_reporting(E_ALL);
ini_set("display_errors","On");

class POLIMF{
    private $NMPOLI;
    private $NMSUBSPESIALIS;
    private $KDSUBSPESIALIS;
    private $KDPOLI;
    
    function __construct(){ }

    function convertJSON(){
        $b = array('request'=>(array('t_sep'=>array(
            'noKartu'=>$this->getNoKartu(),
            'tglSep'=>$this->getTglSep(),
            'ppkPelayanan'=>'0168S001',
            'jnsPelayanan'=>$this->getJnsPelayanan(),
            'klsRawat'=>(array(
                        'klsRawatHak'=>$this->getKlsRawatHak(),
                        'klsRawatNaik'=>$this->getKlsRawatNaik(),
                        'pembiayaan'=>$this->getPembiayaan(),
                        'penanggungJawab'=>$this->getPenanggungJawab()
                    )),
            'noMR'=>$this->getNoMR(),
            'rujukan'=>(array(
                                'asalRujukan'=>$this->getAsalRujukan(),
                                'tglRujukan'=>$this->getTglRujukan(),
                                'noRujukan'=>$this->getNoRujukan(),
                                'ppkRujukan'=>$this->getPpkRujukan()
            )),
            'catatan'=>$this->getCatatan(),
            'diagAwal'=>$this->getDiagAwal(),
            'poli'=>(array(
                                'tujuan'=>$this->getTujuan(),
                                'eksekutif'=>$this->getEksekutif()
            )),
            'cob'=>(array(
                        'cob'=>$this->getCob()
            )),
            'katarak'=>(array(
                'katarak'=>$this->getKatarak()
            )),
            'jaminan'=>(array(
                            'lakaLantas'=>$this->getLakaLantas(),
                            'noLP'=>$this->getNoLP(),
                            'penjamin'=>(array(                                         
                                            'tglKejadian'=>$this->getTglKejadian(),
                                            'keterangan'=>$this->getKeterangan(),
                                            'suplesi'=>(array(
                                                            'suplesi'=>$this->getSuplesi(),
                                                            'noSepSuplesi'=>$this->getNoSepSuplesi(),
                                                            'lokasiLaka'=>(array(
                                                                        'kdPropinsi'=>$this->getKdPropinsi(),
                                                                        'kdKabupaten'=>$this->getKdKabupaten(),
                                                                        'kdKecamatan'=>$this->getKdKecamatan()
                                                            ))
                                            ))
                            ))
             )),
             'tujuanKunj'=>$this->getTujuanKunj(),
             'flagProcedure'=>$this->getFlagProcedure(),
             'kdPenunjang'=>$this->getKdPenunjang(),
             'assesmentPel'=>$this->getAssesmentPel(),
             'skdp'=>(array(
                        'noSurat'=>$this->getNoSurat(),
                        'kodeDPJP'=>$this->getKodeDPJP()
             )),
             'dpjpLayan'=>$this->getDpjpLayan(),
             'noTelp'=>$this->getNoTelp(),
             'user'=>$this->getUser()

        )))); 
        $json_b = json_encode($b);
        return $json_b;
    }
    

    /**
     * Get the value of NMPOLI
     */
    public function getNMPOLI() {
        return $this->NMPOLI;
    }

    /**
     * Set the value of NMPOLI
     */
    public function setNMPOLI($NMPOLI): self {
        $this->NMPOLI = $NMPOLI;
        return $this;
    }

    /**
     * Get the value of NMSUBSPESIALIS
     */
    public function getNMSUBSPESIALIS() {
        return $this->NMSUBSPESIALIS;
    }

    /**
     * Set the value of NMSUBSPESIALIS
     */
    public function setNMSUBSPESIALIS($NMSUBSPESIALIS): self {
        $this->NMSUBSPESIALIS = $NMSUBSPESIALIS;
        return $this;
    }

    /**
     * Get the value of KDSUBSPESIALIS
     */
    public function getKDSUBSPESIALIS() {
        return $this->KDSUBSPESIALIS;
    }

    /**
     * Set the value of KDSUBSPESIALIS
     */
    public function setKDSUBSPESIALIS($KDSUBSPESIALIS): self {
        $this->KDSUBSPESIALIS = $KDSUBSPESIALIS;
        return $this;
    }

    /**
     * Get the value of KDPOLI
     */
    public function getKDPOLI() {
        return $this->KDPOLI;
    }

    /**
     * Set the value of KDPOLI
     */
    public function setKDPOLI($KDPOLI): self {
        $this->KDPOLI = $KDPOLI;
        return $this;
    }
}
?>