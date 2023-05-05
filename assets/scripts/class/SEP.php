<?php
error_reporting(E_ALL);
ini_set("display_errors","On");

class SEPMF{
    private $noKartu;
    private $tglSep;
    private $ppkPelayanan;
    private $jnsPelayanan;
    
    /* RAWAT */
    private $klsRawatHak;
    private $klsRawatNaik;
    private $pembiayaan;
    private $penanggungJawab;


    private $noMR;
    
    /* RUJUKAN */
    private $asalRujukan;
    private $tglRujukan;
    private $noRujukan;
    private $ppkRujukan;

    private $catatan;
    private $diagAwal;
    
    /* POLI */
    private $tujuan;
    private $eksekutif;

    /* COB */
    private $cob;

    /*  KATARAK */
    private $katarak;

    /* JAMINAN */
    private $lakaLantas;
    private $noLP;

    /* PENJAMIN */
  
    private $tglKejadian;
    private $keterangan;
    
    /* SUPLESI */
    private $suplesi;
    private $noSepSuplesi;
    /* LOKASI LAKA */
    private $kdPropinsi;
    private $kdKabupaten;
    private $kdKecamatan;

    private $tujuanKunj;
    private $flagProcedure;
    private $kdPenunjang;
    private $assesmentPel;

    /* SKDP */
    private $noSurat;
    private $kodeDPJP;

    private $dpjpLayan;
    private $noTelp;
    private $user;

    public function getNoKartu()
    {
        return $this->noKartu;
    }

    /**
     * Set the value of noKartu
     */
    public function setNoKartu($noKartu): self
    {
        $this->noKartu = $noKartu;

        return $this;
    }

    /**
     * Get the value of tglSep
     */
    public function getTglSep()
    {
        return $this->tglSep;
    }

    /**
     * Set the value of tglSep
     */
    public function setTglSep($tglSep): self
    {
        $this->tglSep = $tglSep;

        return $this;
    }

    /**
     * Get the value of ppkPelayanan
     */
    public function getPpkPelayanan()
    {
        return $this->ppkPelayanan;
    }

    /**
     * Set the value of ppkPelayanan
     */
    public function setPpkPelayanan($ppkPelayanan): self
    {
        $this->ppkPelayanan = $ppkPelayanan;

        return $this;
    }

    /**
     * Get the value of jnsPelayanan
     */
    public function getJnsPelayanan()
    {
        return $this->jnsPelayanan;
    }

    /**
     * Set the value of jnsPelayanan
     */
    public function setJnsPelayanan($jnsPelayanan): self
    {
        $this->jnsPelayanan = $jnsPelayanan;

        return $this;
    }

   
    public function getNoMR()
    {
        return $this->noMR;
    }

    /**
     * Set the value of noMR
     */
    public function setNoMR($noMR): self
    {
        $this->noMR = $noMR;

        return $this;
    }

    /**
     * Get the value of asalRujukan
     */
    public function getAsalRujukan()
    {
        return $this->asalRujukan;
    }
    /**
     * Set the value of asalRujukan
     */
    public function setAsalRujukan($asalRujukan): self
    {
        $this->asalRujukan = $asalRujukan;

        return $this;
    }

    /**
     * Get the value of tglRujukan
     */
    public function getTglRujukan()
    {
        return $this->tglRujukan;
    }

    /**
     * Set the value of tglRujukan
     */
    public function setTglRujukan($tglRujukan): self
    {
        $this->tglRujukan = $tglRujukan;

        return $this;
    }

    /**
     * Get the value of noRujukan
     */
    public function getNoRujukan()
    {
        return $this->noRujukan;
    }

    /**
     * Set the value of noRujukan
     */
    public function setNoRujukan($noRujukan): self
    {
        $this->noRujukan = $noRujukan;

        return $this;
    }

    /**
     * Get the value of ppkRujukan
     */
    public function getPpkRujukan()
    {
        return $this->ppkRujukan;
    }

    /**
     * Set the value of ppkRujukan
     */
    public function setPpkRujukan($ppkRujukan): self
    {
        $this->ppkRujukan = $ppkRujukan;

        return $this;
    }

