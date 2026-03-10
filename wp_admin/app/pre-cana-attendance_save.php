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

	if(isset($_POST['precana_submit'])){			
		
        $GROOM   		=mysqli_real_escape_string($conn,(ucwords($_POST['GROOM'])));
        $G_RESIDENCE   	=mysqli_real_escape_string($conn,(ucwords($_POST['G_RESIDENCE'])));
        $G_AGE   		=mysqli_real_escape_string($conn,(ucwords($_POST['G_AGE'])));
        $BRIDE   		=mysqli_real_escape_string($conn,(ucwords($_POST['BRIDE'])));
        $B_RESIDENCE   	=mysqli_real_escape_string($conn,(ucwords($_POST['B_RESIDENCE'])));
        $B_AGE   		=mysqli_real_escape_string($conn,(ucwords($_POST['B_AGE'])));
        $ON_MARRIED   	=mysqli_real_escape_string($conn,(ucwords($_POST['ON_MARRIED'])));
        $AT_MARRIED  	=mysqli_real_escape_string($conn,(ucwords($_POST['AT_MARRIED'])));
        $ON_PARISH  	=mysqli_real_escape_string($conn,(ucwords($_POST['ON_PARISH'])));
        $AT_PARISH  	=mysqli_real_escape_string($conn,(ucwords($_POST['AT_PARISH'])));
		$DATE_ISSUED 	=date('Y-m-d');
		$THIS			=ucwords($_POST['THIS']);
		$OF				=ucwords($_POST['OF']);
		$YEAR			=$_POST['YEAR'];
		
		$sql= "INSERT INTO tbl_pre_cana(GROOM, G_RESIDENCE, G_AGE, BRIDE, B_RESIDENCE, B_AGE, ON_MARRIED, AT_MARRIED, ON_PARISH, AT_PARISH, DATE_ISSUED, AUTONUM, THIS, OF, YEAR) 
		VALUES('$GROOM','$G_RESIDENCE','$G_AGE','$BRIDE','$B_RESIDENCE','$B_AGE','$ON_MARRIED','$AT_MARRIED','$ON_PARISH','$AT_PARISH','$DATE_ISSUED','$AUTONUM','$THIS','$OF','$YEAR')";
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