<?php
   include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'no-baptism-record-certification-record.php';
	}

    if(isset($_GET['NOBAPID'])){
        $NOBAPID=intval($_GET['NOBAPID']);
        $sql="DELETE FROM tbl_no_baptism_certificate WHERE NOBAPID ='$NOBAPID'";
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