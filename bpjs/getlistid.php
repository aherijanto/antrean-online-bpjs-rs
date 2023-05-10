<?php
    session_start();
    header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous">
</script>
    <style>
        span{
            width: 220px;
           
        }
        </style>
</head>

    <?php
        require_once('../assets/requires/config.php');
        require_once('../assets/requires/headerdshbd.php');
        
    ?>
    <div id="topmenulist">
        <?php require_once('topmenu.php');?>
    </div>

<body>
   
            <div class="card ml-4 p-3">
                <div style="padding-top:40px;color:#7209b7;font-size:32px;">GET LIST ID</div>
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white" id="basic-addon3">Kode Booking</span>
                    </div>
                    <input type="text" class="form-control" id="kodebookinglist" aria-describedby="basic-addon3">
                </div>

                <div>
                    <div class="row justify-content-center">
                        <div class="col"></div>
                        <div class="col"><button class="btn btn-danger" id="btngetlist">Get List</button></div>
                        <div class="col"></div>
                    </div>
                </div>
                <div class="mt-4" id="tabelgetlist"></div>
            </div>
        
</body>

</html>
<script src="../assets/scripts/js/getlistid.js"></script>