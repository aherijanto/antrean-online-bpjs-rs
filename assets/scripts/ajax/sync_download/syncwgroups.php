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
        $g_code = $mydata["g_code"];
        $g_name = $mydata["g_name"];
        $id = $mydata["id"];
        
        $sqlselect = "SELECT * FROM wgroups WHERE  id='$id';";
        
        $resultselect = mysqli_query($con,$sqlselect);
        $num_row = mysqli_num_rows($resultselect);
       
        
        if($num_row == 0){
          
            $sqlinsert = "INSERT INTO wgroups (g_code,g_name,id) VALUES ('$g_code','$g_name','$id')";
            $result = mysqli_query($con, $sqlinsert)or die("Couldn't execute query:<br>". mysqli_error($con));
           
       }else{
         
           $sqlupdate = "UPDATE wgroups SET 
            g_code  = '$g_code',
            g_name  = '$g_name'
            WHERE (id = '$id');";
            
            $resultupdate = mysqli_query($con, $sqlupdate)or die("Couldn't execute query:<br>". mysqli_error($con));
           
       }
 
    }
    
    
  

?>