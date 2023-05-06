/*-----------------------------------------
Created by  : Ary H 
Project     : ANTREAN ONLINE
Date        : MAY 4,2023
-----------------------------------------*/

//main
$(document).ready(function () {
         
        $("#btninsert").click(function(){
            var kodebooking = $("#kodebooking").val();
            var jenispasien = $("#jenispasien").val();
            var nomorkartu = $("#nomorkartu").val();
            var nik = $("#nik").val();
            var nohp = $("#nohp").val();
            var kodepoli = $("#kodepoli").val();
            var namapoli = $("#namapoli").val();
            var pasienbaru = $("#pasienbaru").val();
            var norm = $("#norm").val();
            var tanggalperiksa = $("#tanggalperiksa").val();
            var kodedokter = $("#kodedokter").val();
            var namadokter = $("#namadokter").val();
            var jampraktek = $("#jampraktek").val();
            var jeniskunjungan = $("#jeniskunjungan").val();
            var nomorreferensi = $("#nomorreferensi").val();
            var nomorantrean = $("#nomorantrean").val();
            var angkaantrean = $("#angkaantrean").val();
            var estimasidilayani = $("#estimasidilayani").val();
            var sisakuotajkn = $("#sisakuotajkn").val();
            var kuotajkn = $("#kuotajkn").val();
            var sisakuotanonjkn = $("#sisakuotanonjkn").val();
            var kuotanonjkn= $("#kuotanonjkn").val();
            var keterangan = $("#keterangan").val();
           
          
            //check logging
            console.log(kodebooking);
            console.log(jenispasien); 
            console.log(nomorkartu); 
            console.log(nik);
            console.log(nohp); 
            console.log(kodepoli); 
            console.log(namapoli); 
            console.log(pasienbaru); 
            console.log(norm);
            console.log(tanggalperiksa); 
            console.log(kodedokter); 
            console.log(namadokter); 
            console.log(jampraktek);
            console.log(jeniskunjungan);
            console.log(nomorreferensi);
            console.log(nomorantrean);
            console.log(angkaantrean); 
            console.log(estimasidilayani);
            console.log(sisakuotajkn);
            console.log(kuotajkn); 
            console.log(sisakuotanonjkn);
            console.log(kuotanonjkn);
            console.log(keterangan); 
            
          $.ajax({
                type: "POST",
                url: "../assets/scripts/ajax/addantrean.php",
                data: "kodebooking=" +  kodebooking +
                         "&jenispasien=" + jenispasien +
                         "&nomorkartu=" + nomorkartu +
                         "&nik="+ nik +
                         "&nohp=" + nohp +
                         "&kodepoli=" + kodepoli +
                         "&namapoli=" + namapoli +
                         "&pasienbaru=" + pasienbaru +
                         "&norm=" + norm +
                         "&tanggalperiksa=" + tanggalperiksa +
                         "&kodedokter=" + kodedokter +
                         "&namadokter=" + namadokter +
                         "&jampraktek=" + jampraktek +
                         "&jeniskunjungan=" + jeniskunjungan +
                         "&nomorreferensi=" + nomorreferensi +
                         "&nomorantrean=" + nomorantrean + 
                         "&angkaantrean=" + angkaantrean +
                         "&estimasidilayani=" + estimasidilayani +
                         "&sisakuotajkn=" + sisakuotajkn +
                         "&kuotajkn=" + kuotajkn +
                         "&sisakuotanonjkn=" + sisakuotanonjkn +
                         "&kuotanonjkn=" + kuotanonjkn +
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
