<?php
	date_default_timezone_set("Asia/Jakarta");
	error_reporting(E_ALL);
    ini_set("display_errors","On");
	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/
   
	include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/ajax/encoded.php';
    
	if($_POST['kodepoli']){
        $url = 'https://apijkn-dev.bpjs-kesehatan.go.id/antreanrs_dev/ref/poli';          	
        $poli = new Encoded($url);//
        $poli->setInit();
        if($poli->populateResponse()!=null){
            $resp = json_decode($poli->populateResponse(),true);
            //var_dump($resp);
            
            $kodepoli = $_POST['kodepoli'];

            $result = array();
            $resultarray=array();
        
            foreach ($resp as $item) {
                if ($item['kdpoli'] === strtoupper($kodepoli)) {
                        $result = array('kodepoli'=>$item['kdpoli'],'namapoli'=>$item['nmpoli'],'kdsubspesialis'=>$item['kdsubspesialis'],'nmsubspesialis'=>$item['nmsubspesialis']); 
                        array_push($resultarray,$result);
                    }                      
            }        
                                    foreach($resultarray as $diag){
                                    $table.="<tr>
                                                            <td>".++$no."</td>
                                                            <td>".$diag['namapoli']."</td>
                                                            <td>".$diag['nmsubspesialis']."</td>
                                                            <td>".$diag['kdsubspesialis']."</td>
                                                            <td>".$diag['kodepoli']."</td>
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
