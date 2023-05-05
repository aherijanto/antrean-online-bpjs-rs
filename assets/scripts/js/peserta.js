/*-----------------------------------------
Created by  : Ary H 
Project     : Inventory
Date        : January, 2022
-----------------------------------------*/

//main
$(document).ready(function () {
         $("#tabeldetail").hide();
        $("#btnnik").click(function(){
            var nik = $("#nomor").val();
            var dateme = $("#tglsep").val();
            console.log(nik);
            console.log(dateme);
          $.ajax({
                type: "POST",
                url: "../assets/scripts/ajax/peserta.php",
                data: "nik="+ nik + "&tgl=" + dateme + "&status=nik",
                
                success: function (response) {
                    console.log(response);
                    $("#tabeldetail").html("");
                    $("#tabeldetail").html(response);
                    $("#tabeldetail").show();
                }
            });
        })

        $("#btnkartu").click(function(){
            var kartu = $("#nomor").val();
            var dateme = $("#tglsep").val();
            console.log(kartu);
            console.log(dateme);
          $.ajax({
                type: "POST",
                url: "../assets/scripts/ajax/peserta.php",
                data: "kartu="+ kartu + "&tgl=" + dateme + "&status=kartu",
                
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
