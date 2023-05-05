<?php
    error_reporting(E_ALL);
    ini_set("display_errors","On");
    header("Access-Control-Allow-Origin: *");
    $json = file_get_contents('php://input');
    
    $json1= (array) json_decode($json,true);
    //echo $json1;
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
        //echo $mydata['c_code'].'<br/>';
        $nourut++;
        $s_code = $mydata["s_code"];
        $r_date = $mydata["r_date"];
        $r_type = $mydata["r_type"];
        $r_nocheque = $mydata["r_nocheque"];
        $r_amount = $mydata["r_amount"];
        $id = $mydata["id"];
        
        $sqlselect = "SELECT * FROM waccountr WHERE  id='$id';";
        
        $resultselect = mysqli_query($con,$sqlselect);
        $num_row = mysqli_num_rows($resultselect);
       
        
        if($num_row == 0){
          
            $sqlinsert = "INSERT INTO waccountr (id,s_code,r_date,r_type,r_nocheque,r_amount) VALUES ('$id','$s_code','$r_date','$r_type','$r_nocheque','$r_amount')";
            $result = mysqli_query($con, $sqlinsert)or die("Couldn't execute query:<br>". mysqli_error($con));
           
       }else{
         
           $sqlupdate = "UPDATE waccountr SET 
            s_code = '$s_code',
            r_date='$r_date',
            r_type='$r_type',
            r_nocheque='$r_nocheque',
            r_amount='$r_amount'
            WHERE (id = '$id');";
            
            $resultupdate = mysqli_query($con, $sqlupdate)or die("Couldn't execute query:<br>". mysqli_error($con));
           
       }
 
    }
    
    
  

?>