<?php
	date_default_timezone_set("Asia/Jakarta");
	error_reporting(E_ALL);
    ini_set("display_errors","On");
	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/
   
	include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/ajax/encoded.php';
    
	if($_POST['kode']){
        $url = 'https://apijkn-dev.bpjs-kesehatan.go.id/antreanrs_dev/ref/poli';          	
        $poli = new Encoded($url);//
        $poli->setInit();
        if($poli->populateResponse()!=null){
            $resp = json_decode($poli->populateResponse(),true);
            $no=0;            
                $table = "<table class='table'>
                                    <thead>
                                    <th>NO</th>
                                        <th>NAMA POLI</th>
                                        <th>SUBSPESIALIS</th>
                                        <th>KODE SUBSPESIALIS</th>
                                        <th>KODE POLI</th>
                                    </thead>";
                $table.="<tbody>";
                                    foreach($resp as $diag){
                                    $table.="<tr>
                                                            <td>".++$no."</td>
                                                            <td>". $diag['nmpoli']."</td>
                                                            <td>".$diag['nmsubspesialis']."</td>
                                                            <td>".$diag['kdsubspesialis']."</td>
                                                            <td>".$diag['kdpoli']."</td>
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
