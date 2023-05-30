/*-----------------------------------------
Created by  : Ary H 
Project     : Inventory
Date        : January, 2022
-----------------------------------------*/

//main
$(document).ready(function () {
         //$("#tabeldetail").hide();
        
        $("#btninsert").click(function(){
            var noKartu = $("#noKartu").val();
            var tglSep = $("#tglSep").val();
            var ppkPelayanan = $("#ppkPelayanan").val();
            var jnsPelayanan = $("#jnsPelayanan").val();
            var klsRawatHak = $("#klsRawatHak").val();
            var klsRawatNaik = $("#klsRawatNaik").val();
            var pembiayaan = $("#pembiayaan").val();
            var penanggungJawab = $("#penanggungJawab").val();
            var noMR = $("#noMR").val();
            var asalRujukan = $("#asalRujukan").val();
            var tglRujukan = $("#tglRujukan").val();
            var noRujukan = $("#noRujukan").val();
            var ppkRujukan = $("#ppkRujukan").val();
            var catatan = $("#catatan").val();
            var diagAwal = $("#diagAwal").val();
            var tujuan = $("#tujuan").val();
            var eksekutif = $("#eksekutif").val();
            var cob = $("#cob").val();
            var katarak = $("#katarak").val();
            var lakaLantas = $("#lakaLantas").val();
            var noLP = $("#noLP").val();
            var tglKejadian= $("#tglKejadian").val();
            var keterangan = $("#keterangan").val();
            var suplesi = $("#suplesi").val();
            var noSepSuplesi = $("#noSepSuplesi").val();
            var kdPropinsi= $("#kdPropinsi").val();
            var kdKabupaten = $("#kdKabupaten").val();
            var kdKecamatan = $("#kdKecamatan").val();
            var tujuanKunj = $("#tujuanKunj").val();
            var flagProcedure = $("#flagProcedure").val();
            var kdPenunjang = $("#kdPenunjang").val();
            var assesmentPel = $("#assesmentPel").val();
            var noSurat = $("#noSurat").val();
            var kodeDPJP = $("#kodeDPJP").val();
            var dpjpLayan = $("#dpjpLayan").val();
            var noTelp = $("#noTelp").val();
            var userSEP = 'development'; //$("#userSEP").val();
          
            //check logging
           console.log(noKartu);
           console.log(tglSep); 
            console.log(ppkPelayanan); 
            console.log(jnsPelayanan);
            console.log(klsRawatHak); 
            console.log(klsRawatNaik); 
            console.log(pembiayaan); 
            console.log(penanggungJawab); 
            console.log(noMR);
            console.log(asalRujukan); 
            console.log(tglRujukan); 
            console.log( noRujukan); 
            console.log(ppkRujukan);
            console.log(catatan);
            console.log(diagAwal);
            console.log(tujuan);
            console.log(eksekutif); 
            console.log(cob);
            console.log(katarak);
            console.log(lakaLantas); 
           console.log(noLP);
            console.log(tglKejadian);
            console.log(keterangan); 
            console.log(suplesi);
            console.log(noSepSuplesi);
            console.log(kdPropinsi);
            console.log(kdKabupaten); 
            console.log(kdKecamatan);
            console.log(tujuanKunj); 
            console.log(flagProcedure); 
            console.log(kdPenunjang); 
            console.log(assesmentPel); 
            console.log(noSurat); 
            console.log(kodeDPJP); 
            console.log(dpjpLayan); 
            console.log( noTelp);
            console.log(userSEP); 
          $.ajax({
                type: "POST",
                url: "../assets/scripts/ajax/insertsep.php",
                data: "noKartu=" +  noKartu +
                         "&tglSep=" + tglSep +
                         "&ppkPelayanan=" + ppkPelayanan +
                         "&jnsPelayanan=" + jnsPelayanan +
                         "&klsRawatHak=" + klsRawatHak +
                         "&klsRawatNaik=" + klsRawatNaik +
                         "&pembiayaan=" + pembiayaan +
                         "&penanggungJawab=" + penanggungJawab +
                         "&noMR=" + noMR +
                         "&asalRujukan=" + asalRujukan +
                         "&tglRujukan=" + tglRujukan +
                         "&noRujukan=" + noRujukan +
                         "&ppkRujukan=" + ppkRujukan +
                         "&catatan=" + catatan +
                         "&diagAwal=" + diagAwal +
                         "&tujuan=" + tujuan +
                         "&eksekutif=" + eksekutif +
                         "&cob=" + cob +
                         "&katarak=" + katarak +
                         "&lakaLantas=" + lakaLantas +
                         "&noLP=" + noLP +
                         "&tglKejadian=" + tglKejadian +
                         "&keterangan=" + keterangan +
                         "&suplesi=" + suplesi +
                         "&noSepSuplesi=" + noSepSuplesi +
                         "&kdPropinsi=" + kdPropinsi +
                         "&kdKabupaten=" + kdKabupaten +
                         "&kdKecamatan=" + kdKecamatan +
                         "&tujuanKunj=" + tujuanKunj +
                         "&flagProcedure=" + flagProcedure +
                         "&kdPenunjang=" + kdPenunjang +
                         "&assesmentPel=" + assesmentPel +
                         "&noSurat=" + noSurat +
                         "&kodeDPJP=" + kodeDPJP +
                         "&dpjpLayan=" + dpjpLayan +
                         "&noTelp=" + noTelp +
                         "&userSEP=" + userSEP,
                
                success: function (response) {
                    console.log(response);
                    $("#tabeldetail").html("");
                    $("#tabeldetail").html(response);
                    $("#tabeldetail").show();
                }
            });
        })

        $("#btnklaim").click(function(){
            var layanan = $("#layanan").val();
            var dateme = $("#tgl").val();
            var status = $("#status").val()
            console.log(layanan);
            console.log(dateme);
            console.log(status);
          $.ajax({
                type: "POST",
                url: "../assets/scripts/ajax/klaim.php",
                data: "layanan="+ layanan + "&tgl=" + dateme + "&status=" + status,
                
                success: function (response) {
                    console.log(response);
                    $("#tabeldetail").html("");
                    $("#tabeldetail").html(response);
                    $("#tabeldetail").show();
                }
            });
        })

    //     $("#allbtn").click(function(){
      
    //       $.ajax({
    //         type: "POST",
    //         url: "/assets/scripts/ajax/getnotifaccr.php",
    //         data: "_date=all",
    //         success: function (response) {
             
    //           if(response=='NotFound'){
    //             $("#accrnotif").hide();
    //           }else{
    //             $("#accrnotif").html("");
    //             $("#accrnotif").html(response);
                
    //             $("#accrnotif").show();
    //           }
    //         }
    //     });
    //     })

    // $("#refreshbtn").click(function(){
      
    //   var _date = $('#_date').val();
    //   console.log(_date);
    //   $.ajax({
    //     type: "POST",
    //     url: "/assets/scripts/ajax/getnotifaccr.php",
    //     data: "_date="+_date,
    //     success: function (response) {
         
    //       if(response=='NotFound'){
    //         $("#accrnotif").hide();
    //       }else{
    //         $("#accrnotif").html("");
    //         $("#accrnotif").html(response);
            
    //         $("#accrnotif").show();
    //       }
    //     }
    // });
    // })
});
