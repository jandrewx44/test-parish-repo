<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'certificates_form.php';
	}
	else{
		$return = 'certificates_form.php';
	}

	if(isset($_POST['outside_marriage_submit'])){			
		
		
		$PRIEST_NAME   		=mysqli_real_escape_string($conn,(ucwords($_POST['PRIEST_NAME'])));
		$PARISHIONER   		=mysqli_real_escape_string($conn,(ucwords($_POST['PARISHIONER'])));
		$CHECKBOX_ONE   	=mysqli_real_escape_string($conn,(ucwords($_POST['CHECKBOX_ONE'])));
		$CHECKBOX_TWO   	=mysqli_real_escape_string($conn,(ucwords($_POST['CHECKBOX_TWO'])));
		$GIVEN_DAY   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_DAY'])));
		$GIVEN_MONTH   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_MONTH'])));
		$GIVEN_YEAR   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_YEAR'])));
		$DATE_ISSUED 		=date('Y-m-d');
		
		$sql= "INSERT INTO `tbl_marriage_outside_certificate`(`PRIEST_NAME`,`PARISHIONER`, `CHECKBOX_ONE`, `CHECKBOX_TWO`, `GIVEN_DAY`, `GIVEN_MONTH`, `GIVEN_YEAR`, `DATE_ISSUED`)
		VALUES ('$PRIEST_NAME','$PARISHIONER','$CHECKBOX_ONE','$CHECKBOX_TWO','$GIVEN_DAY','$GIVEN_MONTH','$GIVEN_YEAR','$DATE_ISSUED')";
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