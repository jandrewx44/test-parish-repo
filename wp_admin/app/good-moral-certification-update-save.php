<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'good-moral-certification-record.php';
	}else{
		$return = 'good-moral-certification-record.php';
	}

	if(isset($_POST['submit'])){			
		
		$GOODID    		=mysqli_real_escape_string($conn,($_POST['GOODID']));
		$CHILDNAME   	=mysqli_real_escape_string($conn,($_POST['CHILDNAME']));
		$FATHER   		=mysqli_real_escape_string($conn,($_POST['FATHER']));
		$MOTHER   		=mysqli_real_escape_string($conn,($_POST['MOTHER']));
		$PARENTS_ADDRESS=mysqli_real_escape_string($conn,($_POST['PARENTS_ADDRESS']));
		$FINISHED_IN   	=mysqli_real_escape_string($conn,($_POST['FINISHED_IN']));
		$MONTH   		=mysqli_real_escape_string($conn,($_POST['MONTH']));
		$YEAR   		=mysqli_real_escape_string($conn,($_POST['YEAR']));
		$DEGREE_OF   	=mysqli_real_escape_string($conn,($_POST['DEGREE_OF']));
		$REQUEST_FOR   	=mysqli_real_escape_string($conn,($_POST['REQUEST_FOR']));
		$GIVEN_DAY   	=mysqli_real_escape_string($conn,($_POST['GIVEN_DAY']));
		$GIVEN_MONTH   	=mysqli_real_escape_string($conn,($_POST['GIVEN_MONTH']));
		$GIVEN_YEAR   	=mysqli_real_escape_string($conn,($_POST['GIVEN_YEAR']));
		$DATE_UPDATED =date('Y-m-d');
		
		$sql= "UPDATE tbl_good_moral
		SET CHILDNAME='$CHILDNAME',
		FATHER='$FATHER',
		MOTHER='$MOTHER',
		PARENTS_ADDRESS='$PARENTS_ADDRESS',
		FINISHED_IN='$FINISHED_IN',
		MONTH='$MONTH',
		YEAR='$YEAR',
		DEGREE_OF='$DEGREE_OF',
		REQUEST_FOR='$REQUEST_FOR',
		GIVEN_DAY='$GIVEN_DAY',
		GIVEN_MONTH='$GIVEN_MONTH',
		GIVEN_YEAR='$GIVEN_YEAR',
		DATE_UPDATED='$DATE_UPDATED'
		WHERE GOODID ='$GOODID'";
		
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