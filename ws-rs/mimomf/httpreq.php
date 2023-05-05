<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/assets/scripts/class/auth.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!isset($_SERVER['HTTP_X_USERNAME']) || !isset($_SERVER['HTTP_X_PASSWORD'])) {
        header('HTTP/1.1 401 Unauthorized');
        header('WWW-Authenticate: Basic realm="KU ANNISAA Web Service"');
        exit('Access denied. Missing headers.');
    }

    $_auth = new AUTH();
    $_auth->set_username($_SERVER['HTTP_X_USERNAME']);
    $_auth->set_password($_SERVER['HTTP_X_PASSWORD']);
    
    if($_auth->_AUTHVALID()==='pass'){
        $response = array('response' => array('token'=>'12345678abcde'), 'metadata'=>array('message' => 'ok', 'status'=>'200'));
        header('Content-Type: application/json');
       
    }else{
        $response = array('response' => array('token'=>null), 'metadata'=>array('message' => 'failed', 'status'=>'400'));
        header('Content-Type: application/json');
    }
    echo json_encode($response);

} else {
    header('HTTP/1.1 405 Method Not Allowed');
    header('Allow: GET');
    $response = array('status' => 'error', 'message' => 'Unsupported HTTP method.');
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
