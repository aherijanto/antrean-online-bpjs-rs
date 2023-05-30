<?php

	date_default_timezone_set("Asia/Jakarta");
	error_reporting(E_ALL);
ini_set("display_errors","On");
	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/
	include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/ajax/encoded.php';
    include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/class/SEP.php';
	if($_POST){
        // /SEP/1.1/insert
			$noKartu = $_POST['noKartu'];
			$tglSep = $_POST['tglSep'];
			$ppkPelayanan = $_POST['ppkPelayanan'];
			$jnsPelayanan= $_POST['jnsPelayanan'];
			$klsRawatHak = $_POST['klsRawatHak'];
			$klsRawatNaik = $_POST['klsRawatNaik'];
			$pembiayaan = $_POST['pembiayaan'];
			$penanggungJawab = $_POST['penanggungJawab'];
			$noMR= $_POST['noMR'];
					$insertSEP = new SEPMF();
                    $insertSEP->setNoKartu($noKartu);
                    $insertSEP->setTglSep($tglSep);
                    $insertSEP->setPpkPelayanan($ppkPelayanan);
                    $insertSEP->setJnsPelayanan($jnsPelayanan);
                    $insertSEP->setKlsRawatHak($klsRawatHak);
                    $insertSEP->setKlsRawatNaik($klsRawatNaik);
					$insertSEP->setPembiayaan($pembiayaan);
					$insertSEP->setPenanggungJawab($penanggungJawab);
					$insertSEP->setNoMR($noMR);

			$asalRujukan = $_POST['asalRujukan'];
			$tglRujukan = $_POST['tglRujukan'];
			$noRujukan = $_POST['noRujukan'];
			$ppkRujukan = $_POST['ppkRujukan'];

                    $insertSEP->setAsalRujukan($asalRujukan);
                    $insertSEP->setTglRujukan($tglRujukan);
                    $insertSEP->setNoRujukan($noRujukan);
                    $insertSEP->setPpkRujukan($ppkRujukan);

			$catatan = $_POST['catatan'];
			$diagAwal = $_POST['diagAwal'];

                    $insertSEP->setCatatan($catatan);
                    $insertSEP->setDiagAwal($diagAwal);

			$tujuan = $_POST['tujuan'];
			$eksekutif = $_POST['eksekutif'];

                    $insertSEP->setTujuan($tujuan);
                    $insertSEP->setEksekutif($eksekutif);

			$cob = $_POST['cob'];
					
					$insertSEP->setCob($cob);

			$katarak = $_POST['katarak'];

                    $insertSEP->setKatarak($katarak);

			$lakaLantas = $_POST['lakaLantas'];
			$noLP = $_POST['noLP'];
			$tglKejadian = $_POST['tglKejadian'];
			$keterangan = $_POST['keterangan'];
			$suplesi = $_POST['suplesi'];
			$noSepSuplesi = $_POST['noSepSuplesi'];
			$kdPropinsi = $_POST['kdPropinsi'];
			$kdKabupaten = $_POST['kdKabupaten'];
			$kdKecamatan = $_POST['kdKecamatan'];

                    $insertSEP->setLakaLantas($lakaLantas);
					$insertSEP->setNoLP($noLP);
                    $insertSEP->setTglKejadian($tglKejadian);
                    $insertSEP->setKeterangan($keterangan);
                    $insertSEP->setSuplesi($suplesi);
                    $insertSEP->setNoSepSuplesi($noSepSuplesi);
                    $insertSEP->setKdPropinsi($kdPropinsi);
                    $insertSEP->setKdKabupaten($kdKabupaten);
                    $insertSEP->setKdKecamatan($kdKecamatan);

			$tujuanKunj=$_POST['tujuanKunj'];
			$flagProcedure=$_POST['flagProcedure'];
			$kdPenunjang=$_POST['kdPenunjang'];
			$assesmentPel = $_POST['assesmentPel'];
			$noSurat = $_POST['noSurat'];
			$kodeDPJP = $_POST['kodeDPJP'];

                    $insertSEP->setNoSurat($noSurat);
                    $insertSEP->setKodeDPJP($kodeDPJP);
					$insertSEP->setTujuanKunj($tujuanKunj);
                    $insertSEP->setFlagProcedure($flagProcedure);
					$insertSEP->setKdPenunjang($kdPenunjang);
                    $insertSEP->setAssesmentPel($assesmentPel);

			$dpjpLayan = $_POST['dpjpLayan'];
			$noTelp = $_POST['noTelp'];
			$userSEP = $_POST['userSEP'];

					$insertSEP->setDpjpLayan($dpjpLayan);
					$insertSEP->setNoTelp($noTelp);
                    $insertSEP->setUser($userSEP);

			$resultJSON = $insertSEP->convertJSON();
			echo $resultJSON;
			$url = "https://apijkn-dev.bpjs-kesehatan.go.id/vclaim-rest-dev/SEP/2.0/insert";
			$sendSEPJSON= new Encoded($url);
			$sent = $sendSEPJSON->postJSON($resultJSON);
			echo $sent;
		}
	?>
        
    
        
			

		