<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'conversion.php';
	}

	if(isset($_POST['submit'])){			
		$RECORD_NO    		=$_POST['RECORD_NO'];
		$CHILD_NAME     	=$_POST['CHILD_NAME'];
		$DATE_OF_RITE    	=$_POST['DATE_OF_RITE'];
		$PLACE_OF_RECEPTION =$_POST['PLACE_OF_RECEPTION'];
		$DATE_OF_BIRTH		=$_POST['DATE_OF_BIRTH'];
        $PLACE_OF_BIRTH    	=$_POST['PLACE_OF_BIRTH'];
        $FATHER_NAME  		=$_POST['FATHER_NAME'];
        $MOTHER_NAME   		=$_POST['MOTHER_NAME'];
        $MINISTER      		=$_POST['MINISTER'];
        $DATE_OF_BAPTISM    =$_POST['DATE_OF_BAPTISM'];
		$PLACE_OF_BAPTISM   =$_POST['PLACE_OF_BAPTISM'];
		$DENOMINATION       =$_POST['DENOMINATION'];
		$NOTATIONS      	=$_POST['NOTATIONS'];
		$LIST_OF_SPONSORS   =$_POST['LIST_OF_SPONSORS'];
		$BOOK_NO    	    =$_POST['BOOK_NO'];
		$PAGE_NO    		=$_POST['PAGE_NO'];
		$REG_NO    			=$_POST['REG_NO'];
		$SERIES_NO    		=$_POST['SERIES_NO'];

		// $sql = "SELECT * FROM tbl_conversion WHERE RECORD_NO = '$RECORD_NO'";
		// $query = $conn->query($sql);
		// if($query->num_rows > 0){
			// $_SESSION['error'] = "Record Number already exist! Make sure Item number are unique";
		// }else{
			


		// }
		
		$sql= "INSERT INTO `tbl_conversion`(`RECORD_NO`, `CHILD_NAME`, `DATE_OF_RITE`, `PLACE_OF_RECEPTION`, `DATE_OF_BIRTH`, `PLACE_OF_BIRTH`, `FATHER_NAME`, `MOTHER_NAME`, `MINISTER`, `LIST_OF_SPONSORS`, `DATE_OF_BAPTISM`, `PLACE_OF_BAPTISM`, `DENOMINATION`, `NOTATIONS`, `SERIES_NO`, `BOOK_NO`, `PAGE_NO`, `REG_NO`)
            VALUES ('$RECORD_NO','$CHILD_NAME','$DATE_OF_RITE','$PLACE_OF_RECEPTION','$DATE_OF_BIRTH','$PLACE_OF_BIRTH','$FATHER_NAME','$MOTHER_NAME','$MINISTER','$LIST_OF_SPONSORS','$DATE_OF_BAPTISM','$PLACE_OF_BAPTISM','$DENOMINATION','$NOTATIONS','$SERIES_NO','$BOOK_NO','$PAGE_NO','$REG_NO')";
			if($conn->query($sql)){
				$_SESSION['success'] = 'New record have been created.';
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