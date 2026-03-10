<?php
   include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'permission-baptism-certification-record.php';
	}

    if(isset($_GET['PERID'])){
        $PERID=intval($_GET['PERID']);
        $sql="DELETE FROM tbl_permission_baptism_certificate WHERE PERID ='$PERID'";
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