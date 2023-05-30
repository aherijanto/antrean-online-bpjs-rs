<?php

	date_default_timezone_set("Asia/Jakarta");
	error_reporting(E_ALL);
ini_set("display_errors","On");
	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/
	include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/ajax/encoded.php';

	if($_POST['layanan']){
                    ///Monitoring/Kunjungan/Tanggal/{Parameter 1}/JnsPelayanan/{Parameter 2}
					$url = "https://apijkn-dev.bpjs-kesehatan.go.id/vclaim-rest-dev/Monitoring/Kunjungan/Tanggal/".$_POST['tgl']."/JnsPelayanan/".$_POST['layanan'];//3376014906640002/tglSEP/2023-01-23";
                	$nik = new Encoded($url);
					$nik->setInit();
					$resp = json_decode($nik->populateResponse(),true);
                	
           
		// if($resp!=null){
		// 	$table = "<table class='table'>
		// 						<thead>
		// 							<th>CARD NO</th>
		// 							<th>NIK</th>
		// 							<th>NAME</th>
		// 							<th>GENDER</th>
		// 							<th>PISA</th>

		// 							<th>STRATA</th>
		// 							<th>CODE</th>

		// 						</thead>";
		// 	$table.="<tbody>
		// 						<tr>
		// 							<td>".$resp['peserta']['noKartu']."</td>
		// 							<td>".$resp['peserta']['nik']."</td>
		// 							<td>".$resp['peserta']['nama']."</td>
		// 							<td>".$resp['peserta']['sex']."</td>
		// 							<td>".$resp['peserta']['pisa']."</td>
		// 							<td>".$resp['peserta']['hakKelas']['keterangan']."</td>
		// 							<td>".$resp['peserta']['hakKelas']['kode']."</td>
		// 						</tr>
		// 					</tbody>";
		// 	$table.="</table>";
			echo $resp;
		}
        
    
        
			// $conn2 = mysqli_connect('localhost','mimj5729_myroot','myroot@@##','mimj5729_company');
			// $result = mysqli_query($conn2,"select * from wcompany where code = '$custid';");
			// if(!$result){
			// 	die();
			// 	echo 'noresult';
			// }else{
			// 	$jumrec=mysqli_num_rows($result);
			// }
			

			// if($jumrec>0){
			// 	$record = mysqli_fetch_array($result);
			// 	$arr = array('id' => $record["code"],
			// 				 'nm' => $record["name"],
			// 				 'addr1' => $record["address1"],
			// 				 'addr2' => $record["address2"],
			// 				 'city' => $record["city"],
			// 				 'phone' => $record["phone"],
			// 				 'email' => $record["email"]
			// 				 );
			// }
			// else{
			// 	$arr = array('id' => '0',
			// 				 'nm' => '',
			// 				 'spc'=> '',
			// 				 'addr' => '',
			// 				 'phone' => '',
			// 				 'city' => ''
			// 				 );
			// }

			// echo json_encode( $arr );
	
?>
