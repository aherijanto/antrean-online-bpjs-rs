<?php

	date_default_timezone_set("Asia/Jakarta");
	error_reporting(E_ALL);
ini_set("display_errors","On");
	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/
	include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/ajax/encoded.php';

	if($_POST['status']){
        switch ($_POST['status']){
            case 'nik':
					$url = "https://apijkn-dev.bpjs-kesehatan.go.id/vclaim-rest-dev/Peserta/nik/".$_POST['nik']."/tglSEP/".$_POST['tgl'];//3376014906640002/tglSEP/2023-01-23";
                	
					$nik = new Encoded($url);
					$nik->setInit();
					$resp = json_decode($nik->populateResponse(),true);
                	break;
            case 'kartu':
                	$url="https://apijkn-dev.bpjs-kesehatan.go.id/vclaim-rest-dev/Peserta/nokartu/".$_POST['kartu']."/tglSEP/".$_POST['tgl'];//0000627675625/tglSEP/2023-01-22";
					
					$card = new Encoded($url);
					$card->setInit();
					$resp = json_decode($card->populateResponse(),true);
					
					break;
        }
		if($resp!=null){
			$statusP = $resp['peserta']['statusPeserta']['keterangan'];
			if($statusP=='AKTIF'){
				$showP = '<td align="center" style="background-color:green;color:white;">'.$statusP.'</td>';
			}else{
				$showP = '<td align="center" style="background-color:red;color:white;">'.$statusP.'</td>';
			}
			$table = "<table class='table'>
								<thead>
									<th>CARD NO</th>
									<th>NIK</th>
									<th>NAME</th>
									<th>GENDER</th>
									<th>PISA</th>
									<th>STRATA</th>
									<th>CODE</th>
									<th>STATUS</th>
								</thead>";
			$table.="<tbody>
								<tr>
									<td>".$resp['peserta']['noKartu']."</td>
									<td>".$resp['peserta']['nik']."</td>
									<td>".$resp['peserta']['nama']."</td>
									<td>".$resp['peserta']['sex']."</td>
									<td>".$resp['peserta']['pisa']."</td>
									<td>".$resp['peserta']['hakKelas']['keterangan']."</td>
									<td>".$resp['peserta']['hakKelas']['kode']."</td>".$showP."
								</tr>
							</tbody>";
			$table.="</table>";
			echo $table;
		}

    }
        
		
?>
