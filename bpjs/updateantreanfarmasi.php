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
                <div style="padding-top:40px;color:#7209b7;font-size:32px;">UPDATE ANTREAN  FARMASI</div>
                
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
                        <option value="5">1. Akhir Waktu Tunggu Poli / Mulai Waktu Tunggu Farmasi</option>
                        <option value="6">2. Akhir Waktu Tunggu Farmasi / Mulai Waktu Layan Obat</option>
                        <option value="7">3. Akhir Waktu Obat Selesai Dibuat</option>
                        <option value="99">99. Tidak Hadir / BATAL</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Waktu</span>
                    </div>
                    <input type="text" class="form-control" id="waktu" aria-describedby="basic-addon3" value="<?php echo strtotime($date)*1000; ?>" readonly>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Jenis Resep</span>
                    </div>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="jenisresep">
                        <option value=" " selected>Please Choose..</option>
                        <option value="racikan">1. RACIKAN</option>
                        <option value="non racikan">2. NON RACIKAN</option>
                    </select>
                </div>

                
                <div>
                    <div class="row justify-content-center">
                        <div class="col"></div>
                        <div class="col"><button class="btn btn-success" id="btninsert">Update Antrean Farmasi</button></div>
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
                    <div id="tablesearch">
                    <div id="tablesearch">
                        <?php include('getlistid.php');?>
                    </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</body>

</html>
<script src="../assets/scripts/js/updateantreanfarmasi.js"></script>