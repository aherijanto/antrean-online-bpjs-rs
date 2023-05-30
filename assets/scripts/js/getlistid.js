/*-----------------------------------------
Created by  : Ary H 
Project     : ANTREAN ONLINE
Date        : MAY 4,2023
-----------------------------------------*/

//main
$(document).ready(function () {
   
        $("#btngetlist").click(function(){
            var kodebooking1 = $("#kodebookinglist").val();
            //check logging
           console.log(kodebooking1);
            $.ajax({
                type: "POST",
                url: "../assets/scripts/ajax/getlistid.php",
                data: "kodebooking=" +  kodebooking1,
                success: function (response1) {
                    console.log(response1);
                    $("#tabelgetlist").html("");
                    $("#tabelgetlist").html(response1);
                    $("#tabelgetlist").show();
                }
            });
        })
});
