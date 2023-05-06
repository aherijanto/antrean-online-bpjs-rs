/*-----------------------------------------
Created by  : Ary H 
Project     : ANTREAN ONLINE
Date        : MAY 4,2023
-----------------------------------------*/

//main
$(document).ready(function () {
         
        $("#btninsert").click(function(){
            var kodebooking = $("#kodebooking").val();
            
            //check logging
            console.log(kodebooking);
            
            
          $.ajax({
                type: "POST",
                url: "../assets/scripts/ajax/getlistid.php",
                data: "kodebooking=" +  kodebooking,
                success: function (response) {
                    console.log(response);
                    $("#tabeldetail").html("");
                    $("#tabeldetail").html(response);
                    $("#tabeldetail").show();
                }
            });
        })
});
