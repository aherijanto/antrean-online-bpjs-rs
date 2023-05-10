/*-----------------------------------------
Created by  : Ary H 
Project     : BPJS -Antrean Online
Date        : May 4, 2023
-----------------------------------------*/

//main
$(document).ready(function () {
         $("#tabeldetaildoctors").hide();
        $("#btndokter").click(function(){
            var kodedokter = $("#kodedokterref").val();
            console.log(kodedokter);
          $.ajax({
                type: "POST",
                url: "../assets/scripts/ajax/doktermf.php",
                data: "kodedokter="+ kodedokter,
                success: function (response) {
                    console.log(response);
                    $("#tabeldetaildoctors").html("");
                    $("#tabeldetaildoctors").html(response);
                    $("#tabeldetaildoctors").show();
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
                    $("#tabeldetaildoctors").html("");
                    $("#tabeldetaildoctors").html(response);
                    $("#tabeldetaildoctors").show();
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
