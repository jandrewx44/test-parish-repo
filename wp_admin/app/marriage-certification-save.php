<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'certificates_form.php';
	}
	else{
		$return = 'certificates_form.php';
	}

	if(isset($_POST['marriage_submit'])){			
		
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
		$DATE_ISSUED 		=date('Y-m-d');
		
		$sql= "INSERT INTO `tbl_marriage_certificate`(`GROOM_NAME`, `GROOM_RESIDENCE`, `GROOM_FATHER`, `GROOM_MOTHER`, `BRIDE_NAME`, `BRIDE_RESIDENCE`, `BRIDE_FATHER`, `BRIDE_MOTHER`, `PLACE_OF_MARRIAGE`, `DATE_OF_MARRIAGE`, `NAME_OF_WITNESS`, `SOLEMNIZING_PRIEST`, `GIVEN_DAY`, `GIVEN_MONTH`, `GIVEN_YEAR`, `DATE_ISSUED`)
		VALUES ('$GROOM_NAME','$GROOM_RESIDENCE','$GROOM_FATHER','$GROOM_MOTHER','$BRIDE_NAME','$BRIDE_RESIDENCE','$BRIDE_FATHER','$BRIDE_MOTHER','$PLACE_OF_MARRIAGE','$DATE_OF_MARRIAGE','$NAME_OF_WITNESS','$SOLEMNIZING_PRIEST','$GIVEN_DAY','$GIVEN_MONTH','$GIVEN_YEAR','$DATE_ISSUED')";
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