<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'certificates_form.php';
	}
	else{
		$return = 'certificates_form.php';
	}

	if(isset($_POST['noconfirmation_submit'])){			
		
        $NO_BAP_NAME   		=mysqli_real_escape_string($conn,(ucwords($_POST['NO_BAP_NAME'])));
        $NO_BAP_REQUEST_OF	=mysqli_real_escape_string($conn,(ucwords($_POST['NO_BAP_REQUEST_OF'])));
		$GIVEN_DAY   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_DAY'])));
		$GIVEN_MONTH   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_MONTH'])));
		$GIVEN_YEAR   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_YEAR'])));
		$DATE_ISSUED 		=date('Y-m-d');
		
		$sql= "INSERT INTO `tbl_no_confirmation_certificate`(`NO_BAP_NAME`, `NO_BAP_REQUEST_OF`, `GIVEN_DAY`, `GIVEN_MONTH`, `GIVEN_YEAR`, `DATE_ISSUED`)
		VALUES ('$NO_BAP_NAME','$NO_BAP_REQUEST_OF','$GIVEN_DAY','$GIVEN_MONTH','$GIVEN_YEAR','$DATE_ISSUED')";
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