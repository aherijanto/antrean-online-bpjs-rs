/*-----------------------------------------
Created by  : Ary H 
Project     : ANTREAN ONLINE
Date        : MAY 4,2023
-----------------------------------------*/
//BOOK20230529.26204
//BOOK20230529.76383
function _kodebooking(){
    var mydate = new Date();
    var _year = mydate.getFullYear();
    var _month = (mydate.getMonth()+ 1).toString().padStart(2, "0");
    var _date = mydate.getDate().toString().padStart(2, "0");
    var _randomNumber = Math.floor(Math.random()*90000) + 10000;
    console.log(_year+_month+_date+'.'+_randomNumber);
    return 'BOOK'+_year+_month+_date+'.'+_randomNumber;
}



function _nomorantrean(){
    let _numberQ;
    $.ajax({
        type: "POST",
        url: "../assets/scripts/ajax/_oops.php",
        data: "data=ary",
        success: function (response) {
            console.log('func'+response);
            var _angka = parseInt(response) + 1;
            $('#angkaantrean').val(_angka);
        }
    });
    
}

 
//main
$(document).ready(function () {
    var flag='new';
    var kodedokter;
    var namadokter;
    var jampraktek;
    var kodebooking = _kodebooking();
    var angkaantrean;
    var nomorantrean;
    //console.log(kodebooking);
    

    $("#tanggalperiksa").val(new Date().toISOString().split('T')[0]);
    //get angkaantrean
    $.ajax({
        type: "POST",
        url: "../assets/scripts/ajax/_oops.php",
        data: "data=ary",
        success: function (response) {
            console.log('func'+response);
            angkaantrean = parseInt(response) + 1;
            nomorantrean = 'NB'+angkaantrean;
        }
    });

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
                    //console.log(kodedokter+' '+namadokter+' '+jampraktek);

                })
            }
        });
    })
         
        $("#btninsert").click(function(){
            
            var namapoli;
            var jenispasien = "NON JKN";//$("#jenispasien").val();
            var nomorkartu = "0";//$("#nomorkartu").val();
            var nik = $("#nik").val();
            if(nik==''){
                swal({
                    title: "Lengkapi Data Input",
                    text: "Kolom NIK wajib diinput",
                    timer: 3000,
                    type: "error",
                    showConfirmButton: false
                });
                return false;
            }
                
           
            
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
            console.log(norm);
            if(norm ==' ' || norm =='0'){
                swal({
                    title: "Lengkapi Data Input",
                    text: "Kolom NO RM wajib diinput",
                    timer: 3000,
                    type: "error",
                    showConfirmButton: false
                });
                return false;
            }
            var tanggalperiksa = $("#tanggalperiksa").val();
            var jeniskunjungan = '2';$("#jeniskunjungan").val();
            var nomorreferensi = $("#nomorreferensi").val();
            
            
            var estimasidilayani = $("#estimasidilayani").val();
            var sisakuotajkn = 5;//$("#sisakuotajkn").val();
            var kuotajkn = 30;//$("#kuotajkn").val();
            var sisakuotanonjkn = 6;//$("#sisakuotanonjkn").val();
            var kuotanonjkn= 30;//$("#kuotanonjkn").val();
            var keterangan = 'Diharapkan datang 30 menit sebelumnya';//$("#keterangan").val();
           
          
            //check logging
            // console.log(kodebooking);
            // console.log(jenispasien); 
            // console.log(nomorkartu); 
            // console.log(nik);
            // console.log(nohp); 
            // console.log(kodepoli); 
            // console.log(namapoli); 
            // console.log(pasienbaru); 
             console.log('norm='+norm);
            // console.log(tanggalperiksa); 
            // console.log(kodedokter); 
            // console.log(namadokter); 
            // console.log(jampraktek);
            // console.log(jeniskunjungan);
            // console.log(nomorreferensi);
            // console.log(nomorantrean);
            // console.log('angka antrean : '+angkaantrean); 
            // console.log(estimasidilayani);
            // console.log(sisakuotajkn);
            // console.log(kuotajkn); 
            // console.log(sisakuotanonjkn);
            // console.log(kuotanonjkn);
            // console.log(keterangan); 
            
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
                   
                    $("#tabeldetail").html("");
                    $("#tabeldetail").html(response);
                    $("#tabeldetail").show();
                    var parsedJSON = JSON.parse(response);
                    var messages = (parsedJSON.metadata.message);
                    if(messages=='Ok.'){
                    
                        $.ajax({
                            type: "POST",
                            url: "../assets/scripts/ajax/savelocal.php",
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
                                     
                            success: function (responsesave) {
                                location.reload();
                                //console.log(response);
                                if(responsesave == 'saveok'){
                                    console.log('swal here');
                                    swal({
                                        title: "Penyimpanan Berhasil",
                                        text: "Data Antrean Non BPJS Berhasil Disimpan",
                                        timer: 3000,
                                        type: "success",
                                        showConfirmButton: false
                                    });
                                }
                            }
                        });
                    }
                }
            });
        })
});
