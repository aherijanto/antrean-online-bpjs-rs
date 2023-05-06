<?php

	date_default_timezone_set("Asia/Jakarta");
	error_reporting(E_ALL);
ini_set("display_errors","On");
	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/
	include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/ajax/encoded.php';
    include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/class/getlistid.php';
	if($_POST){
        // /SEP/1.1/insert
			$kodebooking = $_POST['kodebooking'];
					$batalAntrean = new GETLISTID();
                    $batalAntrean->set_KODEBOOKING($kodebooking);
			
			$resultJSON = $batalAntrean->convertJSON();
			echo $resultJSON;
			$url = "https://apijkn-dev.bpjs-kesehatan.go.id/antreanrs_dev/antrean/getlisttask";
			$sendANTREAN= new Encoded($url);
			$sent = $sendANTREAN->postJSON($resultJSON);
			echo $sent;
		}
	?>
        
    
        
			

		