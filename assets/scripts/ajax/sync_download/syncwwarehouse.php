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
        $ware_id = $mydata["ware_id"];
        $ware_name = mysqli_real_escape_string($con,$mydata["ware_name"]);
        $ware_loc = mysqli_real_escape_string($con,$mydata["ware_loc"]);
        $id = $mydata["id"];
        
        $sqlselectwarehouse = "SELECT * FROM wwarehouse WHERE id ='$id'";
        $resultselectwarehouse = mysqli_query($con,$sqlselectwarehouse);
        $num_row = mysqli_num_rows($resultselectwarehouse);
       
        if($num_row==0){
            
            $sql = "INSERT INTO wwarehouse (id,ware_id,ware_name,ware_loc) VALUES ('$id','$ware_id','$ware_name','$ware_loc')";
            $result = mysqli_query($con, $sql) or die("Couldn't execute query:<br>". mysqli_error($con));
            if($result){
                echo 'Data Updated';
            }else{
                echo 'Updated Failed';
            }
        }else{
            $sqlUpdate = "UPDATE wwarehouse SET
                            ware_id = '$ware_id',
                            ware_name = '$ware_name',
                            ware_loc = '$ware_loc'
                            WHERE (id = '$id');";
            $resultupdate = mysqli_query($con, $sqlUpdate)or die("Couldn't execute query:<br>". mysqli_error($con));
            
        }
    }
    
    
   // print_r($json);

?>