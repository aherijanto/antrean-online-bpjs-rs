<?php
	date_default_timezone_set("Asia/Jakarta");
	error_reporting(E_ALL);
    ini_set("display_errors","On");
	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/
   
	include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/ajax/encoded.php';
    
	if($_POST['kodepoli']){
        $kodepoli = $_POST['kodepoli'];
        $tanggal = $_POST['tanggalpoli'];

        
        $url = 'https://apijkn-dev.bpjs-kesehatan.go.id/antreanrs_dev/jadwaldokter/kodepoli/'.$kodepoli.'/tanggal/'.$tanggal;    
        ///jadwaldokter/kodepoli/{Parameter1}/tanggal/{Parameter2}   
        
        $jadwal = new Encoded($url);//
        $jadwal->setInit();
    
        //  echo '<br/>Cons-ID :'.$jadwal->getConsid();
        //  echo '<br/>Timestamp : '.$jadwal->getTStamp();
        //  echo '<br/>Signature : '.$jadwal->getEncodedSignature();
        //  echo '<br/>UserKey : '.$jadwal->getUserkey();
        //  echo '<br/>'.getcwd();
        //  echo '<br/>'.$_SERVER['DOCUMENT_ROOT'];
        if($jadwal->populateResponse()!=null){
            echo ($jadwal->populateResponse());
        }else{
            echo 'Data Not Found...';
        }

    }
        
		
?>
