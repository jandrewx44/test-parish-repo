<?php
   include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'appointment_pending.php?pending';
	}
    if(isset($_POST['APP_ID'])){
        $sql="DELETE FROM tbl_appointment WHERE APP_ID='".$_POST['APP_ID']."'";
        if($conn ->query($sql)){
            $_SESSION['success'] ="Record has been successfully deleted";
            audit_log($conn,$user,'Appointment Deleted',"APP_ID: ".$_POST['APP_ID']);
        }else{
            $_SESSION['error'] ="No record deleted!";
        }


    }else{
        $_SESSION['error'] ="Please select first the record to delete";
    }
    header('location:'.$return);
?>
