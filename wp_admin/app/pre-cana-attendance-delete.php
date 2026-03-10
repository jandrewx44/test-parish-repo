<?php
   include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'pre-cana-attendance-record.php';
	}

    if(isset($_GET['PRE_ID'])){
        $PRE_ID=intval($_GET['PRE_ID']);
        $sql="DELETE FROM tbl_pre_cana WHERE PRE_ID ='$PRE_ID'";
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