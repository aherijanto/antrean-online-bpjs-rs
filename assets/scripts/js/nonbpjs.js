/*-----------------------------------------
Created by  : Ary H 
Project     : ANTREAN ONLINE
Date        : MAY 4,2023
-----------------------------------------*/
function _kodebooking(){
    var mydate = new Date();
    var _year = mydate.getFullYear();
    var _month = (mydate.getMonth()+ 1).toString().padStart(2, "0");
    var _date = mydate.getDate().toString().padStart(2, "0");
    var _randomNumber = Math.floor(Math.random()*90000) + 10000;
    console.log(_year+_month+_date+'.'+_randomNumber);
    return 'BOOK'+_year+_month+_date+'.'+_randomNumber;
}
//main
$(document).ready(function () {
    var flag='new';
    
    var kodedokter;
    var namadokter;
    var jampraktek;
    var kodebooking = _kodebooking();
    console.log(kodebooking);

    $("#tanggalperiksa").val(new Date().toISOString().split('T')[0]);
    

    // $("#nik").click(function(){
    //     $('#tablesearch').load('http://vclaim.klinik-annisaa.local/peserta/index.php');
    //    // $('#tablesearch').children('topmenu1').css('visibility','hidden');
    // });
    // $("#nik").focus(function(){
    //     $('#tablesearch').load('http://vclaim.klinik-annisaa.local/peserta/index.php');
    //    // $('#tablesearch').children('topmenu1').css('visibility','hidden');
    // });

    // $('#kodepoli').click(function(){
    //     $('#tablesearch').load('poli.php');
    // })

    // $('#kodepoli').focus(function(){
    //     $('#tablesearch').load('poli.php');
    // })

    // $('#kodedokter').focus(function(){
    //     $('#tablesearch').load('timetabledoctors.php');
    // })
    // $('#kodedokter').click(function(){
    //     $('#tablesearch').load('timetabledoctors.php');
    // })
    
    $('#kodepoli').change(function(){
        var kodeparam = $(this).val();
        console.log(kodeparam);
        $.ajax({
            type: "POST",
            url: "../assets/scripts/ajax/refdokter.php",
            data: "kodepoli=" + kodeparam +
                "&tanggalpoli=" + $('#tanggalperiksa').val() ,
            success: function (response) {
                $("#tabeldetail").html("");
                $("#tabeldetail").html(response);
                $("#tabeldetail").show();
                var jsonData = $.parseJSON(response); 
                $(jsonData).each(function (i, val) {
                    var selectelement = $('#kodedokter');
                    selectelement.empty();
                    selectelement.append($('<option>').text(val.namadokter).attr('value',val.kodedokter));
                    kodedokter = val.kodedokter;
                    namadokter = val.namadokter;
                    jampraktek = val.jadwal;
                    console.log(kodedokter+' '+namadokter+' '+jampraktek);

                })
            }
        });
    })
         
        $("#btninsert").click(function(){
            var namapoli;
           
            var jenispasien = "NON JKN";//$("#jenispasien").val();
            var nomorkartu = "0";//$("#nomorkartu").val();
            var nik = $("#nik").val();
            var nohp = $("#nohp").val();
            var kodepoli = $("#kodepoli").val();
            switch (kodepoli) {
                case "ANA":
                    namapoli = "ANAK";
                    break;
                case "GIG":
                    namapoli = "GIGI";
                    break;
                case "OBG":
                    namapoli = "OBGYN";
                    break;
                case "INT":
                    namapoli = "PENYAKIT DALAM";
                    break;
                case "UMU":
                    namapoli = "UMUM";
                    break;
            }
            
            var pasienbaru ="0";// $("#pasienbaru").val();
            var norm = $("#norm").val();
            var tanggalperiksa = $("#tanggalperiksa").val();
            var jeniskunjungan = '2';$("#jeniskunjungan").val();
            var nomorreferensi = $("#nomorreferensi").val();
            var nomorantrean = $("#nomorantrean").val();
            var angkaantrean = $("#angkaantrean").val();
            var estimasidilayani = $("#estimasidilayani").val();
            var sisakuotajkn = $("#sisakuotajkn").val();
            var kuotajkn = $("#kuotajkn").val();
            var sisakuotanonjkn = $("#sisakuotanonjkn").val();
            var kuotanonjkn= $("#kuotanonjkn").val();
            var keterangan = $("#keterangan").val();
           
          
            //check logging
            console.log(kodebooking);
            console.log(jenispasien); 
            console.log(nomorkartu); 
            console.log(nik);
            console.log(nohp); 
            console.log(kodepoli); 
            console.log(namapoli); 
            console.log(pasienbaru); 
            console.log(norm);
            console.log(tanggalperiksa); 
            console.log(kodedokter); 
            console.log(namadokter); 
            console.log(jampraktek);
            console.log(jeniskunjungan);
            console.log(nomorreferensi);
            console.log(nomorantrean);
            console.log(angkaantrean); 
            console.log(estimasidilayani);
            console.log(sisakuotajkn);
            console.log(kuotajkn); 
            console.log(sisakuotanonjkn);
            console.log(kuotanonjkn);
            console.log(keterangan); 
            
          $.ajax({
                type: "POST",
                url: "../assets/scripts/ajax/nonbpjs.php",
                data: "kodebooking=" +  kodebooking +
                         "&jenispasien=" + jenispasien +
                         "&nomorkartu=" + nomorkartu +
                         "&nik="+ nik +
                         "&nohp=" + nohp +
                         "&kodepoli=" + kodepoli +
                         "&namapoli=" + namapoli +
                         "&pasienbaru=" + pasienbaru +
                         "&norm=" + norm +
                         "&tanggalperiksa=" + tanggalperiksa +
                         "&kodedokter=" + kodedokter +
                         "&namadokter=" + namadokter +
                         "&jampraktek=" + jampraktek +
                         "&jeniskunjungan=" + jeniskunjungan +
                         "&nomorreferensi=" + nomorreferensi +
                         "&nomorantrean=" + nomorantrean + 
                         "&angkaantrean=" + angkaantrean +
                         "&estimasidilayani=" + estimasidilayani +
                         "&sisakuotajkn=" + sisakuotajkn +
                         "&kuotajkn=" + kuotajkn +
                         "&sisakuotanonjkn=" + sisakuotanonjkn +
                         "&kuotanonjkn=" + kuotanonjkn +
                         "&keterangan=" + keterangan,
                         
                
                success: function (response) {
                    console.log(response);
                    $("#tabeldetail").html("");
                    $("#tabeldetail").html(response);
                    $("#tabeldetail").show();
                }
            });
        })
});
