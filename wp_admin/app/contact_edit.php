<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'contact.php';
	}

	if(isset($_POST['submit'])){
		$ID 		= $_POST['id'];
		$PROVIDER     	=strtoupper($_POST['PROVIDER']);
		$MOBILENO     	=$_POST['MOBILENO'];
		$sql="UPDATE `tbl_contact` 
		SET `PROVIDER`='$PROVIDER', MOBILENO='$MOBILENO' WHERE ID = '$ID'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Contact updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select recird to edit first';
	}

	header('location:'.$return);
?>