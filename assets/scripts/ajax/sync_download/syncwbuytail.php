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
        $b_code = $mydata["b_code"];
        $g_code = $mydata["g_code"];
        $i_code = $mydata["i_code"];
        $i_name = $mydata["i_name"];
        $i_qty = $mydata["i_qty"];
        $i_cogs = $mydata["i_cogs"];
        $i_disc1 = $mydata["i_disc1"];
        $i_disc2 = $mydata["i_disc2"];
        $i_disc3 = $mydata["i_disc3"];
        $tglexp = $mydata["tglexp"];
        $id = $mydata["id"];
       
        $sqlselect = "SELECT * FROM wbuytail WHERE  id='$id';";
       
        $resultselect = mysqli_query($con,$sqlselect);
        $num_row = mysqli_num_rows($resultselect);
       
        
        if($num_row == 0){
           
            $sqlinsert = "INSERT INTO wbuytail (b_code,g_code,i_code,i_name,i_qty,i_cogs,i_disc1,i_disc2,i_disc3,tglexp,id) VALUES ('$b_code','$g_code','$i_code','$i_name','$i_qty','$i_cogs','$i_disc1','$i_disc2','$i_disc3','$tglexp','$id')";
            $result = mysqli_query($con, $sqlinsert)or die("Couldn't execute query:<br>". mysqli_error($con));
          
       }else{
         
           $sqlupdate = "UPDATE wbuytail SET 
            g_code = '$g_code',
            i_code = '$i_code',
            i_name = '$i_name',
            i_qty='$i_qty',
            i_cogs='$i_cogs',
            i_disc1='$i_disc1',
            i_disc2='$i_disc2',
            i_disc3='$i_disc3',
            tglexp = '$tglexp'
            WHERE (id = '$id');";
            
            $resultupdate = mysqli_query($con, $sqlupdate)or die("Couldn't execute query:<br>". mysqli_error($con));
           
       }
 
    }
    
    
  

?>