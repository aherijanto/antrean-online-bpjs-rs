<?php
	date_default_timezone_set("Asia/Jakarta");
	error_reporting(E_ALL);
    ini_set("display_errors","On");
	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/
   
	include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/ajax/encoded.php';
    
	if($_POST['kodedokter']){
        $url = 'https://apijkn-dev.bpjs-kesehatan.go.id/antreanrs_dev/ref/dokter';    
        ///jadwaldokter/kodepoli/{Parameter1}/tanggal/{Parameter2}      	
        $dokter = new Encoded($url);//
        $dokter->setInit();
    
        if($dokter->populateResponse()!=null){
            $resp = json_decode($dokter->populateResponse(),true);
            $kodedokter = $_POST['kodedokter'];
            $result = array();
            $resultarray=array();
        
            foreach ($resp as $item) {
                if ($item['kodedokter'] === (int)$kodedokter) {
                        $result = array('kodedokter'=>$item['kodedokter'],'namadokter'=>$item['namadokter']); 
                        array_push($resultarray,$result);
                    }                      
            }        

            $no=0;            
                $table = "<table class='table'>
                                    <thead>
                                    <th>NO</th>
                                        <th>KODE DOKTER</th>
                                        <th>NAMA DOKTER</th>
                                        
                                    </thead>";
                $table.="<tbody>";
                        foreach($resultarray as $dktr){
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
