<?php
    session_start();
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
?>

<body>
    <div class="row">
        <div class="col-sm-6">
            <div class="card ml-4 p-3">
                <div style="padding-top:40px;color:#7209b7;font-size:32px;">INSERT ANTREAN FARMASI</div>
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Kode Booking</span>
                    </div>
                    <input type="text" class="form-control" id="kodebooking" aria-describedby="basic-addon3">
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

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">No. Antrean</span>
                    </div>
                    <input type="text" class="form-control" id="nomorantrean" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Keterangan</span>
                    </div>
                    <input type="text" class="form-control" id="keterangan" aria-describedby="basic-addon3">
                </div>

                <div>
                    <div class="row justify-content-center">
                        <div class="col"></div>
                        <div class="col"><button class="btn btn-success" id="btninsert">Add Antrean</button></div>
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
<script src="../assets/scripts/js/addantreanfarmasi.js"></script>