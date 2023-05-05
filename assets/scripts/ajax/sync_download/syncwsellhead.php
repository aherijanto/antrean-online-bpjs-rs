<?php
    error_reporting(E_ALL);
    ini_set("display_errors","On");
    header("Access-Control-Allow-Origin:*");
   

    $json = file_get_contents('php://input');
    //echo $json;
    $json1= (array) json_decode($json,true);
   // print $json1;
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
        $s_date = $mydata["s_date"];
        $s_dateinput = $mydata["s_dateinput"];
        $type = $mydata["type"];
        $c_code = $mydata["c_code"];
        $u_code = $mydata["u_code"];
        $s_premi = $mydata["s_premi"];
        $s_deduct = $mydata["s_deduct"];
        //echo $s_code;
       
        $sqlselectwsellhead = "SELECT * FROM wsellhead WHERE s_code ='$s_code'";
        //echo $sqlselect;
        
        $resultselecthead = mysqli_query($con,$sqlselectwsellhead);
        $num_row = mysqli_num_rows($resultselecthead);
        if($num_row==0){
           
            $sql = "INSERT INTO wsellhead (s_code,s_date,s_dateinput,type,c_code,u_code,s_premi,s_deduct) VALUES ('$s_code','$s_date','$s_dateinput','$type','$c_code','$u_code','$s_premi','$s_deduct')";
            $result = mysqli_query($con, $sql) or die("Couldn't execute query:<br>". mysqli_error($con));
            
        }else{
            $sqlUpdate = "UPDATE wsellhead SET
                            s_date='$s_date',
                            s_dateinput='$s_dateinput',
                            type='$type',
                            c_code='$c_code',
                            u_code='$u_code',
                            s_premi = '$s_premi',
                            s_deduct = '$s_deduct' 
                            WHERE (s_code = '$s_code');";
            $resultupdate = mysqli_query($con, $sqlUpdate)or die("Couldn't execute query:<br>". mysqli_error($con));
            
        }
        
       
    }
    
    
   // print_r($json);

?>