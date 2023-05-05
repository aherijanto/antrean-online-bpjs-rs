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
        $c_code = $mydata["c_code"];
        $c_id = $mydata["c_id"];
        $c_name = mysqli_real_escape_string($con,$mydata["c_name"]);
        $c_pob = $mydata["c_pob"];
        $c_dob = $mydata["c_dob"];
        $c_addr = $mydata["c_addr"];
        $c_rt = $mydata["c_rt"];
        $c_kel = $mydata["c_kel"];
        $c_kec = $mydata["c_kec"];
        $c_gender = $mydata["c_gender"];
        $c_phone = $mydata["c_phone"];
        $c_join = $mydata["c_join"];
        
        $sqlselectwcustomer = "SELECT * FROM wcustomers WHERE c_code ='$c_code'";
        $resultselectcustomer = mysqli_query($con,$sqlselectwcustomer);
        $num_row = mysqli_num_rows($resultselectcustomer);
        
        if($num_row==0){
            
            $sql = "INSERT INTO wcustomers (c_code,c_id,c_name,c_pob,c_dob,c_addr,c_rt,c_kel,c_kec,c_gender,c_phone,c_join) VALUES ('$c_code','$c_id','$c_name','$c_pob','$c_dob','$c_addr','$c_rt','$c_kel','$c_kec','$c_gender','$c_phone','$c_join')";
            $result = mysqli_query($con, $sql) or die("Couldn't execute query:<br>". mysqli_error($con));
           
        }else{
            $sqlUpdate = "UPDATE wcustomers SET
                           c_name = '$c_name',
                            c_pob = '$c_pob',
                            c_dob = '$c_dob',
                            c_addr = '$c_addr',
                            c_rt = '$c_rt',
                            c_kel = '$c_kel',
                            c_kec = '$c_kec',
                            c_gender = '$c_gender',
                            c_phone = '$c_phone',
                            c_join = '$c_join'
                            WHERE (c_code = '$c_code');";
            $resultupdate = mysqli_query($con, $sqlUpdate)or die("Couldn't execute query:<br>". mysqli_error($con));
            
        }
    }
    
    
   // print_r($json);

?>