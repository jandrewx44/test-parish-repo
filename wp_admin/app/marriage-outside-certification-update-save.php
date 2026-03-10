<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'marriage-outside-certification-record.php';
	}else{
		$return = 'marriage-outside-certification-record.php';
	}

	if(isset($_POST['submit'])){			
		$MARRID 			=$_POST['MARRID'];
		$PRIEST_NAME   		=mysqli_real_escape_string($conn,(ucwords($_POST['PRIEST_NAME'])));
		$PARISHIONER   		=mysqli_real_escape_string($conn,(ucwords($_POST['PARISHIONER'])));
		$CHECKBOX_ONE   	=mysqli_real_escape_string($conn,(ucwords($_POST['CHECKBOX_ONE'])));
		$CHECKBOX_TWO   	=mysqli_real_escape_string($conn,(ucwords($_POST['CHECKBOX_TWO'])));
		$GIVEN_DAY   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_DAY'])));
		$GIVEN_MONTH   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_MONTH'])));
		$GIVEN_YEAR   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_YEAR'])));
		$DATE_UPDATED 		=date('Y-m-d');
		
		$sql= "UPDATE tbl_marriage_outside_certificate
		SET PRIEST_NAME='$PRIEST_NAME',
		PARISHIONER='$PARISHIONER',
		CHECKBOX_ONE='$CHECKBOX_ONE',
		CHECKBOX_TWO='$CHECKBOX_TWO',
		GIVEN_DAY='$GIVEN_DAY',
		GIVEN_MONTH='$GIVEN_MONTH',
		GIVEN_YEAR='$GIVEN_YEAR',
		DATE_UPDATED='$DATE_UPDATED'
		WHERE MARRID='$MARRID'";
		
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