<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'confirmation-certification-record.php';
	}else{
		$return = 'confirmation-certification-record.php';
	}

	if(isset($_POST['submit'])){			
		
		$CONFID    		=mysqli_real_escape_string($conn,($_POST['CONFID']));
		$CHILDNAME   		=mysqli_real_escape_string($conn,($_POST['CHILDNAME']));
        $DOB_BAPTISM   	=mysqli_real_escape_string($conn,($_POST['DOB_BAPTISM']));
        $PLACE_OF_BAPTISM   	=mysqli_real_escape_string($conn,($_POST['PLACE_OF_BAPTISM']));
		$FATHER   	=mysqli_real_escape_string($conn,($_POST['FATHER']));
		$MOTHER   	=mysqli_real_escape_string($conn,($_POST['MOTHER']));
		$PARENTS_ADDRESS   	=mysqli_real_escape_string($conn,($_POST['PARENTS_ADDRESS']));
		$CHURCH_NAME   	=mysqli_real_escape_string($conn,($_POST['CHURCH_NAME']));
		$CHURCH_ADDRESS   	=mysqli_real_escape_string($conn,($_POST['CHURCH_ADDRESS']));
		$CONFIRMED_DATE   	=mysqli_real_escape_string($conn,($_POST['CONFIRMED_DATE']));
		$CONFIRMED_BY   	=mysqli_real_escape_string($conn,($_POST['CONFIRMED_BY']));
		$SPONSORS   	=mysqli_real_escape_string($conn,($_POST['SPONSORS']));
		$NOTATIONS   	=mysqli_real_escape_string($conn,($_POST['NOTATIONS']));
		$GIVEN_DAY   	=mysqli_real_escape_string($conn,($_POST['GIVEN_DAY']));
		$GIVEN_MONTH   	=mysqli_real_escape_string($conn,($_POST['GIVEN_MONTH']));
		$GIVEN_YEAR   	=mysqli_real_escape_string($conn,($_POST['GIVEN_YEAR']));
		$BOOK_NO   	=mysqli_real_escape_string($conn,($_POST['BOOK_NO']));
		$PAGE_NO   	=mysqli_real_escape_string($conn,($_POST['PAGE_NO']));
		$REG_NO   	=mysqli_real_escape_string($conn,($_POST['REG_NO']));
		$DATE_UPDATED =date('Y-m-d');
		
		$sql= "UPDATE tbl_confirmation_certificate
		SET CHILDNAME='$CHILDNAME',
		DOB_BAPTISM='$DOB_BAPTISM',
		PLACE_OF_BAPTISM='$PLACE_OF_BAPTISM',
		FATHER='$FATHER',
		MOTHER='$MOTHER',
		PARENTS_ADDRESS='$PARENTS_ADDRESS',
		CHURCH_NAME='$CHURCH_NAME',
		CHURCH_ADDRESS='$CHURCH_ADDRESS',
		CONFIRMED_DATE='$CONFIRMED_DATE',
		CONFIRMED_BY='$CONFIRMED_BY',
		SPONSORS='$SPONSORS',
		NOTATIONS='$NOTATIONS',
		GIVEN_DAY='$GIVEN_DAY',
		GIVEN_MONTH='$GIVEN_MONTH',
		GIVEN_YEAR='$GIVEN_YEAR',
		BOOK_NO='$BOOK_NO',
		PAGE_NO='$PAGE_NO',
		REG_NO='$REG_NO',
		DATE_UPDATED='$DATE_UPDATED'
		WHERE CONFID ='$CONFID '";
		
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