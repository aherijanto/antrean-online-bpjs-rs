<?php
	date_default_timezone_set("Asia/Jakarta");
	error_reporting(E_ALL);
    ini_set("display_errors","On");
	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/
   
	include  $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/ajax/encoded.php';
    
	if($_POST['kodepoli']){
        $kodepoli = $_POST['kodepoli'];
        $tanggal = $_POST['tanggalpoli'];
        $url = 'https://apijkn-dev.bpjs-kesehatan.go.id/antreanrs_dev/jadwaldokter/kodepoli/'.$kodepoli.'/tanggal/'.$tanggal;    
        ///jadwaldokter/kodepoli/{Parameter1}/tanggal/{Parameter2}   
           	
        $jadwal = new Encoded($url);//
        $jadwal->setInit();
    
        //  echo '<br/>Cons-ID :'.$jadwal->getConsid();
        //  echo '<br/>Timestamp : '.$jadwal->getTStamp();
        //  echo '<br/>Signature : '.$jadwal->getEncodedSignature();
        //  echo '<br/>UserKey : '.$jadwal->getUserkey();
        //  echo '<br/>'.getcwd();
        //  echo '<br/>'.$_SERVER['DOCUMENT_ROOT'];
        if($jadwal->populateResponse()!=null){
            $resp = json_decode($jadwal->populateResponse(),true);
            $no=0;            
                $table = "<table class='table table-hover no-cellpadding w-auto small'>
                                    <thead>
                                    <th>NO</th>
                                        <th>KODE DOKTER</th>
                                        <th>NAMA DOKTER</th>
                                        <th>KODE POLI</th>
                                        <th>NAMA POLI</th>
                                        <th>KODE SPESIALIS</th>
                                        <th>NAMA SPESIALIS</th>
                                        <th>HARI PRAKTEK</th>
                                        <th>WAKTU PRAKTEK</th>
                                        <th>MAX PASIEN</th>
                                    </thead>";
                $table.="<tbody>";
                                    foreach($resp as $jdwl){
                                    $table.="<tr>
                                                            <td>".++$no."</td>
                                                            <td>". $jdwl['kodedokter']."</td>
                                                            <td>".$jdwl['namadokter']."</td>
                                                            <td>".$jdwl['kodepoli']."</td>
                                                            <td>".$jdwl['namapoli']."</td>
                                                            
                                                            <td>".$jdwl['kodesubspesialis']."</td>
                                                            <td>".$jdwl['namasubspesialis']."</td>
                                                            <td>".$jdwl['namahari']."</td>
                                                            <td>".$jdwl['jadwal']."</td>
                                                            <td>".$jdwl['kapasitaspasien']."</td>
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
