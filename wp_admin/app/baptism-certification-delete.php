<?php
   include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'baptism-certification-record.php?home=baptism';
	}

    if(isset($_GET['BAPID'])){
        $BAPID=intval($_GET['BAPID']);
        $sql="DELETE FROM tbl_batism_certification WHERE BAPID ='$BAPID'";
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