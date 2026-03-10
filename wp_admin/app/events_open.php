<?php
	
	include 'includes/session.php';

	if(isset($_GET['q'])){
		$sql = "UPDATE tbl_events SET STATUS='0' WHERE ID=".$_GET['q'];
		if($conn->query($sql)){
			$_SESSION['success'] = 'Successfully Updated!';
			
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Opps!! somthing went wrong!!';
	}
header('location: events.php');
?>