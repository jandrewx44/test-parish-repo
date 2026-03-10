<?php
   include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'marriage-outside-certification-record.php';
	}

    if(isset($_GET['MARRID'])){
        $MARRID=intval($_GET['MARRID']);
        $sql="DELETE FROM tbl_marriage_outside_certificate WHERE MARRID ='$MARRID'";
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