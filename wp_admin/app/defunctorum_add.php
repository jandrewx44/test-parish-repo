<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'defunctorum.php';
	}

	if(isset($_POST['submit'])){			
		$RECORD_NO    			=$_POST['RECORD_NO'];
		$NAME_OF_DECEASED     	=$_POST['NAME_OF_DECEASED'];
		$RESIDENCE    			=$_POST['RESIDENCE'];
		$AGE 					=$_POST['AGE'];
		$PARENTS_WIFE_HUSBAND	=$_POST['PARENTS_WIFE_HUSBAND'];
        $DATE_OF_DEATH    		=$_POST['DATE_OF_DEATH'];
        $PLACE_OF_BURIAL  		=$_POST['PLACE_OF_BURIAL'];
        $DATE_OF_BURIAL   		=$_POST['DATE_OF_BURIAL'];
        $SACRAMENTS      		=$_POST['SACRAMENTS'];
        $PRIEST    				=$_POST['PRIEST'];
		$BOOK_NO    	    	=$_POST['BOOK_NO'];
		$PAGE_NO    			=$_POST['PAGE_NO'];
		$REG_NO    				=$_POST['REG_NO'];
		$SERIES_NO    			=$_POST['SERIES_NO'];	
		$NOTATIONS    			=$_POST['NOTATIONS'];	

		// $sql = "SELECT * FROM tbl_death WHERE RECORD_NO = '$RECORD_NO'";
		// $query = $conn->query($sql);
		// if($query->num_rows > 0){
			// $_SESSION['error'] = "Record Number already exist! Make sure Item number are unuque";
		// }else{
			


		// }
		
		$sql= "INSERT INTO tbl_death(RECORD_NO,NAME_OF_DECEASED,RESIDENCE,AGE,PARENTS_WIFE_HUSBAND,DATE_OF_DEATH,PLACE_OF_BURIAL,DATE_OF_BURIAL,SACRAMENTS,PRIEST,SERIES_NO, BOOK_NO, PAGE_NO, REG_NO,NOTATIONS)
            VALUES ('$RECORD_NO','$NAME_OF_DECEASED','$RESIDENCE','$AGE','$PARENTS_WIFE_HUSBAND','$DATE_OF_DEATH','$PLACE_OF_BURIAL','$DATE_OF_BURIAL','$SACRAMENTS','$PRIEST','$SERIES_NO','$BOOK_NO','$PAGE_NO','$REG_NO','$NOTATIONS')";
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