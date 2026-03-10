<?php
   include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'confirmation-certification-record.php';
	}

    if(isset($_GET['CONFID'])){
        $CONFID=intval($_GET['CONFID']);
        $sql="DELETE FROM tbl_confirmation_certificate WHERE CONFID ='$CONFID'";
        if($conn ->query($sql)){
            $_SESSION['success'] ="Record has been successfully deleted";
        }else{
            $_SESSION['error'] ="No record deleted!";
        }
    }else{
        $_SESSION['error'] ="Please select first the record to delete";
    }
    header('location:'.$return);
?>