<?php
	include 'includes/session.php';
	//require_once "phpqrcode/qrlib.php";
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'confirmation.php';
	}

	if(isset($_POST['submit'])){			
		$RECORD_NUMBER    	=$_POST['RECORD_NUMBER'];
		$CHILD_NAME     	=$_POST['CHILD_NAME'];
		$GENDER    			=$_POST['GENDER'];
        $DATE_OF_BAPTISM  	=$_POST['DATE_OF_BAPTISM'];
        $PLACE_OF_BAPTISM   =$_POST['PLACE_OF_BAPTISM'];
		$FATHER_NAME		=$_POST['FATHER_NAME'];
        $MOTHER_NAME    	=$_POST['MOTHER_NAME'];
        $NAME_OF_PRIEST      =$_POST['NAME_OF_PRIEST'];
        $DATE_CONFIRMED      =$_POST['DATE_CONFIRMED'];
		$RESIDENT_OF =$_POST['RESIDENT_OF'];
		$LIST_OF_SPONSORS =$_POST['LIST_OF_SPONSORS'];
		$BOOK_NO    		=$_POST['BOOK_NO'];
		$PAGE_NO    		=$_POST['PAGE_NO'];
		$REG_NO    			=$_POST['REG_NO'];
		$SERIES_NO    		=$_POST['SERIES_NO'];
		$NOTATIONS    		=$_POST['NOTATIONS'];
	
		// $sql = "SELECT * FROM tbl_confirmation WHERE RECORD_NUMBER = '$RECORD_NUMBER'";
		// $query = $conn->query($sql);
		// if($query->num_rows > 0){
			// $_SESSION['error'] = "Record Number already exist! Make sure number is unique";
		// }else{
			


		// }
		
		$sql= "INSERT INTO tbl_confirmation(RECORD_NUMBER,CHILD_NAME,DATE_OF_BAPTISM,PLACE_OF_BAPTISM, FATHER_NAME,MOTHER_NAME, NAME_OF_PRIEST,GENDER,RESIDENT_OF,DATE_CONFIRMED,LIST_OF_SPONSORS,BOOK_NO,PAGE_NO,REG_NO,SERIES_NO,NOTATIONS)
            VALUES ('$RECORD_NUMBER','$CHILD_NAME','$DATE_OF_BAPTISM','$PLACE_OF_BAPTISM','$FATHER_NAME','$MOTHER_NAME','$NAME_OF_PRIEST','$GENDER','$RESIDENT_OF','$DATE_CONFIRMED','$LIST_OF_SPONSORS','$BOOK_NO','$PAGE_NO','$REG_NO','$SERIES_NO','$NOTATIONS')";
			if($conn->query($sql)){
				$_SESSION['success'] = 'New record have been created.';
        audit_log($conn,$user,'Confirmation Added',"Record No: $RECORD_NUMBER - $CHILD_NAME");
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
	

	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
		
	}
	//header('location: clientAccount.php?q='.$_POST['id']);
	header('location:'.$return);
?>
