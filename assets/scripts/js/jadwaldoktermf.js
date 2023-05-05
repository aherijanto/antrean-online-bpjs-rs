/*-----------------------------------------
Created by  : Ary H 
Project     : BPJS -Antrean Online
Date        : May 4, 2023
-----------------------------------------*/

//main
$(document).ready(function () {
         $("#tabeldetail").hide();
        $("#btnjadwal").click(function(){
            var kodepoli = $("#kodepoli").val();
            var tanggal = $('#tanggal').val();
            console.log(kodepoli + ' '+tanggal);
          $.ajax({
                type: "POST",
                url: "../assets/scripts/ajax/jadwaldoktermf.php",
                data: "kode="+ kodepoli+"&tanggal="+tanggal,
                success: function (response) {
                    console.log(response);
                    $("#tabeldetail").html("");
                    $("#tabeldetail").html(response);
                    $("#tabeldetail").show();
                }
            });
        })

        $("#btnnama").click(function(){
            var nama = $("#namadiag").val();
          $.ajax({
                type: "POST",
                url: "../assets/scripts/ajax/diagnosa.php",
                data: "nama="+ nama+"status=nama" ,
                
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
