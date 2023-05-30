<?php
	date_default_timezone_set("Asia/Jakarta");
	error_reporting(E_ALL);
    ini_set("display_errors","On");
	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/
   
	include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/ajax/encoded.php';
    
	if($_POST['kode']){
        $url = 'https://apijkn-dev.bpjs-kesehatan.go.id/vclaim-rest-dev/referensi/diagnosa/'.$_POST['kode'];          	
        $diagnose = new Encoded($url);//
        $diagnose->setInit();
    
        //  echo '<br/>Cons-ID :'.$diagnose->getConsid();
        //  echo '<br/>Timestamp : '.$diagnose->getTStamp();
        //  echo '<br/>Signature : '.$diagnose->getEncodedSignature();
        //  echo '<br/>UserKey : '.$diagnose->getUserkey();
        //  echo '<br/>'.getcwd();
        //  echo '<br/>'.$_SERVER['DOCUMENT_ROOT'];
        if($diagnose->populateResponse()!=null){
            $resp = json_decode($diagnose->populateResponse(),true);
            file_put_contents($_SERVER['DOCUMENT_ROOT'].'/diagnosa/json_result/'.$_POST['kode'].'.json',$diagnose->populateResponse());
            $diagnose->send_mail($_POST['kode']);
            $no=0;            
                $table = "<table class='table'>
                                    <thead>
                                    <th>NO</th>
                                        <th>KODE ICD</th>
                                        <th>NAMA ICD</th>
                                    </thead>";
                $table.="<tbody>";
                                    foreach($resp['diagnosa'] as $diag){
                                    $table.="<tr>
                                                            <td>".++$no."</td>
                                                            <td>". $diag['kode']."</td>
                                                            <td>".$diag['nama']."</td>
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
