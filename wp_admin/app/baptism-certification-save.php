<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'certificates_form.php?home=certificates_form';
	}
	else{
		$return = 'certificates_form.php?home=certificates_form';
	}
function generateRandomString($length = 5) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}
$AUTONUM=date('Ymd').generateRandomString();

	if(isset($_POST['baptism_submit'])){			
		
        $CHILDNAME   	=mysqli_real_escape_string($conn,(ucwords($_POST['CHILDNAME'])));
        $DOB   			=mysqli_real_escape_string($conn,(ucwords($_POST['DOB'])));
        $POB   			=mysqli_real_escape_string($conn,(ucwords($_POST['POB'])));
		$FATHER   		=mysqli_real_escape_string($conn,(ucwords($_POST['FATHER'])));
		$MOTHER   		=mysqli_real_escape_string($conn,(ucwords($_POST['MOTHER'])));
		$PARENTS_ADDRESS=mysqli_real_escape_string($conn,(ucwords($_POST['PARENTS_ADDRESS'])));
		$CHURCH_NAME   	=mysqli_real_escape_string($conn,(ucwords($_POST['CHURCH_NAME'])));
		$CHURCH_ADDRESS =mysqli_real_escape_string($conn,(ucwords($_POST['CHURCH_ADDRESS'])));
		$DOB_BAPTISM   	=mysqli_real_escape_string($conn,(ucwords($_POST['DOB_BAPTISM'])));
		$BAPTIZED_BY   	=mysqli_real_escape_string($conn,(ucwords($_POST['BAPTIZED_BY'])));
		$SPONSORS   	=mysqli_real_escape_string($conn,(ucwords($_POST['SPONSORS'])));
		$NOTATIONS   	=mysqli_real_escape_string($conn,(ucwords($_POST['NOTATIONS'])));
		$GIVEN_DAY   	=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_DAY'])));
		$GIVEN_MONTH   	=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_MONTH'])));
		$GIVEN_YEAR   	=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_YEAR'])));
		$BOOK_NO   		=mysqli_real_escape_string($conn,(ucwords($_POST['BOOK_NO'])));
		$PAGE_NO   		=mysqli_real_escape_string($conn,(ucwords($_POST['PAGE_NO'])));
		$REG_NO   		=mysqli_real_escape_string($conn,(ucwords($_POST['REG_NO'])));
		$DATE_ISSUED 	=date('Y-m-d');
		
		$sql= "INSERT INTO `tbl_batism_certification`(`CHILDNAME`, `DOB`, `POB`, `FATHER`, `MOTHER`, `PARENTS_ADDRESS`, `CHURCH_NAME`, `CHURCH_ADDRESS`, `DOB_BAPTISM`, `BAPTIZED_BY`, `SPONSORS`, `NOTATIONS`, `GIVEN_DAY`, `GIVEN_MONTH`, `GIVEN_YEAR`, `BOOK_NO`, `PAGE_NO`, `REG_NO`, `DATE_ISSUED`)
		VALUES ('$CHILDNAME','$DOB','$POB','$FATHER','$MOTHER','$PARENTS_ADDRESS','$CHURCH_NAME','$CHURCH_ADDRESS','$DOB_BAPTISM','$BAPTIZED_BY','$SPONSORS','$NOTATIONS','$GIVEN_DAY','$GIVEN_MONTH','$GIVEN_YEAR','$BOOK_NO','$PAGE_NO','$REG_NO','$DATE_ISSUED')";
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