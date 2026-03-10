<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'permission-baptism-certification-record.php';
	}else{
		$return = 'permission-baptism-certification-record.php';
	}

	if(isset($_POST['submit'])){			
		$PERID 				=$_POST['PERID'];
		$ENTRY_ONE   		=mysqli_real_escape_string($conn,(ucwords($_POST['ENTRY_ONE'])));
        $ENTRY_TWO			=mysqli_real_escape_string($conn,(ucwords($_POST['ENTRY_TWO'])));
		$ENTRY_THREE   		=mysqli_real_escape_string($conn,(ucwords($_POST['ENTRY_THREE'])));
		$ENTRY_FOUR   		=mysqli_real_escape_string($conn,(ucwords($_POST['ENTRY_FOUR'])));
		$PRIEST_NAME   		=mysqli_real_escape_string($conn,(ucwords($_POST['PRIEST_NAME'])));
		$PARISHIONER   		=mysqli_real_escape_string($conn,(ucwords($_POST['PARISHIONER'])));
		$CHILDNAME   		=mysqli_real_escape_string($conn,(ucwords($_POST['CHILDNAME'])));
		$GIVEN_DAY   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_DAY'])));
		$GIVEN_MONTH   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_MONTH'])));
		$GIVEN_YEAR   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_YEAR'])));
		$DATE_UPDATED =date('Y-m-d');
		
		$sql= "UPDATE tbl_permission_baptism_certificate
		SET ENTRY_ONE='$ENTRY_ONE',
		ENTRY_TWO='$ENTRY_TWO',
		ENTRY_THREE='$ENTRY_THREE',
		ENTRY_FOUR='$ENTRY_FOUR',
		PRIEST_NAME='$PRIEST_NAME',
		PARISHIONER='$PARISHIONER',
		CHILDNAME='$CHILDNAME',
		GIVEN_DAY='$GIVEN_DAY',
		GIVEN_MONTH='$GIVEN_MONTH',
		GIVEN_YEAR='$GIVEN_YEAR',
		DATE_UPDATED='$DATE_UPDATED'
		WHERE PERID='$PERID'";
		
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