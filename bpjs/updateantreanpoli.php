<?php
    session_start();
    //ANNISAA00345
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        span{
            width: 220px;
            
           
        }
        </style>
</head>
//ANN202305090001
<?php
    require_once('../assets/requires/config.php');
    require_once('../assets/requires/headerdshbd.php');
    require_once('topmenu.php');
    $date = date('m/d/Y h:i:s a', time());
?>

<body>
    <div class="row">
        <div class="col-sm-6">
            <div class="card ml-4 p-3">
                <div style="padding-top:40px;color:#7209b7;font-size:32px;">UPDATE ANTREAN POLI</div>
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Kode Booking</span>
                    </div>
                    <input type="text" class="form-control" id="kodebooking" aria-describedby="basic-addon3">
                </div>


                <!-- Need Validate PASIEN BARU  ATAU PASIEN LAMA
                    THIS VERSION is bypassing 
                -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Status</span>
                    </div>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="taskid">
                        <option value=" " selected>Please Choose..</option>
                        <option value="4">1. Akhir Waktu Tunggu Poli / Mulai Waktu Layan Poli</option>
                        <option value="5">2. Akhir Waktu Layan Poli / Mulai Waktu Tunggu Farmasi</option>
                        <option value="99">99. Tidak Hadir / BATAL</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Waktu</span>
                    </div>
                    <input type="text" class="form-control" id="waktu" value="<?php echo strtotime($date)*1000; ?>" aria-describedby="basic-addon3">
                </div>

                <div>
                    <div class="row justify-content-center">
                        <div class="col"></div>
                        <div class="col"><button class="btn btn-success" id="btninsert">Update Antrean Admisi</button></div>
                        <div class="col"></div>
                    </div>
                </div>
                <div class="mt-4" id="tabeldetail"></div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Search Detail</h5>
                    <div id="tablesearch"></div>
                </div>
            
            </div>
        </div>
    </div>
</body>

</html>
<script src="../assets/scripts/js/updateantreanpoli.js"></script>