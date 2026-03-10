<?php
   include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'pre-jordan-attendance-record.php';
	}

    if(isset($_GET['JORID'])){
        $JORID=intval($_GET['JORID']);
        $sql="DELETE FROM tbl_pre_jordan WHERE JORID ='$JORID'";
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