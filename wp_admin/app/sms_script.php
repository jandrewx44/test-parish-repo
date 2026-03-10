<?php
include "includes/conn.php";

$stmt=$conn->prepare("SELECT ACTIVE, APIKEY, SENDERNAME, APILINK FROM tbl_sms");
if($stmt->execute()){
$sms=$stmt->get_result();
if($sms->num_rows>0){
        $sms_rows=$sms->fetch_assoc();
        $APIKEY=$sms_rows['APIKEY'];
        $SENDERNAME=$sms_rows['SENDERNAME'];
        $APILINK=$sms_rows['APILINK'];
        $ACTIVE=$sms_rows['ACTIVE'];

       if($ACTIVE=="YES"){
        $ch = curl_init();
        $parameters = array(
            'apikey' => $APIKEY,
            'number' => $MOBILE,
            'message' => $NOTFICATION_SMS,
            'sendername' => $SENDERNAME
        );
        
        // Ensure APILINK uses the faster api. subdomain if not present
        if (strpos($APILINK, 'https://semaphore.co') !== false) {
            $APILINK = str_replace('https://semaphore.co', 'https://api.semaphore.co', $APILINK);
        }

        curl_setopt($ch, CURLOPT_URL, $APILINK);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parameters));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        // Optimization: Speed up the cURL call
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5); // Timeout for connection
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);        // Total timeout for the request
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4); // Force IPv4 for faster DNS
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL peer verification for faster handshake (common fix for slow local environments)
        
        $output = curl_exec($ch);
        
        // Check for errors if needed (can be logged to a file)
        if (curl_errno($ch)) {
            // error_log('SMS cURL error: ' . curl_error($ch));
        }
        
        curl_close($ch);
       }else{

       }
    } 
}  
?>