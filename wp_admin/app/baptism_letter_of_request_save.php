<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'baptism_letter_of_request-record.php?home=baptism_letter_of_request-record';
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

	if(isset($_POST['request_submit'])){			
		
        $MY_NAME   	=mysqli_real_escape_string($conn,(ucwords($_POST['MY_NAME'])));
        $NAME_OF   	=mysqli_real_escape_string($conn,(ucwords($_POST['NAME_OF'])));
        $CNAME   	=mysqli_real_escape_string($conn,(ucwords($_POST['CNAME'])));
        $CFNAME   	=mysqli_real_escape_string($conn,(ucwords($_POST['CFNAME'])));
        $CMNAME   	=mysqli_real_escape_string($conn,(ucwords($_POST['CMNAME'])));
        $CPOB   	=mysqli_real_escape_string($conn,(ucwords($_POST['CPOB'])));
        $CDOB   	=mysqli_real_escape_string($conn,(ucwords($_POST['CDOB'])));
        $CSPONSORS  =mysqli_real_escape_string($conn,(ucwords($_POST['CSPONSORS'])));
		$DATE_ISSUED =date('Y-m-d');
		
		$sql= "INSERT INTO tbl_baptismal_letter_request(MY_NAME, NAME_OF, CNAME, CFNAME, CMNAME, CPOB, CDOB, CSPONSORS, AUTONUM,DATE_ISSUED) VALUES('$MY_NAME','$NAME_OF','$CNAME','$CFNAME','$CMNAME','$CPOB','$CDOB','$CSPONSORS','$AUTONUM','$DATE_ISSUED')";
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