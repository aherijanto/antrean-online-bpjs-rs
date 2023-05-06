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
            var nomorantrean = $("#nomorantrean").val();
            var keterangan = $("#keterangan").val();
           
          
            //check logging
            console.log(kodebooking);
            console.log(jenisresep); 
            console.log(nomorantrean); 
            console.log(keterangan); 
            
          $.ajax({
                type: "POST",
                url: "../assets/scripts/ajax/addantreanfarmasi.php",
                data: "kodebooking=" +  kodebooking +
                         "&jenisresep=" + jenisresep +
                         "&nomorantrean=" + nomorantrean +
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
