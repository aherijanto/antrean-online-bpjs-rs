/*-----------------------------------------
Created by  : Ary H 
Project     : ANTREAN ONLINE
Date        : MAY 4,2023
-----------------------------------------*/

//main
$(document).ready(function () {
         
        $("#btninsert").click(function(){
            var kodebooking = $("#kodebooking").val();
            var jenisresep = $("#jenisresep").val();
            var taskid = $("#taskid").val();
            var waktu = $("#waktu").val();
           
          
            //check logging
            console.log(kodebooking);
            console.log(jenisresep); 
            console.log(taskid); 
            console.log(waktu); 
            
          $.ajax({
                type: "POST",
                url: "../assets/scripts/ajax/updateantreanfarmasi.php",
                data: "kodebooking=" +  kodebooking +
                         "&jenisresep=" + jenisresep +
                         "&taskid=" + taskid +
                         "&waktu=" + waktu,
                success: function (response) {
                    console.log(response);
                    $("#tabeldetail").html("");
                    $("#tabeldetail").html(response);
                    $("#tabeldetail").show();
                }
            });
        })
});
