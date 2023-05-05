/*-----------------------------------------
Created by  : Ary H 
Project     : Inventory
Date        : January, 2022
-----------------------------------------*/

//main
$(document).ready(function () {
         $("#tabeldetail").hide();
        
        $("#btnkunjungan").click(function(){
            var layanan = $("#layanan").val();
            var dateme = $("#tgl").val();
            console.log(layanan);
            console.log(dateme);
          $.ajax({
                type: "POST",
                url: "../assets/scripts/ajax/visit.php",
                data: "layanan="+ layanan + "&tgl=" + dateme,
                
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
