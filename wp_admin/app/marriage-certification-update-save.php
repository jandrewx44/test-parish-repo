<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'marriage-certification-record.php';
	}else{
		$return = 'marriage-certification-record.php';
	}

	if(isset($_POST['submit'])){			
		
		$MARRIAGEID    		=mysqli_real_escape_string($conn,($_POST['MARRIAGEID']));
		$GROOM_NAME   		=mysqli_real_escape_string($conn,(ucwords($_POST['GROOM_NAME'])));
		$GROOM_RESIDENCE   	=mysqli_real_escape_string($conn,(ucwords($_POST['GROOM_RESIDENCE'])));
        $GROOM_FATHER  		=mysqli_real_escape_string($conn,(ucwords($_POST['GROOM_FATHER'])));
		$GROOM_MOTHER   	=mysqli_real_escape_string($conn,(ucwords($_POST['GROOM_MOTHER'])));
		$BRIDE_NAME   		=mysqli_real_escape_string($conn,(ucwords($_POST['BRIDE_NAME'])));
		$BRIDE_RESIDENCE   	=mysqli_real_escape_string($conn,(ucwords($_POST['BRIDE_RESIDENCE'])));
		$BRIDE_FATHER   	=mysqli_real_escape_string($conn,(ucwords($_POST['BRIDE_FATHER'])));
		$BRIDE_MOTHER   	=mysqli_real_escape_string($conn,(ucwords($_POST['BRIDE_MOTHER'])));
		$PLACE_OF_MARRIAGE  =mysqli_real_escape_string($conn,(ucwords($_POST['PLACE_OF_MARRIAGE'])));
		$DATE_OF_MARRIAGE   =mysqli_real_escape_string($conn,(ucwords($_POST['DATE_OF_MARRIAGE'])));
		$NAME_OF_WITNESS    =mysqli_real_escape_string($conn,(ucwords($_POST['NAME_OF_WITNESS'])));
		$SOLEMNIZING_PRIEST =mysqli_real_escape_string($conn,(ucwords($_POST['SOLEMNIZING_PRIEST'])));
		$GIVEN_DAY   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_DAY'])));
		$GIVEN_MONTH   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_MONTH'])));
		$GIVEN_YEAR   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_YEAR'])));
		$DATE_UPDATED =date('Y-m-d');
		
		$sql= "UPDATE tbl_marriage_certificate
		SET GROOM_NAME='$GROOM_NAME',
		GROOM_RESIDENCE='$GROOM_RESIDENCE',
		GROOM_FATHER='$GROOM_FATHER',
		GROOM_MOTHER='$GROOM_MOTHER',
		BRIDE_NAME='$BRIDE_NAME',
		BRIDE_RESIDENCE='$BRIDE_RESIDENCE',
		BRIDE_FATHER='$BRIDE_FATHER',
		BRIDE_MOTHER='$BRIDE_MOTHER',
		PLACE_OF_MARRIAGE='$PLACE_OF_MARRIAGE',
		DATE_OF_MARRIAGE='$DATE_OF_MARRIAGE',
		NAME_OF_WITNESS='$NAME_OF_WITNESS',
		SOLEMNIZING_PRIEST='$SOLEMNIZING_PRIEST',
		GIVEN_DAY='$GIVEN_DAY',
		GIVEN_MONTH='$GIVEN_MONTH',
		GIVEN_YEAR='$GIVEN_YEAR',
		DATE_UPDATED='$DATE_UPDATED'
		WHERE MARRIAGEID ='$MARRIAGEID'";
		
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