<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'pre-jordan-attendance-record.php';
	}else{
		$return = 'pre-jordan-attendance-record.php';
	}

	if(isset($_POST['submit'])){			
		
        $JORID   			=mysqli_real_escape_string($conn,($_POST['JORID']));
		$CERTIFICATE_TO   	=mysqli_real_escape_string($conn,($_POST['CERTIFICATE_TO']));
        $CERTIFICATE_ON   	=mysqli_real_escape_string($conn,($_POST['CERTIFICATE_ON']));
        $CERTIFICATE_AT   	=mysqli_real_escape_string($conn,($_POST['CERTIFICATE_AT']));
		$GIVEN_THIS   	=mysqli_real_escape_string($conn,($_POST['GIVEN_THIS']));
		$DAY_OF   	=mysqli_real_escape_string($conn,($_POST['DAY_OF']));
		$YEAR   	=mysqli_real_escape_string($conn,($_POST['YEAR']));
		$DATE_UPDATED 	=date('Y-m-d');
		
		$sql= "UPDATE tbl_pre_jordan
		SET CERTIFICATE_TO='$CERTIFICATE_TO',
		CERTIFICATE_ON='$CERTIFICATE_ON',
		CERTIFICATE_AT='$CERTIFICATE_AT',
		GIVEN_THIS='$GIVEN_THIS',
		DAY_OF='$DAY_OF',
		YEAR='$YEAR',
		DATE_UPDATED='$DATE_UPDATED'
		WHERE JORID='$JORID'";
		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Updated successfully!';
		}else{
			$_SESSION['error'] = $conn->error;
		}
	
	}else{
		$_SESSION['error'] = 'Fill up add form first';
		
	}
	header('location:'.$return);
?>