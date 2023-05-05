<?php
    error_reporting(E_ALL);
    ini_set("display_errors","On");
    header("Access-Control-Allow-Origin:*");
   
    $json = file_get_contents('php://input');
    $json1= (array) json_decode($json,true);
    switch (json_last_error()) {
        case JSON_ERROR_NONE:
            echo ' - No errors';
            break;
        case JSON_ERROR_DEPTH:
            echo ' - Maximum stack depth exceeded';
            break;
        case JSON_ERROR_STATE_MISMATCH:
            echo ' - Underflow or the modes mismatch';
            break;
        case JSON_ERROR_CTRL_CHAR:
            echo ' - Unexpected control character found';
            break;
        case JSON_ERROR_SYNTAX:
            echo ' - Syntax error, malformed JSON';
            break;
        case JSON_ERROR_UTF8:
            echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
            break;
        default:
            echo ' - Unknown error';
        break;
    }
    $host='localhost';
    $user = 'mimj5729_myroot';
    $pwd = 'myroot@@##';
    $db = 'mimj5729_matahari';
    $con = mysqli_connect($host, $user, $pwd, $db);
    $nourut=0;
    
    foreach($json1 as $mydata){
        $nourut++;
        $s_code = $mydata["s_code"];
        $s_name = mysqli_real_escape_string($con,$mydata["s_name"]);
        $s_contact = mysqli_real_escape_string($con,$mydata["s_contact"]);
        $s_addr = $mydata["s_addr"];
        $s_phone = $mydata["s_phone"];
        
        
        $sqlselectwsuppliers = "SELECT * FROM wsuppliers WHERE s_code ='$s_code'";
        $resultselectsuppliers = mysqli_query($con,$sqlselectwsuppliers);
        $num_row = mysqli_num_rows($resultselectsuppliers);
       
        if($num_row==0){
            
            $sql = "INSERT INTO wsuppliers (s_code,s_name,s_contact,s_addr,s_phone) VALUES ('$s_code','$s_name','$s_contact','$s_addr','$s_phone')";
            $result = mysqli_query($con, $sql) or die("Couldn't execute query:<br>". mysqli_error($con));
            if($result){
                echo 'Data Updated';
            }else{
                echo 'Updated Failed';
            }
        }else{
            $sqlUpdate = "UPDATE wsuppliers SET
                           s_name = '$s_name',
                            s_contact = '$s_contact',
                            
                            s_addr = '$s_addr',
                            
                            s_phone = '$s_phone'
                            WHERE (s_code = '$s_code');";
            $resultupdate = mysqli_query($con, $sqlUpdate)or die("Couldn't execute query:<br>". mysqli_error($con));
            
        }
    }
    
    
  

?>