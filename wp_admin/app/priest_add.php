<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}else{
		$return = 'priest.php?name=priest';
	}

	if(isset($_POST['submit'])){			
		$PRIEST_NAME = str_replace('ñ', 'Ñ', strtoupper($_POST['PRIEST_NAME']));
		$PRIEST_DEFAULT = $_POST["PRIEST_DEFAULT"];

		$sql="INSERT INTO `tbl_priest`(`PRIEST_NAME`, `PRIEST_DEFAULT`) 
		VALUES ('$PRIEST_NAME','$PRIEST_DEFAULT')";
		if($conn->query($sql)){
			$_SESSION['success']='New record has been successfully added!';
		}else{
			$_SESSION['error']='Opps! we have error while saving your data';
		}

	}else{
		$_SESSION['error'] = 'Fill up add form first';
		
	}
	header('location:'.$return);
?>
