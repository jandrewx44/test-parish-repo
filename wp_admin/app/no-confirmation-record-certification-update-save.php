<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'no-confirmation-record-certification-record.php';
	}else{
		$return = 'no-confirmation-record-certification-record.php';
	}

	if(isset($_POST['submit'])){			
		
		$NOCONID   		=mysqli_real_escape_string($conn,($_POST['NOCONID']));
		$NO_BAP_NAME   		=mysqli_real_escape_string($conn,($_POST['NO_BAP_NAME']));
        $NO_BAP_REQUEST_OF   	=mysqli_real_escape_string($conn,($_POST['NO_BAP_REQUEST_OF']));
		$GIVEN_DAY   	=mysqli_real_escape_string($conn,($_POST['GIVEN_DAY']));
		$GIVEN_MONTH   	=mysqli_real_escape_string($conn,($_POST['GIVEN_MONTH']));
		$GIVEN_YEAR   	=mysqli_real_escape_string($conn,($_POST['GIVEN_YEAR']));
		$DATE_UPDATED =date('Y-m-d');
		
		$sql= "UPDATE tbl_no_confirmation_certificate
		SET NO_BAP_NAME='$NO_BAP_NAME',
		NO_BAP_REQUEST_OF='$NO_BAP_REQUEST_OF',
		GIVEN_DAY='$GIVEN_DAY',
		GIVEN_MONTH='$GIVEN_MONTH',
		GIVEN_YEAR='$GIVEN_YEAR',
		DATE_UPDATED='$DATE_UPDATED'
		WHERE NOCONID='$NOCONID'";
		
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