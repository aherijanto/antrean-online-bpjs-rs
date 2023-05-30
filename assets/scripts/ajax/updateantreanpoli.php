<?php

	date_default_timezone_set("Asia/Jakarta");
	error_reporting(E_ALL);
ini_set("display_errors","On");
	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/
	include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/ajax/encoded.php';
    include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/class/updateantreanpoli.php';
	if($_POST){
        // /SEP/1.1/insert
			$kodebooking = $_POST['kodebooking'];
			$taskid = $_POST['taskid'];
			$waktu = $_POST['waktu'];
					$updateAntreanPoli = new UPDATEANTREANPOLI();
                    $updateAntreanPoli->set_KODEBOOKING($kodebooking);
                    $updateAntreanPoli->set_TASKID($taskid);
                    $updateAntreanPoli->set_WAKTU($waktu);

			$resultJSON = $updateAntreanPoli->convertJSON();
			echo $resultJSON;
			$url = "https://apijkn-dev.bpjs-kesehatan.go.id/antreanrs_dev/antrean/updatewaktu";
			$sendANTREAN= new Encoded($url);
			$sent = $sendANTREAN->postJSON($resultJSON);
			echo $sent;
		}
	?>
        
    
        
			

		