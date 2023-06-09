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
   
?>

<body>
    <div style="padding-top:40px;color:#7209b7;font-size:32px;">REFERENSI DOKTER BPJS</div>
    
    <div class="input-group mb-3">
  
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">Masukan Kode/Nama Dokter</span>
        </div>
        <input type="text" class="form-control" id="kodedokterref" aria-describedby="basic-addon3">
    </div>
   

    <div>
        <div class="row justify-content-center">
            <div class="col-4"></div>
            <div class="col-4"><button class="btn btn-primary float-right" id="btndokter">Cari Dokter</button></div>
            <div class="col-4"></div>
            <div class="col-4"></div>
        </div>
    </div>
    <div class="mt-4" id="tabeldetaildoctors"></div>
    
</body>

</html>
<script src="../assets/scripts/js/doktermf.js"></script>