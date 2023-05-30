<?php
	date_default_timezone_set("Asia/Jakarta");
	error_reporting(E_ALL);
    ini_set("display_errors","On");
	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/
	
	if($_POST){
        
			$kodebooking = $_POST['kodebooking'];
			$jenispasien = $_POST['jenispasien'];
			$nomorkartu = $_POST['nomorkartu'];
			$nik= $_POST['nik'];
			$nohp = $_POST['nohp'];
			$kodepoli = $_POST['kodepoli'];
			$namapoli = $_POST['namapoli'];
			$pasienbaru = $_POST['pasienbaru'];
			$norm= $_POST['norm'];
					

			$tanggalperiksa = $_POST['tanggalperiksa'];
			$kodedokter = $_POST['kodedokter'];
			$namadokter = $_POST['namadokter'];
			$jampraktek = $_POST['jampraktek'];

                    

			$jeniskunjungan = $_POST['jeniskunjungan'];
			$nomorreferensi = $_POST['nomorreferensi'];

                    
			$nomorantrean = $_POST['nomorantrean'];
			$angkaantrean = $_POST['angkaantrean'];
            
			$estimasidilayani = $_POST['estimasidilayani']/1000;
            $estimasidilayani = date('Y-m-d H:i:s',$estimasidilayani);
			$sisakuotajkn = $_POST['sisakuotajkn'];
			$kuotajkn = $_POST['kuotajkn'];
			$sisakuotanonjkn = $_POST['sisakuotanonjkn'];
			$kuotanonjkn = $_POST['kuotanonjkn'];
			$keterangan = $_POST['keterangan'];

            $con = mysqli_connect("localhost","mimj5729_myroot","myroot@@##","kliz7334_antrean");
            $query_save = "INSERT INTO nonbpjs
                            (kodebooking,jenispasien,nomorkartu,nik,nohp,kodepoli,namapoli,pasienbaru,
                            norm,tanggalperiksa,kodedokter,namadokter,jampraktek,jeniskunjungan,nomorreferensi,
                            nomorantrean,angkaantrean,estimasidilayani,sisakuotajkn,kuotajkn,sisakuotanonjkn,kuotanonjkn,
                            keterangan) VALUES ('$kodebooking','$jenispasien','$nomorkartu','$nik','$nohp','$kodepoli','$namapoli','$pasienbaru','$norm','$tanggalperiksa','$kodedokter','$namadokter','$jampraktek','$jeniskunjungan','$nomorreferensi','$nomorantrean','$angkaantrean','$estimasidilayani','$sisakuotajkn','$kuotajkn','$sisakuotanonjkn','$kuotanonjkn','$keterangan')";
            $countquery = mysqli_query($con,$query_save);
            if($countquery){
                echo 'saveok';
            }else{
                echo 'failed';
            }
			
		}
	?>
        
    
        
			

		