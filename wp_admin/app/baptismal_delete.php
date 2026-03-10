<?php
   include 'includes/session.php';
   $year =$_GET['year'];
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'baptismal_acView.php?year='.$year;
	}

    if(isset($_GET['q'])){
        $ID=$_GET['q'];
        $sql="DELETE FROM tbl_baptismal WHERE ID='$ID'";
        if($conn ->query($sql)){
            $_SESSION['success'] ="Record has been successfully deleted";
            audit_log($conn,$user,'Baptism Deleted',"ID: $ID");
        }else{
            $_SESSION['error'] ="No record deleted!";
        }
    }else{
        $_SESSION['error'] ="Please select first the record to delete";
    }
    header('location:'.$return);
?>
