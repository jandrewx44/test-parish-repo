<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'contact.php';
	}

	if(isset($_POST['submit'])){			
		$PROVIDER=strtoupper($_POST['PROVIDER']);
		$MOBILENO=$_POST['MOBILENO'];
		$sql= "INSERT INTO tbl_contact(PROVIDER,MOBILENO)VALUES('$PROVIDER','$MOBILENO')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'New contact have been created.';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	

	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
		
	}
	//header('location: clientAccount.php?q='.$_POST['id']);
	header('location:'.$return);
?>