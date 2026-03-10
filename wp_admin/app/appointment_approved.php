<?php
	include 'includes/session.php';

	if(isset($_POST['submit'])){
		$APP_ID =$_POST['APP_ID'];
		$REMARKS = $conn->real_escape_string($_POST['REMARKS']);
		$APP_STATUS=$_POST['APP_STATUS'];
		$DATE_ACTION=date('Y-m-d');
		$sms_date=$_POST['sms_date'];
		$sms_time=$_POST['sms_time'];
		$sms_number=$_POST['sms_number'];
		$sms_name=$_POST['sms_name'];
		$MOBILE=$_POST['sms_mobile'];
		$stmt="UPDATE tbl_appointment SET APP_STATUS=?, DATE_ACTION=?, REMARKS=? WHERE APP_ID=?";
		$stmt=$conn->prepare($stmt);
		$stmt->bind_param('ssss',$APP_STATUS,$DATE_ACTION,$REMARKS, $APP_ID);
		if($stmt->execute()){
            $_SESSION['success'] ="Successfully Updated!";
            audit_log($conn,$user,'Appointment Status',"$APP_ID -> $APP_STATUS");
		
				if($APP_STATUS=="Pending"){
				$NOTFICATION_SMS ="Hi $sms_name , we received your appointment request for date: $sms_date $sms_time Ref: $sms_number. It’s currently pending approval. We’ll update you shortly. St.Philip Benizi Parish";
			   }elseif($APP_STATUS=="Approved"){
				$NOTFICATION_SMS ="Hi $sms_name, your appointment on $sms_date $sms_time Ref: $sms_number has been approved. Please arrive on time. Thank you! St.Philip Benizi Parish";
			   }elseif($APP_STATUS=="Completed"){
				$NOTFICATION_SMS ="Hi $sms_name , your appointment on $sms_date $sms_time Ref: $sms_number is now completed. Thank you for visiting us! St.Philip Benizi Parish";
			   }elseif($APP_STATUS=="Rejected"){
				$NOTFICATION_SMS ="Hi $sms_name, we’re sorry your appointment request for $sms_date $sms_time Ref: $sms_number was not approved. Please contact us to reschedule. St.Philip Benizi Parish";
			   }
               // Send SMS asynchronously to avoid blocking the UI
               $hostHeader = $_SERVER['HTTP_HOST'];
               $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
               $path = $base.'/sms_async.php';
               $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
               $host = $hostHeader;
               $port = $isHttps ? 443 : 80;
               if (strpos($hostHeader, ':') !== false) {
                   list($host, $portStr) = explode(':', $hostHeader, 2);
                   $port = (int)$portStr;
               }
               $transportHost = ($isHttps ? 'ssl://' : '').$host;
               $postData = http_build_query([
                   'mobile' => $MOBILE,
                   'message' => $NOTFICATION_SMS
               ]);
               $fp = @fsockopen($transportHost, $port, $errno, $errstr, 1);
               if ($fp) {
                   $out = "POST ".$path." HTTP/1.1\r\n";
                   $out .= "Host: ".$hostHeader."\r\n";
                   $out .= "Content-Type: application/x-www-form-urlencoded\r\n";
                   $out .= "Content-Length: ".strlen($postData)."\r\n";
                   $out .= "Connection: Close\r\n\r\n";
                   $out .= $postData;
                   fwrite($fp, $out);
                   fclose($fp);
               } else {
                   // Fallback to direct sending if socket open fails
                   require_once('sms_script.php');
               }
               if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])==='xmlhttprequest'){
                   header('Content-Type: application/json');
                   echo json_encode(['status'=>'success','message'=>'Appointment status updated']);
                   exit;
               }
        }else{
			$_SESSION['error'] = $conn->error;
            if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])==='xmlhttprequest'){
                header('Content-Type: application/json');
                echo json_encode(['status'=>'error','message'=>'Update failed']);
                exit;
            }
		}
	}
	else{
		$_SESSION['error'] = 'Opps!! somthing went wrong!!';
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])==='xmlhttprequest'){
            header('Content-Type: application/json');
            echo json_encode(['status'=>'error','message'=>'Invalid request']);
            exit;
        }
	}
    $return = isset($_POST['return']) ? $_POST['return'] : 'appointment_pending.php?home=appointment_pending';
	header('location:'.$return);
?>
