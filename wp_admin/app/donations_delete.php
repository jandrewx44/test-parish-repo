<?php
    include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'donations.php';
	}

    if(isset($_POST['submit'])){
        $ID=$_POST['ID'];
        $sql="DELETE FROM tbl_donations WHERE ID='$ID'";
        if($conn ->query($sql)){
            $_SESSION['success'] ="Record has been successfully deleted";
            audit_log($conn,$user,'Donation Deleted',"ID: $ID");
        }else{
            $_SESSION['error'] ="No record deleted!";
        }
    }else{
        $_SESSION['error'] ="Please select first the record to delete";
    }
    header('location:'.$return);
?>
