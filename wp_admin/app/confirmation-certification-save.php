<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'certificates_form.php';
	}
	else{
		$return = 'certificates_form.php';
	}

	if(isset($_POST['confirm_submit'])){			
		
        $CHILDNAME   		=mysqli_real_escape_string($conn,(ucwords($_POST['CHILDNAME'])));
        $DOB_BAPTISM   		=$_POST['DOB_BAPTISM'];
        $PLACE_OF_BAPTISM  	=mysqli_real_escape_string($conn,(ucwords($_POST['PLACE_OF_BAPTISM'])));
		$FATHER   			=mysqli_real_escape_string($conn,(ucwords($_POST['FATHER'])));
		$MOTHER   			=mysqli_real_escape_string($conn,(ucwords($_POST['MOTHER'])));
		$PARENTS_ADDRESS   	=mysqli_real_escape_string($conn,(ucwords($_POST['PARENTS_ADDRESS'])));
		$CHURCH_NAME   		=mysqli_real_escape_string($conn,(ucwords($_POST['CHURCH_NAME'])));
		$CHURCH_ADDRESS   	=mysqli_real_escape_string($conn,(ucwords($_POST['CHURCH_ADDRESS'])));
		$CONFIRMED_DATE   	=mysqli_real_escape_string($conn,(ucwords($_POST['CONFIRMED_DATE'])));
		$CONFIRMED_BY   	=mysqli_real_escape_string($conn,(ucwords($_POST['CONFIRMED_BY'])));
		$SPONSORS   		=mysqli_real_escape_string($conn,(ucwords($_POST['SPONSORS'])));
		$NOTATIONS   		=mysqli_real_escape_string($conn,(ucwords($_POST['NOTATIONS'])));
		$GIVEN_DAY   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_DAY'])));
		$GIVEN_MONTH   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_MONTH'])));
		$GIVEN_YEAR   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_YEAR'])));
		$BOOK_NO   			=mysqli_real_escape_string($conn,(ucwords($_POST['BOOK_NO'])));
		$PAGE_NO   			=mysqli_real_escape_string($conn,(ucwords($_POST['PAGE_NO'])));
		$REG_NO   			=mysqli_real_escape_string($conn,(ucwords($_POST['REG_NO'])));
		$DATE_ISSUED 		=date('Y-m-d');
		
		$sql= "INSERT INTO `tbl_confirmation_certificate`(`CHILDNAME`, `DOB_BAPTISM`, `PLACE_OF_BAPTISM`, `FATHER`, `MOTHER`, `PARENTS_ADDRESS`, `CHURCH_NAME`, `CHURCH_ADDRESS`, `CONFIRMED_DATE`, `CONFIRMED_BY`, `SPONSORS`, `NOTATIONS`, `GIVEN_DAY`, `GIVEN_MONTH`, `GIVEN_YEAR`, `BOOK_NO`, `PAGE_NO`, `REG_NO`, `DATE_ISSUED`)
		VALUES ('$CHILDNAME','$DOB_BAPTISM','$PLACE_OF_BAPTISM','$FATHER','$MOTHER','$PARENTS_ADDRESS','$CHURCH_NAME','$CHURCH_ADDRESS','$CONFIRMED_DATE','$CONFIRMED_BY','$SPONSORS','$NOTATIONS','$GIVEN_DAY','$GIVEN_MONTH','$GIVEN_YEAR','$BOOK_NO','$PAGE_NO','$REG_NO','$DATE_ISSUED')";
			if($conn->query($sql)){
				$_SESSION['success'] = 'New record have been created.';
			}else{
				$_SESSION['error'] = $conn->error;
			}
	
	}else{
		$_SESSION['error'] = 'Fill up add form first';
		
	}
	//header('location: baptismal-changes-own-pdf-print.php?AUTONUM='.$AUTONUM);
	header('location:'.$return);
?>