    /**
     * Get the value of catatan
     */
    public function getCatatan()
    {
        return $this->catatan;
    }

    /**
     * Set the value of catatan
     */
    public function setCatatan($catatan): self
    {
        $this->catatan = $catatan;

        return $this;
    }

    /**
     * Get the value of diagAwal
     */
    public function getDiagAwal()
    {
        return $this->diagAwal;
    }

    /**
     * Set the value of diagAwal
     */
    public function setDiagAwal($diagAwal): self
    {
        $this->diagAwal = $diagAwal;

        return $this;
    }

    /**
     * Get the value of tujuan
     */
    public function getTujuan()
    {
        return $this->tujuan;
    }

    /**
     * Set the value of tujuanerror_reporting(E_ALL);

     */
    public function setTujuan($tujuan): self
    {
        $this->tujuan = $tujuan;

        return $this;
    }

    /**
     * Get the value of eksekutif
     */
    public function getEksekutif()
    {
        return $this->eksekutif;
    }

    /**
     * Set the value of eksekutif
     */
    public function setEksekutif($eksekutif): self
    {
        $this->eksekutif = $eksekutif;

        return $this;
    }

    /**
     * Get the value of cob
     */
    public function getCob()
    {
        return $this->cob;
    }

    /**
     * Set the value of cob
     */
    public function setCob($cob): self
    {
        $this->cob = $cob;

        return $this;
    }

    /**
     * Get the value of katarak
     */
    public function getKatarak()
    {
        return $this->katarak;
    }

    /**
     * Set the value of katarak
     */
    public function setKatarak($katarak): self
    {
        $this->katarak = $katarak;

        return $this;
    }

    /**
     * Get the value of lakaLantas
     */
    public function getLakaLantas()
    {
        return $this->lakaLantas;
    }

    /**
     * Set the value of lakaLantas
     */
    public function setLakaLantas($lakaLantas): self
    {
        $this->lakaLantas = $lakaLantas;

        return $this;
    }

   /**
     * Get the value of noLP
     */
    public function getNoLP()
    {
        return $this->noLP;
    }

    /**
     * Set the value of noLP
     */
    public function setNoLP($noLP): self
    {
        $this->noLP = $noLP;

        return $this;
    }

    /**
     * Get the value of tglKejadian
     */
    public function getTglKejadian()
    {
        return $this->tglKejadian;
    }

    /**
     * Set the value of tglKejadian
     */
    public function setTglKejadian($tglKejadian): self
    {
        $this->tglKejadian = $tglKejadian;

        return $this;
    }
 
    /**
     * Get the value of keterangan
     */
    public function getKeterangan()
    {
        return $this->keterangan;
    }

    /**
     * Set the value of keterangan
     */
    public function setKeterangan($keterangan): self
    {
        $this->keterangan = $keterangan;

        return $this;
    }

    /**
     * Get the value of suplesi
     */
    public function getSuplesi()
    {
        return $this->suplesi;
    }

    /**
     * Set the value of suplesi
     */
    public function setSuplesi($suplesi): self
    {
        $this->suplesi = $suplesi;

        return $this;
    }

    /**
     * Get the value of noSepSuplesi
     */
    public function getNoSepSuplesi()
    {
        return $this->noSepSuplesi;
    }

    /**
     * Set the value of noSepSuplesi
     */
    public function setNoSepSuplesi($noSepSuplesi): self
    {
        $this->noSepSuplesi = $noSepSuplesi;

        return $this;
    }

    /**
     * Get the value of kdPropinsi
     */
    public function getKdPropinsi()
    {
        return $this->kdPropinsi;
    }

    /**
     * Set the value of kdPropinsi
     */
    public function setKdPropinsi($kdPropinsi): self
    {
        $this->kdPropinsi = $kdPropinsi;

        return $this;
    }

    /**
     * Get the value of kdKabupaten
     */
    public function getKdKabupaten()
    {
        return $this->kdKabupaten;
    }

    /**
     * Set the value of kdKabupaten
     */
    public function setKdKabupaten($kdKabupaten): self
    {
        $this->kdKabupaten = $kdKabupaten;

        return $this;
    }

