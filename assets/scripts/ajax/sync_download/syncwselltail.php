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
        $i_code = $mydata["i_code"];
        $i_name = $mydata["i_name"];
        $i_qty = $mydata["i_qty"];
        $i_sell = $mydata["i_sell"];
        $i_disc1 = $mydata["i_disc1"];
        $i_disc2 = $mydata["i_disc2"];
        $i_disc3 = $mydata["i_disc3"];
        $id = $mydata["id"];
        //echo $s_code.'<br/>';
        $sqlselect = "SELECT * FROM wselltail WHERE  id='$id';";
        //echo $sqlselect;
        //s_code = '$s_code' AND i_code='$i_code' AND i_name = '$i_name' AND i_qty = '$i_qty' AND i_sell = '$i_sell' AND i_disc1 = '$i_disc1' AND i_disc2 = '$i_disc2' AND i_disc3 = '$i_disc3' AND
        $resultselect = mysqli_query($con,$sqlselect);
        $num_row = mysqli_num_rows($resultselect);
        //echo $num_row;
        
        //echo $s_code;
        
        if($num_row == 0){
           // echo 'On JSON : '.$s_code.'  -> Not Found Then INSERT '.$s_code.' - '.$i_code.' - '.$i_name.' - '.$i_qty.' - '.$i_sell.' - '.$id.'<br/>';
            $sqlinsert = "INSERT INTO wselltail (s_code,i_code,i_name,i_qty,i_sell,i_disc1,i_disc2,i_disc3,id) VALUES ('$s_code','$i_code','$i_name','$i_qty','$i_sell','$i_disc1','$i_disc2','$i_disc3','$id')";
            $result = mysqli_query($con, $sqlinsert)or die("Couldn't execute query:<br>". mysqli_error($con));
            // echo "INSERT".'<br/>';
       }else{
          // echo 'On JSON : '.$s_code.'  -> Found Then UPDATE '.$s_code.' - '.$i_code.' - '.$i_name.' - '.$i_qty.' - '.$i_sell.' - '.$id.'<br/>';
           $sqlupdate = "UPDATE wselltail SET 
            
            i_qty='$i_qty',
            i_sell='$i_sell',
            i_disc1='$i_disc1',
            i_disc2='$i_disc2',
            i_disc3='$i_disc3'
            WHERE (id = '$id');";
            
            $resultupdate = mysqli_query($con, $sqlupdate)or die("Couldn't execute query:<br>". mysqli_error($con));
           // echo 'UPDATE'.'<br/>';
            //(s_code = '$s_code') AND (i_code='$i_code') AND (i_name = '$i_name') AND (i_qty = '$i_qty') AND (i_sell = '$i_sell') AND (i_disc1 = '$i_disc1') AND (i_disc2 = '$i_disc2') AND (i_disc3 = '$i_disc3') AND 
       }
 
    }
    
    
   // print_r($json);

?>