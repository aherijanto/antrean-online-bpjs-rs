<?php

	date_default_timezone_set("Asia/Jakarta");
	error_reporting(E_ALL);
ini_set("display_errors","On");
	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/
	include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/ajax/encoded.php';
    include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/class/addantrean.php';
	if($_POST){
        // /SEP/1.1/insert
			$kodebooking = $_POST['kodebooking'];
			$jenispasien = $_POST['jenispasien'];
			$nomorkartu = $_POST['nomorkartu'];
			$nik= $_POST['nik'];
			$nohp = $_POST['nohp'];
			$kodepoli = $_POST['kodepoli'];
			$namapoli = $_POST['namapoli'];
			$pasienbaru = $_POST['pasienbaru'];
			$norm= $_POST['norm'];
					$insertAntrean = new ADDANTREAN();
                    $insertAntrean->set_KODEBOOKING($kodebooking);
                    $insertAntrean->set_JENISPASIEN($jenispasien);
                    $insertAntrean->set_NOMORKARTU($nomorkartu);
                    $insertAntrean->set_NIK($nik);
                    $insertAntrean->set_NOHP($nohp);
                    $insertAntrean->set_KODEPOLI($kodepoli);
					$insertAntrean->set_NAMAPOLI($namapoli);
					$insertAntrean->set_PASIENBARU($pasienbaru);
					$insertAntrean->set_NORM($norm);

			$tanggalperiksa = $_POST['tanggalperiksa'];
			$kodedokter = $_POST['kodedokter'];
			$namadokter = $_POST['namadokter'];
			$jampraktek = $_POST['jampraktek'];

                    $insertAntrean->set_TANGGALPERIKSA($tanggalperiksa);
                    $insertAntrean->set_KODEDOKTER($kodedokter);
                    $insertAntrean->set_NAMADOKTER($namadokter);
                    $insertAntrean->set_JAMPRAKTEK($jampraktek);

			$jeniskunjungan = $_POST['jeniskunjungan'];
			$nomorreferensi = $_POST['nomorreferensi'];

                    $insertAntrean->set_JENISKUNJUNGAN($jeniskunjungan);
                    $insertAntrean->set_NOMORREFERENSI($nomorreferensi);

			$nomorantrean = $_POST['nomorantrean'];
			$angkaantrean = $_POST['angkaantrean'];

                    $insertAntrean->set_NOMORANTREAN($nomorantrean);
                    $insertAntrean->set_ANGKAANTREAN($angkaantrean);

			$estimasidilayanai = $_POST['estimasidilayani'];
			$sisakuotajkn = $_POST['sisakuotajkn'];
			$kuotajkn = $_POST['kuotajkn'];
			$sisakuotanonjkn = $_POST['sisakuotanonjkn'];
			$kuotanonjkn = $_POST['kuotanonjkn'];
			$keterangan = $_POST['keterangan'];
		
                    $insertAntrean->set_ESTIMASIDILAYANI($estimasidilayanai);
					$insertAntrean->set_SISAKUOTAJKN($sisakuotajkn);
                    $insertAntrean->set_KUOTAJKN($kuotajkn);
                    $insertAntrean->set_SISAKUOTANONJKN($sisakuotanonjkn);
                    $insertAntrean->set_KUOTANONJKN($kuotanonjkn);
                    $insertAntrean->set_KETERANGAN($keterangan);
                    

			$resultJSON = $insertAntrean->convertJSON();
			//echo $resultJSON;
			$url = "https://apijkn-dev.bpjs-kesehatan.go.id/antreanrs_dev/antrean/add";
			$sendANTREAN= new Encoded($url);
			$sent = $sendANTREAN->postJSON($resultJSON);
			
			echo $sent;
		}
	?>
        
    
        
			

		