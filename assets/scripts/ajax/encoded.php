<?php
date_default_timezone_set('UTC');
error_reporting(E_ALL);
ini_set("display_errors","On");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require $_SERVER['DOCUMENT_ROOT'].'/assets/PHPMailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'].'/assets/PHPMailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'].'/assets/PHPMailer/src/SMTP.php';
require_once  $_SERVER['DOCUMENT_ROOT'].'/bpjs/vendor/autoload.php';

Class Encoded{
   private  $resp;
   private  $consid;
   private  $url;
   private $tStamp;
   private $secretKey;
   private  $encodedSignature;
   private $userkey;
   private $content_decode;

   //Getter and Setter
    /**
    * Get the value of resp
    */
    public function getResp()
    {
       return $this->resp;
    }
 
    /**
     * Set the value of resp
     */
    public function setResp($resp): self
    {
       $this->resp = $resp;
       return $this;
    }
 
    /**
     * Get the value of consid
     */
    public function getConsid()
    {
       return $this->consid;
    }
 
    /**
     * Set the value of consid
     */
    public function setConsid($consid): self
    {
       $this->consid = $consid;
       return $this;
    }
 
   /**
    * Get the value of url
    */
   public function getUrl()
   {
     return $this->url;
   }
 
   /**
    * Set the value of url
    */
   public function setUrl($url): self
   {
     $this->url = $url;
 
     return $this;
   }
 
    /**
     * Get the value of tStamp
     */
    public function getTStamp()
    {
       return $this->tStamp;
    }
 
    /**
     * Set the value of tStamp
     */
    public function setTStamp($tStamp): self
    {
       $this->tStamp = $tStamp;
 
       return $this;
    }
 
    /**
     * Get the value of secretKey
     */
    public function getSecretKey()
    {
       return $this->secretKey;
    }
 
    /**
     * Set the value of secretKey
     */
    public function setSecretKey($secretKey): self
    {
       $this->secretKey = $secretKey;
 
       return $this;
    }
 
    /**
     * Get the value of encodedSignature
     */
    public function getEncodedSignature()
    {
       return $this->encodedSignature;
    }
 
    /**
     * Set the value of encodedSignature
     */
    public function setEncodedSignature($encodedSignature): self
    {
       $this->encodedSignature = $encodedSignature;
 
       return $this;
    }
 
    /**
     * Get the value of userkey
     */
    public function getUserkey()
    {
       return $this->userkey;
    }
    
    /**
     * Set the value of userkey
     */
    public function setUserkey($userkey): self
    {
       $this->userkey = $userkey;
 
       return $this;
    }

    public function getContentDecode()
    {
       return $this->content_decode;
    }
 
    /**
     * Set the value of content_decode
     */
    public function setContentDecode($content_decode): self
    {
       $this->content_decode = $content_decode;
 
       return $this;
    }
	
    function __construct($url){
      $this->consid    = '31683';//11402 //trial cons-id ->31683 // real is 3093
      $this->secretKey = '4dIE626BFD'; //secretkey trial -> 4dIE626BFD // real is 3iGFA72609
      $this->userkey = '589f78590adf5cae7ab7bc3d45ad9f6d';//'f5996ee910e37e81d66002187c5c14a6';
      $mydate=date('Y-m-d h:i:s');
      $this->tStamp= strval(time()-strtotime('1970-01-01 00:00:00'));
      $this->url = $url;
// Computes the signature by hashing the salt with the secret key as the key
      $signature= hash_hmac('sha256',$this->consid.'&'.$this->tStamp,$this->secretKey, true);
      $this->encodedSignature = base64_encode($signature);
      // echo PHP_EOL;
      // echo $this->getTStamp(),PHP_EOL;
      // echo $this->getEncodedSignature();
    }
        
     function setInit(){
        $headers = array(
            'X-Cons-ID:'.$this->getConsid().'',
            'X-Timestamp:'.$this->getTStamp().'',
            'X-Signature:'.$this->getEncodedSignature().'',
            'user_key:'.$this->getUserkey().'',
            'Content-Type: Application/x-www-form-urlencoded',
            );
      
        $ch      = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getUrl());
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $content = curl_exec($ch);
      //   var_dump($this->getUrl());
      
        $err     = curl_error($ch);
        

       $this->content_decode=json_decode($content,true);
      //var_dump($this->content_decode);
      }
    
    function populateResponse(){
        $key = $this->consid.$this->secretKey.$this->tStamp;
        $string = $this->content_decode['response'];
        
        if($string!=null){ 
            $encrypt_method = 'AES-256-CBC';
            $key_hash = hex2bin(hash('sha256', $key));
            $iv = substr(hex2bin(hash('sha256', $key)), 0, 16);
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key_hash, OPENSSL_RAW_DATA, $iv);
            $this-> resp = \LZCompressor\LZString::decompressFromEncodedURIComponent($output);
            //echo $this->resp;
            return $this->resp;
        }
        return null;
    }
    
   
    function postJSON($postdata){
        $headers = array(
            'X-Cons-ID:'.$this->getConsid().'',
            'X-Timestamp:'.$this->getTStamp().'',
            'X-Signature:'.$this->getEncodedSignature().'',
            'user_key:'.$this->getUserkey().'',
            'Content-Type: Application/x-www-form-urlencoded',
            );
            // echo '<br/>headers: '.$headers[0];
            // echo '<br/>headers: '.$headers[1];
            // echo '<br/>headers: '.$headers[2];
            // echo '<br/>headers: '.$headers[3];
            // echo '<br/>url:'.$this->getUrl();
            // echo '<br/>postdata:'.$postdata;
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL =>$this->getUrl(),
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS =>$postdata,
              CURLOPT_HTTPHEADER => $headers
            ));
            
            $response = curl_exec($curl);
            curl_close($curl);
            //echo 'response from encoded'.$response;
            return $response;
    }

    function send_mail($codeDiag){
         //Import PHPMailer classes into the global namespace
         //These must be at the top of your script, not inside a function
         $mail = new PHPMailer;
         $mail->IsSMTP();
         $mail->Host = 'mail.mimoapps.xyz';
         $mail->Port = 587;
         $mail->SMTPAuth = true;
         $mail->Username = 'notification@mimoapps.xyz';
         $mail->Password = 'mimo241203@@##$$%%^^';
         $mail->SMTPSecure = 'tls';
         
         $mail->From = "notification@mimoapps.xyz";
         $mail->FromName = "Notification-Matahari";
         // $mail->AddAddress("claudiacherry2710@gmail.com", "cherry");
         $mail->AddAddress("aherijanto@gmail.com", "parker");
         $mail->WordWrap = 50;
         $mail->IsHTML(true);
         $mail->Subject = "[NOTIFICATION] Test Email Bulk Matahari";
         $mail->Body = "<html>
                        <body>
                              <p>Halo</p>
                              <p>Terdeksi aktivitas untuk edit Invoice nomor TESTING001</p>
                              <p>Berikut adalah PIN untuk konfirmasi edit : 12345ABC</p>
                              <p>PIN berlaku selama 1 menit, apabila Anda mengkonfirmasi bahwa aktivitas ini adalah aman,</p>
                              <p>silakan untuk melanjutkan proses, atau abaikan apabila terdapat aktivitas mencurigakan</p>
                              <br/><br/><br/>
                              <p>Salam,</[>
                              <p>Cappa Database Technologies</p>
                        </body>
                        </html>";
            $mail->addAttachment('/var/www/vclaim/diagnosa/json_result/'.$codeDiag.'.json');
         
         $mail->SMTPOptions = array(
                     'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                     )
                  );

         if(!$mail->Send()){
                     echo 'Error : '.$mail->ErrorInfo;;
                     
                     echo 'ERROR';
         }else{
            echo 'success,.email notification sent...';
         }


         }
 }
    //     $p = new Encoded();
    //     $p->setInit();
    //    echo  $p->populateResponse();

?>