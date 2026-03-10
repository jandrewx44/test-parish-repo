<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'baptismal-changes-otherperson-record.php';
	}
	else{
		$return = 'baptismal-changes-otherperson-record.php';
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

	if(isset($_POST['other_person_submit'])){			
		
        $UNDERSIGNED   	=$_POST['UNDERSIGNEDD'];
        $RESIDING   	=mysqli_real_escape_string($conn,(ucwords($_POST['RESIDING'])));
        $REG_NO   	    =mysqli_real_escape_string($conn,(ucwords($_POST['REG_NO'])));
        $PAGE_NO   	    =mysqli_real_escape_string($conn,(ucwords($_POST['PAGE_NO'])));
        $SERIES_OF   	=mysqli_real_escape_string($conn,(ucwords($_POST['SERIES_OF'])));
        $NAME_NOWBE   	=mysqli_real_escape_string($conn,(ucwords($_POST['NAME_NOWBE'])));
        $NOT_ONE   	    =mysqli_real_escape_string($conn,(ucwords($_POST['NOT_ONE'])));
        $POB   	        =mysqli_real_escape_string($conn,(ucwords($_POST['POB'])));
        $NOT_TWO   	    =mysqli_real_escape_string($conn,(ucwords($_POST['NOT_TWO'])));
        $DOB   	        =mysqli_real_escape_string($conn,(ucwords($_POST['DOB'])));
        $NOT_THREE   	=mysqli_real_escape_string($conn,(ucwords($_POST['NOT_THREE'])));
        $FATHER_NAME   	=mysqli_real_escape_string($conn,(ucwords($_POST['FATHER_NAME'])));
        $NOT_FOUR   	=mysqli_real_escape_string($conn,(ucwords($_POST['NOT_FOUR'])));
        $MOTHER_NAME   	=mysqli_real_escape_string($conn,(ucwords($_POST['MOTHER_NAME'])));
        $NOT_FIVE   	=mysqli_real_escape_string($conn,(ucwords($_POST['NOT_FIVE'])));
        $SPONSOR   	=mysqli_real_escape_string($conn,(ucwords($_POST['SPONSOR'])));
        $NOT_SIX   	=mysqli_real_escape_string($conn,(ucwords($_POST['NOT_SIX'])));
        $OTHERS   	=mysqli_real_escape_string($conn,(ucwords($_POST['OTHERS'])));
        $THIS   	=mysqli_real_escape_string($conn,(ucwords($_POST['THIS'])));
        $OF   	    =mysqli_real_escape_string($conn,(ucwords($_POST['OF'])));
        $YEAR   	=mysqli_real_escape_string($conn,(ucwords($_POST['YEAR'])));
        $PETITIONER   	=mysqli_real_escape_string($conn,(ucwords($_POST['PETITIONER'])));
		$DATE_ISSUED =date('Y-m-d');
		
		$BIRTH_CERT   	=mysqli_real_escape_string($conn, ucwords($_POST['BIRTH_CERT'] ?? ''));
        $JOINT_AFFIDAVIT   =mysqli_real_escape_string($conn, ucwords($_POST['JOINT_AFFIDAVIT'] ?? ''));
        $MARRIAGE_CONTRACT_PARENTS =mysqli_real_escape_string($conn, ucwords($_POST['MARRIAGE_CONTRACT_PARENTS'] ?? ''));
        $CERT_OF_BAPTISM   =mysqli_real_escape_string($conn, ucwords($_POST['CERT_OF_BAPTISM'] ?? ''));
		
		$sql= "INSERT INTO tbl_baptismal_otherperson(UNDERSIGNED, RESIDING, REGNO, PAGENO, SERIESNO, NAME_NOWBE, NOT_ONE, POB, NOT_TWO, DOB, NOT_THREE, FATHERNAME, NOT_FOUR, MOTHERNAME, NOT_FIVE, SPONSOR, NOT_SIX, OTHERS, THIS, OF, YEAR, PETITIONER,AUTONUM,DATE_ISSUED, BIRTH_CERT, JOINT_AFFIDAVIT, MARRIAGE_CONTRACT_PARENTS, CERT_OF_BAPTISM) VALUES('$UNDERSIGNED','$RESIDING','$REG_NO','$PAGE_NO','$SERIES_OF','$NAME_NOWBE','$NOT_ONE','$POB','$NOT_TWO','$DOB','$NOT_THREE','$FATHER_NAME','$NOT_FOUR','$MOTHER_NAME','$NOT_FIVE','$SPONSOR','$NOT_SIX','$OTHERS','$THIS','$OF','$YEAR','$PETITIONER','$AUTONUM','$DATE_ISSUED','$BIRTH_CERT','$JOINT_AFFIDAVIT','$MARRIAGE_CONTRACT_PARENTS','$CERT_OF_BAPTISM')";
			if($conn->query($sql)){
				$_SESSION['success'] = 'New record have been created.';
			}else{
				$_SESSION['error'] = $conn->error;
			}
	
	}else{
		$_SESSION['error'] = 'Fill up add form first';
		
	}
	//header('location: baptismal-changes-otherperson-pdf-print.php?AUTONUM='.$AUTONUM);
	header('location:'.$return);
?>
