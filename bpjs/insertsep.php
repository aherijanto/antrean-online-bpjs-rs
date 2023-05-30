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
?>

<body class="container">
    <div style="padding-top:40px;color:#7209b7;font-size:32px;">INSERT SEP</div>
    
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">No. Kartu</span>
        </div>
        <input type="text" class="form-control" id="noKartu" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Tanggal SEP</span>
        </div>
        <input type="date" class="form-control" id="tglSep" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">PPK Pelayanan</span>
        </div>
        <input type="text" class="form-control" id="ppkPelayanan" value="00168S001" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Jenis Layanan</span>
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="jnsPelayanan">
            <option value=" " selected>Please Choose..</option>
            <option value="1">1. Rawat Inap</option>
            <option value="2">2. Rawat Jalan</option>
        </select>

        <div class="input-group-prepend ml-5">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Kelas Rawat</span>
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="klsRawatHak">
            <option value=" " selected>Please Choose..</option>
            <option value="1">1. Kelas 1</option>
            <option value="2">2. Kelas 2</option>
            <option value="3">3. Kelas 3</option>
        </select>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Naik Kelas Rawat</span>
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="klsRawatNaik">
            <option value="" selected>Please Choose..</option>
            <option value="1">1. VVIP</option>
            <option value="2">2. VIP</option>
            <option value="3">3. Kelas 1</option>
            <option value="4">4. Kelas 2</option>
            <option value="5">5. Kelas 3</option>
            <option value="6">6. ICCU</option>
            <option value="7">7. ICU</option>
        </select>

        <div class="input-group-prepend ml-5">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Pembiayaan</span>
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="pembiayaan">
            <option value="" selected>Please Choose..</option>
            <option value="1">1. Pribadi</option>
            <option value="2">2. Pemberi Kerja</option>
            <option value="3">3. Asuransi Kesehatan Tambahan</option>
        </select>
    
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Penanggung Jawab</span>
        </div>
        <input type="text" class="form-control" id="penanggungJawab" aria-describedby="basic-addon3"  value="">
    </div>
    

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">No MR</span>
        </div>
        <input type="text" class="form-control" id="noMR" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white " id="basic-addon3">Asal Rujukan</span>
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="asalRujukan">
            <option value=" " selected>Please Choose..</option>
            <option value="1">1. Faskes 1</option>
            <option value="2">2. Faskes 2 (RS)</option>
        </select>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Tgl Rujukan</span>
        </div>
        <input type="date" class="form-control" id="tglRujukan" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">No Rujukan</span>
        </div>
        <input type="text" class="form-control" id="noRujukan" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Kode Faskes Rujukan</span>
        </div>
        <input type="text" class="form-control" id="ppkRujukan" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Catatan</span>
        </div>
        <input type="text" class="form-control" id="catatan" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Diagnosa Awal</span>
        </div>
        <input type="text" class="form-control" id="diagAwal" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Tujuan</span>
        </div>
        <input type="text" class="form-control" id="tujuan" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Eksekutif</span>
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="eksekutif">
            <option value=" " selected>Please Choose..</option>
            <option value="0">0. Tidak</option>
            <option value="1">1. Ya</option>
        </select>

        <div class="input-group-prepend ml-5">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">COB</span>
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="cob">
            <option value=" "  selected>Please Choose..</option>
            <option value="0">0. Tidak</option>
            <option value="1">1. Ya</option>
        </select>
    </div>

   
   
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Katarak</span>
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="katarak">
            <option value=" " selected>Please Choose..</option>
            <option value="0">0. Tidak</option>
            <option value="1">1. Ya</option>
        </select>

        <div class="input-group-prepend ml-5">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Laka Lantas</span>
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="lakaLantas">
            <option value=" " selected>Please Choose..</option>
            <option value="0">0. Bukan Kecelakaan Lalu Lintas [BKLL]</option>
            <option value="1">1. KLL dan Bukan Kecelakaan Kerja [BKK]</option>
            <option value="2">2. KLL dan KK</option>
            <option value="3">3. KK</option>
        </select>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">No LP</span>
        </div>
        <input type="text" class="form-control" id="noLP" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Tgl Kejadian</span>
        </div>
        <input type="date" class="form-control" id="tglKejadian"  aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Keterangan</span>
        </div>
        <input type="text" class="form-control" id="keterangan" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Suplesi</span>
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="suplesi">
            <option value=" " selected>Please Choose..</option>
            <option value="0">0. Tidak</option>
            <option value="1">1. Ya</option>
        </select>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">No SEP Suplesi</span>
        </div>
        <input type="text" class="form-control" id="noSepSuplesi" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Kode Propinsi</span>
        </div>
        <input type="text" class="form-control" id="kdPropinsi" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Kode Kabupaten</span>
        </div>
        <input type="text" class="form-control" id="kdKabupaten" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Kode Kecamatan</span>
        </div>
        <input type="text" class="form-control" id="kdKecamatan" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Tujuan Kunjungan</span>
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="tujuanKunj">
            <option value=" " selected>Please Choose..</option>
            <option value="0">0. Normal</option>
            <option value="1">1. Prosedur</option>
            <option value="2">2. Konsul Dokter</option>
        </select>

        <div class="input-group-prepend ml-5">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Flag Prosedur</span>
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="flagProcedure">
            <option value="" selected>Please Choose..</option>
            <option value="0">1. Prosedur Tidak Berkelanjutan</option>
            <option value="1">2. Prosedur dan Terapi Berkelanjutan</option>
        </select>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Kode Penunjang</span>
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="kdPenunjang">
            <option value="" selected>Please Choose..</option>
            <option value="1">1. Radioterapi</option>
            <option value="2">2. Kemoterapi</option>
            <option value="3">3. Rehabilitasi Mediki</option>
            <option value="4">4. Rehabilitasi Psikososial</option>
            <option value="5">5. Transfusi Darah</option>
            <option value="6">6. Pelayanan Gigi</option>
            <option value="7">7. Laboratorium</option>
            <option value="8">8. USG</option>
            <option value="9">9. Farmasi</option>
            <option value="10">10. Lain-Lain</option>
            <option value="11">11. MRI</option>
            <option value="12">12. HEMODIALISA</option>

        </select>
    </div>

    <div class="input-group mb-3">
         <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Assesment</span>
        </div>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="assesmentPel">
            <option value="" selected>Please Choose..</option>
            <option value="1">1. Poli spesialis tidak tersedia hari sebelumnya</option>
            <option value="2">2. Jam poli telah berakhir hari sebelumnya</option>
            <option value="3">3. Dokter Spesialis yang dimaksud tidak praktek hari sebelumnya</option>
            <option value="4">4. Atas Instruksi RS</option>
            <option value="5">5. Tujuan Kontrol</option>
        </select>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">No Surat</span>
        </div>
        <input type="text" class="form-control" id="noSurat" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">Kode DPJP</span>
        </div>
        <input type="text" class="form-control" id="kodeDPJP" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">DPJP Layanan</span>
        </div>
        <input type="text" class="form-control" id="dpjpLayan" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-primary text-white" id="basic-addon3">No Telp</span>
        </div>
        <input type="text" class="form-control" id="noTelp" aria-describedby="basic-addon3">
    </div>

    <div>
        <div class="row justify-content-center">
            <div class="col"></div>
            <div class="col"><button class="btn btn-success" id="btninsert">Insert SEP</button></div>
            <div class="col"></div>
        </div>
    </div>
    <div class="mt-4" id="tabeldetail"></div>
    
</body>

</html>
<script src="../assets/scripts/js/sep.js"></script>