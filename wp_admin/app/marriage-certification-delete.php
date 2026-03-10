<?php
   include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'marriage-certification-record.php';
	}

    if(isset($_GET['MARRIAGEID'])){
        $MARRIAGEID=intval($_GET['MARRIAGEID']);
        $sql="DELETE FROM tbl_marriage_certificate WHERE MARRIAGEID ='$MARRIAGEID'";
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