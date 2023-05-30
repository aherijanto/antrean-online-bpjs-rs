/*-----------------------------------------
Created by  : Ary H 
Project     : ANTREAN ONLINE
Date        : MAY 4,2023
-----------------------------------------*/

//main
$(document).ready(function () {
         
        $("#btninsert").click(function(){
            var kodebooking = $("#kodebooking").val();
            
            var keterangan = $("#keterangan").val();
           
          
            //check logging
            console.log(kodebooking);
            
            console.log(keterangan); 
            
          $.ajax({
                type: "POST",
                url: "../assets/scripts/ajax/batalantrean.php",
                data: "kodebooking=" +  kodebooking +
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
