<?php
   include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'no-confirmation-record-certification-record.php';
	}

    if(isset($_GET['NOCONID'])){
        $NOCONID=intval($_GET['NOCONID']);
        $sql="DELETE FROM tbl_no_confirmation_certificate WHERE NOCONID ='$NOCONID'";
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