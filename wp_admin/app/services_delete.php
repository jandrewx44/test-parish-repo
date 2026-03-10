<?php
    include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'services.php?home=services';
	}

    if(isset($_POST['submit'])){

        $sql="DELETE FROM tbl_services WHERE DID=?";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param('s',$_POST['DID']);
        if($stmt->execute()){
            $_SESSION['success'] ="Services has been successfully deleted";
            audit_log($conn,$user,'Service Deleted',"ID: ".$_POST['DID']);
        }else{
            $_SESSION['error'] ="No record deleted!";
        }
    }else{
        $_SESSION['error'] ="Please select first the record to delete";
    }
    header('location:'.$return);
?>
