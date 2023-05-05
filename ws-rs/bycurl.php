<?php
error_reporting(E_ALL);
ini_set("display_errors","On");
$headers = array(
    'x-username:annisaajkn',
    'x-password:ws4nN15a4jKn',
    
    );

$ch      = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://antrean.klinik-annisaa.local/ws-rs/mimomf/httpreq.php');
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$content = curl_exec($ch);
//   var_dump($this->getUrl());
//   var_dump($content);
$err     = curl_error($ch);
echo $content;

//$this->content_decode=json_decode($content,true);
?>