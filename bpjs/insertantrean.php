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
        $date = date('m/d/Y h:i:s a', time());
    ?>

<body>
    <div class="row">
        <div class="col-sm-6">
            <div class="card ml-4 p-3">
                <div style="padding-top:40px;color:#7209b7;font-size:32px;">INSERT ANTREAN</div>
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Kode Booking</span>
                    </div>
                    <input type="text" class="form-control" id="kodebooking" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Jenis Pasien</span>
                    </div>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="jenispasien">
                        <option value=" " selected>Please Choose..</option>
                        <option value="JKN">1. JKN</option>
                        <option value="NON JKN">2. NON JKN</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">No. Kartu BPJS</span>
                    </div>
                    <input type="text" class="form-control" id="nomorkartu" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">NIK</span>
                    </div>
                    <input type="text" class="form-control" id="nik" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">No. HP</span>
                    </div>
                    <input type="text" class="form-control" id="nohp" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Kode Poli</span>
                    </div>
                    <input type="text" class="form-control" id="kodepoli" aria-describedby="basic-addon3">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Nama Poli</span>
                    </div>
                    <input type="text" class="form-control" id="namapoli" aria-describedby="basic-addon3">
                
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Pasien Baru ?</span>
                    </div>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="pasienbaru">
                        <option value=" " selected>Please Choose..</option>
                        <option value="1">1. Ya</option>
                        <option value="0">0. Tidak</option>
                    </select>
                </div>
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white " id="basic-addon3">No. RM</span>
                    </div>
                    <input type="text" class="form-control" id="norm" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Tanggal Periksa</span>
                    </div>
                    <input type="date" class="form-control" id="tanggalperiksa" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white " id="basic-addon3">Kode Dokter</span>
                    </div>
                    <input type="text" class="form-control" id="kodedokter" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white " id="basic-addon3">Nama Dokter</span>
                    </div>
                    <input type="text" class="form-control" id="namadokter" aria-describedby="basic-addon3">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white " id="basic-addon3">Jam Praktek</span>
                    </div>
                    <input type="text" class="form-control" id="jampraktek" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Jenis Kunjungan</span>
                    </div>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="jeniskunjungan">
                        <option value=" " selected>Please Choose..</option>
                        <option value="1">1. Rujukan FKTP</option>
                        <option value="2">2. Rujukan Internal</option>
                        <option value="3">3. Kontrol</option>
                        <option value="4">4. Rujukan Antar RS</option>

                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white " id="basic-addon3">No. Referensi</span>
                    </div>
                    <input type="text" class="form-control" id="nomorreferensi" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white " id="basic-addon3">No. Antrean</span>
                    </div>
                    <input type="text" class="form-control" id="nomorantrean" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white " id="basic-addon3">Angka Antrean</span>
                    </div>
                    <input type="text" class="form-control" id="angkaantrean" aria-describedby="basic-addon3">
                </div>

                

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Estimasi Dilayani</span>
                    </div>
                    <input type="text" class="form-control" id="estimasidilayani" aria-describedby="basic-addon3" value="<?php echo strtotime($date)*1000;?>" readonly >
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Sisa Kuota JKN</span>
                    </div>
                    <input type="text" class="form-control" id="sisakuotajkn" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Kuota JKN</span>
                    </div>
                    <input type="text" class="form-control" id="kuotajkn" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Sisa Kuota Non JKN</span>
                    </div>
                    <input type="text" class="form-control" id="sisakuotanonjkn" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Kuota Non JKN</span>
                    </div>
                    <input type="number" class="form-control" id="kuotanonjkn" aria-describedby="basic-addon3">
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
                    <div id="tablesearch">

                    </div>
                </div>
            
            </div>
        </div>
    </div>
</body>

</html>
<script src="../assets/scripts/js/addantrean.js"></script>