<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'certificates_form.php';
	}
	else{
		$return = 'certificates_form.php';
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

	if(isset($_POST['prejordan_submit'])){			
		
        $CERTIFICATE_TO   	=mysqli_real_escape_string($conn,(ucwords($_POST['CERTIFICATE_TO'])));
        $CERTIFICATE_ON   	=mysqli_real_escape_string($conn,(ucwords($_POST['CERTIFICATE_ON'])));
        $CERTIFICATE_AT   	=mysqli_real_escape_string($conn,(ucwords($_POST['CERTIFICATE_AT'])));
		$GIVEN_THIS   		=mysqli_real_escape_string($conn,(ucwords($_POST['GIVEN_THIS'])));
		$DAY_OF   			=mysqli_real_escape_string($conn,(ucwords($_POST['DAY_OF'])));
		$YEAR   			=mysqli_real_escape_string($conn,(ucwords($_POST['YEAR'])));
		$DATE_ISSUED 		=date('Y-m-d');
		
		$sql= "INSERT INTO tbl_pre_jordan(CERTIFICATE_TO, CERTIFICATE_ON, CERTIFICATE_AT,GIVEN_THIS,DAY_OF, YEAR, DATE_ISSUED, AUTONUM) 
				VALUES('$CERTIFICATE_TO','$CERTIFICATE_ON','$CERTIFICATE_AT','$GIVEN_THIS','$DAY_OF','$YEAR','$DATE_ISSUED','$AUTONUM')";
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