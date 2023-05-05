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
        $b_code = $mydata["b_code"];
        $b_refno = $mydata["b_refno"];
        $b_date = $mydata["b_date"];
        $b_dateinput = $mydata["b_dateinput"];
        $s_code = $mydata["s_code"];
        $u_code = $mydata["u_code"];
        $id = $mydata["id"];
        
        $sqlselectwbuyhead = "SELECT * FROM wbuyhead WHERE id ='$id'";
        
        
        $resultselecthead = mysqli_query($con,$sqlselectwbuyhead);
        $num_row = mysqli_num_rows($resultselecthead);
        if($num_row==0){
           
            $sql = "INSERT INTO wbuyhead (b_code,b_refno,b_date,b_dateinput,s_code,u_code,id)
                VALUES('$b_code','$b_refno','$b_date','$b_dateinput','$s_code','$u_code','$id')";
            $result = mysqli_query($con, $sql) or die("Couldn't execute query:<br>". mysqli_error($con));
            if($result){
                echo 'Data Updated';
            }else{
                echo 'Updated Failed';
            }
        }else{
            $sqlUpdate = "UPDATE wbuyhead SET
                            b_date='$b_date',
                            b_dateinput='$b_dateinput',
                            s_code='$s_code',
                            u_code='$u_code'
                            WHERE (id = '$id');";
            $resultupdate = mysqli_query($con, $sqlUpdate)or die("Couldn't execute query:<br>". mysqli_error($con));
            
        }
        
       
    }
    
    
   // print_r($json);

?>