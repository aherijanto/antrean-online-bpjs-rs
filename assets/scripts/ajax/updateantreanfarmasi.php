<?php

	date_default_timezone_set("Asia/Jakarta");
	error_reporting(E_ALL);
ini_set("display_errors","On");
	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/
	include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/ajax/encoded.php';
    include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/class/updateantreanfarmasi.php';
	if($_POST){
        // /SEP/1.1/insert
			$kodebooking = $_POST['kodebooking'];
			$jenisresep = $_POST['jenisresep'];
			$taskid = $_POST['taskid'];
			$waktu = $_POST['waktu'];
					$updateAntreanFarmasi = new UPDATEANTREANFARMASI();
                    $updateAntreanFarmasi->set_KODEBOOKING($kodebooking);
                    $updateAntreanFarmasi->set_JENISRESEP($jenisresep);
                    $updateAntreanFarmasi->set_TASKID($taskid);
                    $updateAntreanFarmasi->set_WAKTU($waktu);

			$resultJSON = $updateAntreanFarmasi->convertJSON();
			echo $resultJSON;
			$url = "https://apijkn-dev.bpjs-kesehatan.go.id/antreanrs_dev/antrean/updatewaktu";
			$sendANTREAN= new Encoded($url);
			$sent = $sendANTREAN->postJSON($resultJSON);
			echo $sent;
		}
	?>
        
    
        
			

		