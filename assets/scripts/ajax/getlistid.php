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
			$getlistid = new GETLISTID();
			$getlistid->set_KODEBOOKING($kodebooking);
			$resultJSON = $getlistid->convertJSON();
			//echo $resultJSON;
			$url = "https://apijkn-dev.bpjs-kesehatan.go.id/antreanrs_dev/antrean/getlisttask";
			$sendANTREAN= new Encoded($url);
			$sent = $sendANTREAN->postJSON($resultJSON);
			
			$sendANTREAN->setContentDecode(json_decode($sent,true));
			
			if($sendANTREAN->populateResponse()!=null){
				$resultdecode = json_decode($sendANTREAN->populateResponse(),true);
				$no=0;            
					$table = "<table class='table w-auto small table-hover no-cellpadding'>
										<thead>
										<th>NO</th>
											<th>KODE BOOKING</th>
											<th>WAKTU RS</th>
											<th>WAKTU</th>
											<th>TASK ID</th>
											<th>TASK NAME</th>
											
										</thead>";
					$table.="<tbody>";
										foreach($resultdecode as $task){
										$table.="<tr>
													<td>".++$no."</td>
													<td>".$task['kodebooking']."</td>
													<td>". $task['wakturs']."</td>
													<td>".$task['waktu']."</td>
													<td>".$task['taskid']."</td>
													<td>".$task['taskname']."</td>
													
													
												<tr>";
										}
					$table.="</tr>
									</tbody>";
					$table.="</table>";
					echo $table;

			}
			
		}
	?>