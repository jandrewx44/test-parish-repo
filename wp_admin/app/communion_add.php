<?php
	include 'includes/session.php';
	//require_once "phpqrcode/qrlib.php";
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'communion.php';
	}

	if(isset($_POST['submit'])){			
		$RECORD_NO    			=$_POST['RECORD_NO'];
		$CHILD_NAME     		=$_POST['CHILD_NAME'];
		$DATE_OF_BAPTISM    	=$_POST['DATE_OF_BAPTISM'];
		$PLACE_OF_BAPTISM    	=$_POST['PLACE_OF_BAPTISM'];
		$FATHER_NAME			=$_POST['FATHER_NAME'];
        $MOTHER_NAME    		=$_POST['MOTHER_NAME'];
        $DATE_OF_COMMUNION  	=$_POST['DATE_OF_COMMUNION'];
        $PLACE_OF_COMMUNION   	=$_POST['PLACE_OF_COMMUNION'];
        $NAME_OF_MINISTER      	=$_POST['NAME_OF_MINISTER'];
        $NOTATIONS      		=$_POST['NOTATIONS'];
		$SERIES_NO      		=$_POST['SERIES_NO'];
		$BOOK_NO      			=$_POST['BOOK_NO'];
		$PAGE_NO      			=$_POST['PAGE_NO'];
		$REG_NO      			=$_POST['REG_NO'];

       
		// $sql = "SELECT * FROM tbl_communion WHERE RECORD_NO = '$RECORD_NO'";
		// $query = $conn->query($sql);
		// if($query->num_rows > 0){
			// $_SESSION['error'] = "Record Number already exist! Make sure Item number are unique";
		// }else{
			


		// }
		
		$sql= "INSERT INTO `tbl_communion`(`RECORD_NO`, `CHILD_NAME`, `DATE_OF_BAPTISM`, `PLACE_OF_BAPTISM`, `FATHER_NAME`, `MOTHER_NAME`, `DATE_OF_COMMUNION`, `PLACE_OF_COMMUNION`, `NAME_OF_MINISTER`, `NOTATIONS`, `SERIES_NO`, `BOOK_NO`, `PAGE_NO`, `REG_NO`)
            VALUES ('$RECORD_NO','$CHILD_NAME','$DATE_OF_BAPTISM','$PLACE_OF_BAPTISM','$FATHER_NAME','$MOTHER_NAME','$DATE_OF_COMMUNION','$PLACE_OF_COMMUNION','$NAME_OF_MINISTER','$NOTATIONS','$SERIES_NO','$BOOK_NO','$PAGE_NO','$REG_NO')";
			if($conn->query($sql)){
				$_SESSION['success'] = 'New record have been created.';
        audit_log($conn,$user,'Communion Added',"Record No: $RECORD_NO - $CHILD_NAME");
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
