<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'certificates_form.php';
	}
	else{
		$return = 'certificates_form.php';
	}

	if(isset($_POST['moral_submit'])){			
		
        $CHILDNAME   		=mysqli_real_escape_string($conn,(ucwords($_POST['CHILDNAME'])));
		$FATHER   			=mysqli_real_escape_string($conn,(ucwords($_POST['FATHER'])));
		$MOTHER   			=mysqli_real_escape_string($conn,(ucwords($_POST['MOTHER'])));
		$PARENTS_ADDRESS   	=mysqli_real_escape_string($conn,(ucwords($_POST['PARENTS_ADDRESS'])));
		$FINISHED_IN   		=mysqli_real_escape_string($conn,(ucwords($_POST['FINISHED_IN'])));
		$MONTH   			=mysqli_real_escape_string($conn,(ucwords($_POST['MONTH'])));
		$YEAR   			=mysqli_real_escape_string($conn,(ucwords($_POST['YEAR'])));
		$DEGREE_OF   		=mysqli_real_escape_string($conn,(ucwords($_POST['DEGREE_OF'])));
		$REQUEST_FOR   		=mysqli_real_escape_string($conn,(ucwords($_POST['REQUEST_FOR'])));
		$GIVEN_DAY   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_DAY'])));
		$GIVEN_MONTH   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_MONTH'])));
		$GIVEN_YEAR   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_YEAR'])));
		$DATE_ISSUED 		=date('Y-m-d');
		
		$sql= "INSERT INTO `tbl_good_moral`(`CHILDNAME`, `FATHER`, `MOTHER`, `PARENTS_ADDRESS`, `FINISHED_IN`, `MONTH`, `YEAR`, `DEGREE_OF`, `REQUEST_FOR`, `GIVEN_DAY`, `GIVEN_MONTH`, `GIVEN_YEAR`, `DATE_ISSUED`)
		VALUES ('$CHILDNAME','$FATHER','$MOTHER','$PARENTS_ADDRESS','$FINISHED_IN','$MONTH','$YEAR','$DEGREE_OF','$REQUEST_FOR','$GIVEN_DAY','$GIVEN_MONTH','$GIVEN_YEAR','$DATE_ISSUED')";
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