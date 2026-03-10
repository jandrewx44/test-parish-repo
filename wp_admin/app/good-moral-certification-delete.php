<?php
   include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'good-moral-certification-record.php';
	}

    if(isset($_GET['GOODID'])){
        $GOODID=intval($_GET['GOODID']);
        $sql="DELETE FROM tbl_good_moral WHERE GOODID ='$GOODID'";
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