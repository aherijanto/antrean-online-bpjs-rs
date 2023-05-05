<?php
	date_default_timezone_set("Asia/Jakarta");
	error_reporting(E_ALL);
    ini_set("display_errors","On");
	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/
   
	include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/ajax/encoded.php';
    
	if($_POST['kode']){
        $url = 'https://apijkn-dev.bpjs-kesehatan.go.id/antreanrs_dev/ref/dokter';    
        ///jadwaldokter/kodepoli/{Parameter1}/tanggal/{Parameter2}      	
        $dokter = new Encoded($url);//
        $dokter->setInit();
    
        //  echo '<br/>Cons-ID :'.$diagnose->getConsid();
        //  echo '<br/>Timestamp : '.$diagnose->getTStamp();
        //  echo '<br/>Signature : '.$diagnose->getEncodedSignature();
        //  echo '<br/>UserKey : '.$diagnose->getUserkey();
        //  echo '<br/>'.getcwd();
        //  echo '<br/>'.$_SERVER['DOCUMENT_ROOT'];
        if($dokter->populateResponse()!=null){
            $resp = json_decode($dokter->populateResponse(),true);
            $no=0;            
                $table = "<table class='table'>
                                    <thead>
                                    <th>NO</th>
                                        <th>KODE DOKTER</th>
                                        <th>NAMA DOKTER</th>
                                        
                                    </thead>";
                $table.="<tbody>";
                                    foreach($resp as $dktr){
                                    $table.="<tr>
                                                            <td>".++$no."</td>
                                                            <td>". $dktr['kodedokter']."</td>
                                                            <td>".$dktr['namadokter']."</td>
                                                        <tr>";
                                    }
                $table.="</tr>
                                </tbody>";
                $table.="</table>";
                echo $table;
        }else{
            echo 'Data Not Found...';
        }

    }
        
		
?>
