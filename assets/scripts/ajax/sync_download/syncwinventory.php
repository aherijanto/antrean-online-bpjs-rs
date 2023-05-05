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
        $i_code = $mydata["i_code"];
        $g_code = $mydata["g_code"];
        $i_supp = $mydata["i_supp"];
        $i_barcode = $mydata["i_barcode"];
        $i_name = $mydata["i_name"];
        $i_qty = $mydata["i_qty"];
        $i_qtymin = $mydata["i_qtymin"];
        $i_unit = $mydata["i_unit"];
        $i_size = $mydata["i_size"];
        $i_color = $mydata["i_color"];
        $i_brands = $mydata["i_brands"];
        $i_article = $mydata["i_article"];
        $i_cogs = $mydata["i_cogs"];
        $i_kdsell = $mydata["i_kdsell"];
        $i_sell = $mydata["i_sell"];
        $i_sell2 = $mydata["i_sell2"];
        $i_sell3 = $mydata["i_sell3"];
        $i_sell4 = $mydata["i_sell4"];
        $i_sell5 = $mydata["i_sell5"];
        $i_sell6 = $mydata["i_sell6"];
        $i_sell7 = $mydata["i_sell7"];
        $i_sell8 = $mydata["i_sell8"];
        $i_sell9 = $mydata["i_sell9"];
        $i_sell10 = $mydata["i_sell10"];
        $i_status = $mydata["i_status"];
        $ware_id = $mydata["ware_id"];
        $id = $mydata["id"];
        //echo $s_code.'<br/>';
        $sqlselect = "SELECT * FROM winventory WHERE  id='$id';";
        //echo $sqlselect;
        //s_code = '$s_code' AND i_code='$i_code' AND i_name = '$i_name' AND i_qty = '$i_qty' AND i_sell = '$i_sell' AND i_disc1 = '$i_disc1' AND i_disc2 = '$i_disc2' AND i_disc3 = '$i_disc3' AND
        $resultselect = mysqli_query($con,$sqlselect);
        $num_row = mysqli_num_rows($resultselect);
        //echo $num_row;
        
        //echo $s_code;
        
        if($num_row == 0){
           // echo 'On JSON : '.$s_code.'  -> Not Found Then INSERT '.$s_code.' - '.$i_code.' - '.$i_name.' - '.$i_qty.' - '.$i_sell.' - '.$id.'<br/>';
            $sqlinsert = "INSERT INTO winventory (i_code,g_code,i_supp,i_barcode,i_name, i_qty,i_qtymin,i_unit,i_size,i_color,i_brands,i_article,i_cogs,i_kdsell,i_sell,i_sell2,i_sell3,i_sell4,i_sell5,i_sell6,i_sell7,i_sell8,i_sell9,i_sell10,i_status,ware_id,id)
                VALUES('$i_code','$g_code','$i_supp','$i_barcode','$i_name','$i_qty','$i_qtymin','$i_unit','$i_size','$i_color','$i_brands','$i_article','$i_cogs','$i_kdsell','$i_sell','$i_sell2','$i_sell3','$i_sell4','$i_sell5','$i_sell6','$i_sell7','$i_sell8','$i_sell9','$i_sell10','$i_status','$ware_id','$id')";
            $result = mysqli_query($con, $sqlinsert)or die("Couldn't execute query:<br>". mysqli_error($con));
           
       }else{
          
           $sqlupdate = "UPDATE winventory SET 
            
            `i_code`='$i_code',`g_code`='$g_code',`i_supp`='$i_supp',`i_barcode`='$i_barcode',`i_name`='$i_name',`i_qty`='$i_qty',`i_qtymin`='$i_qtymin',`i_unit`='$i_unit',`i_size`='$i_size',`i_color`='$i_color',`i_brands`='$i_brands',`i_article`='$i_article',`i_cogs`='$i_cogs',`i_kdsell`='$i_kdsell',`i_sell`='$i_sell',`i_sell2`='$i_sell2',`i_sell3`='$i_sell3',`i_sell4`='$i_sell4',`i_sell5`='$i_sell5',`i_sell6`='$i_sell6',`i_sell7`='$i_sell7',`i_sell8`='$i_sell8',`i_sell9`='$i_sell9',`i_sell10`='$i_sell10',`i_status`='$i_status',`ware_id`='$ware_id'
                WHERE (id = '$id');";
            
            $resultupdate = mysqli_query($con, $sqlupdate)or die("Couldn't execute query:<br>". mysqli_error($con));
           // echo 'UPDATE'.'<br/>';
            //(s_code = '$s_code') AND (i_code='$i_code') AND (i_name = '$i_name') AND (i_qty = '$i_qty') AND (i_sell = '$i_sell') AND (i_disc1 = '$i_disc1') AND (i_disc2 = '$i_disc2') AND (i_disc3 = '$i_disc3') AND 
       }
 
    }
    
    
   // print_r($json);

?>