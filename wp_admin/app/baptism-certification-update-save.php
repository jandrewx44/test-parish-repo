<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'baptism-certification-record.php?home=certificates_form';
	}else{
		$return = 'baptism-certification-record.php?home=certificates_form';
	}

	if(isset($_POST['submit'])){			
		
		$BAPID   		=mysqli_real_escape_string($conn,($_POST['BAPID']));
		$CHILDNAME   		=mysqli_real_escape_string($conn,($_POST['CHILDNAME']));
        $DOB   	=mysqli_real_escape_string($conn,($_POST['DOB']));
        $POB   	=mysqli_real_escape_string($conn,($_POST['POB']));
		$FATHER   	=mysqli_real_escape_string($conn,($_POST['FATHER']));
		$MOTHER   	=mysqli_real_escape_string($conn,($_POST['MOTHER']));
		$PARENTS_ADDRESS   	=mysqli_real_escape_string($conn,($_POST['PARENTS_ADDRESS']));
		$CHURCH_NAME   	=mysqli_real_escape_string($conn,($_POST['CHURCH_NAME']));
		$CHURCH_ADDRESS   	=mysqli_real_escape_string($conn,($_POST['CHURCH_ADDRESS']));
		$DOB_BAPTISM   	=mysqli_real_escape_string($conn,($_POST['DOB_BAPTISM']));
		$BAPTIZED_BY   	=mysqli_real_escape_string($conn,($_POST['BAPTIZED_BY']));
		$SPONSORS   	=mysqli_real_escape_string($conn,($_POST['SPONSORS']));
		$NOTATIONS   	=mysqli_real_escape_string($conn,($_POST['NOTATIONS']));
		$GIVEN_DAY   	=mysqli_real_escape_string($conn,($_POST['GIVEN_DAY']));
		$GIVEN_MONTH   	=mysqli_real_escape_string($conn,($_POST['GIVEN_MONTH']));
		$GIVEN_YEAR   	=mysqli_real_escape_string($conn,($_POST['GIVEN_YEAR']));
		$BOOK_NO   	=mysqli_real_escape_string($conn,($_POST['BOOK_NO']));
		$PAGE_NO   	=mysqli_real_escape_string($conn,($_POST['PAGE_NO']));
		$REG_NO   	=mysqli_real_escape_string($conn,($_POST['REG_NO']));
		$DATE_UPDATED =date('Y-m-d');
		
		$sql= "UPDATE tbl_batism_certification
		SET CHILDNAME='$CHILDNAME',
		DOB='$DOB',
		POB='$POB',
		FATHER='$FATHER',
		MOTHER='$MOTHER',
		PARENTS_ADDRESS='$PARENTS_ADDRESS',
		CHURCH_NAME='$CHURCH_NAME',
		CHURCH_ADDRESS='$CHURCH_ADDRESS',
		DOB_BAPTISM='$DOB_BAPTISM',
		BAPTIZED_BY='$BAPTIZED_BY',
		SPONSORS='$SPONSORS',
		NOTATIONS='$NOTATIONS',
		GIVEN_DAY='$GIVEN_DAY',
		GIVEN_MONTH='$GIVEN_MONTH',
		GIVEN_YEAR='$GIVEN_YEAR',
		BOOK_NO='$BOOK_NO',
		PAGE_NO='$PAGE_NO',
		REG_NO='$REG_NO',
		DATE_UPDATED='$DATE_UPDATED'
		WHERE BAPID='$BAPID'";
		
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