    /**
     * Get the value of kdKecamatan
     */
    public function getKdKecamatan()
    {
        return $this->kdKecamatan;
    }

    /**
     * Set the value of kdKecamatan
     */
    public function setKdKecamatan($kdKecamatan): self
    {
        $this->kdKecamatan = $kdKecamatan;

        return $this;
    }
    public function getTujuanKunj()
    {
        return $this->tujuanKunj;
    }

    /**
     * Set the value of tujuanKunj
     */
    public function setTujuanKunj($tujuanKunj): self
    {
        $this->tujuanKunj = $tujuanKunj;

        return $this;
    }

     /**
     * Get the value of assesmentPel
     */
    public function getAssesmentPel()
    {
        return $this->assesmentPel;
    }

    /**
     * Set the value of assesmentPel
     */
    public function setAssesmentPel($assesmentPel): self
    {
        $this->assesmentPel = $assesmentPel;

        return $this;
    }

    /**
     * Get the value of kdPenunjang
     */
    public function getKdPenunjang()
    {
        return $this->kdPenunjang;
    }

    /**
     * Set the value of kdPenunjang
     */
    public function setKdPenunjang($kdPenunjang): self
    {
        $this->kdPenunjang = $kdPenunjang;

        return $this;
    }

    /**
     * Get the value of flagProcedure
     */
    public function getFlagProcedure()
    {
        return $this->flagProcedure;
    }

    /**
     * Set the value of flagProcedure
     */
    public function setFlagProcedure($flagProcedure): self
    {
        $this->flagProcedure = $flagProcedure;

        return $this;
    }
    /**
     * Get the value of noSurat
     */
    public function getNoSurat()
    {
        return $this->noSurat;
    }

    /**
     * Set the value of noSurat
     */
    public function setNoSurat($noSurat): self
    {
        $this->noSurat = $noSurat;

        return $this;
    }

    /**
     * Get the value of kodeDPJP
     */
    public function getKodeDPJP()
    {
        return $this->kodeDPJP;
    }

    /**
     * Set the value of kodeDPJP
     */
    public function setKodeDPJP($kodeDPJP): self
    {
        $this->kodeDPJP = $kodeDPJP;

        return $this;
    }
    /**
     * Get the value of dpjpLayan
     */
    public function getDpjpLayan()
    {
        return $this->dpjpLayan;
    }

    /**
     * Set the value of dpjpLayan
     */
    public function setDpjpLayan($dpjpLayan): self
    {
        $this->dpjpLayan = $dpjpLayan;

        return $this;
    }
    /**
     * Get the value of noTelp
     */
    public function getNoTelp()
    {
        return $this->noTelp;
    }

    /**
     * Set the value of noTelp
     */
    public function setNoTelp($noTelp): self
    {
        $this->noTelp = $noTelp;

        return $this;
    }

    /**
     * Get the value of user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     */
    public function setUser($user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getKlsRawatHak()
    {
        return $this->klsRawatHak;
    }

    /**
     * Set the value of klsRawatHak
     */
    public function setKlsRawatHak($klsRawatHak): self
    {
        $this->klsRawatHak = $klsRawatHak;

        return $this;
    }
    /**
     * Get the value of klsRawatNaik
     */
    public function getKlsRawatNaik()
    {
        return $this->klsRawatNaik;
    }

    /**
     * Set the value of klsRawatNaik
     */
    public function setKlsRawatNaik($klsRawatNaik): self
    {
        $this->klsRawatNaik = $klsRawatNaik;

        return $this;
    }

    /**
     * Get the value of pembiayaan
     */
    public function getPembiayaan()
    {
        return $this->pembiayaan;
    }

    /**
     * Set the value of pembiayaan
     */
    public function setPembiayaan($pembiayaan): self
    {
        $this->pembiayaan = $pembiayaan;

        return $this;
    }

    /**
     * Get the value of penanggungJawab
     */
    public function getPenanggungJawab()
    {
        return $this->penanggungJawab;
    }

    /**
     * Set the value of penanggungJawab
     */
    public function setPenanggungJawab($penanggungJawab): self
    {
        $this->penanggungJawab = $penanggungJawab;

        return $this;
    }

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
    
}
?>