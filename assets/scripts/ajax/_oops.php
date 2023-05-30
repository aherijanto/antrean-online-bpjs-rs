<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors","On");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
        $con = mysqli_connect("localhost","mimj5729_myroot","myroot@@##","kliz7334_antrean");
        $countquery = mysqli_query($con,"SELECT COUNT(id) as counter FROM nonbpjs;");
        $row   = mysqli_fetch_array($countquery);
        // Check connection
        if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
        }
        echo $row['counter'];
?>