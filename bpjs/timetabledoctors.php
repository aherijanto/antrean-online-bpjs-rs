<?php
session_start();
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
require_once('../assets/requires/config.php');
require_once('../assets/requires/headerdshbd.php');
require_once('topmenu.php');
?>

<body class="container">
    <div style="padding-top:40px;color:#7209b7;font-size:32px;">REFERENSI JADWAL DOKTER BPJS</div>
    
    <div class="input-group mb-3">
  
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">Masukan Kode Poli</span>
        </div>
        <input type="text" class="form-control" id="kodepoli" aria-describedby="basic-addon3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">Masukan Tanggal</span>
        </div>
        <input type="date" class="form-control" id="tanggal" aria-describedby="basic-addon3">
    </div>
   

    <div>
        <div class="row justify-content-center">
            <div class="col-4"></div>
            <div class="col-4"><button class="btn btn-primary float-right" id="btnjadwal">Cari Jadwal</button></div>
            <div class="col-4"></div>
            <div class="col-4"></div>
        </div>
    </div>
    <div class="mt-4" id="tabeldetail"></div>
    
</body>

</html>
<script src="../assets/scripts/js/jadwaldoktermf.js"></script>