<?php

	date_default_timezone_set("Asia/Jakarta");
	error_reporting(E_ALL);
ini_set("display_errors","On");
	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/
	include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/ajax/encoded.php';
    include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/class/addantreanfarmasi.php';
	if($_POST){
        // /SEP/1.1/insert
			$kodebooking = $_POST['kodebooking'];
			$jenisresep = $_POST['jenisresep'];
			$nomorantrean = $_POST['nomorantrean'];
			$keterangan = $_POST['keterangan'];
					$insertAntreanFarmasi = new ADDANTREANFARMASI();
                    $insertAntreanFarmasi->set_KODEBOOKING($kodebooking);
                    $insertAntreanFarmasi->set_JENISRESEP($jenisresep);
                    $insertAntreanFarmasi->set_NOMORANTREAN($nomorantrean);
                    $insertAntreanFarmasi->set_KETERANGAN($keterangan);

			$resultJSON = $insertAntreanFarmasi->convertJSON();
			echo $resultJSON;
			$url = "https://apijkn-dev.bpjs-kesehatan.go.id/antreanrs_dev/antrean/farmasi/add";
			$sendANTREAN= new Encoded($url);
			$sent = $sendANTREAN->postJSON($resultJSON);
			echo $sent;
		}
	?>
        
    
        
			

		