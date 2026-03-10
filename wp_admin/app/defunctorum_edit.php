<?php
	include 'includes/session.php';

    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'defunctorum.php';
	}

	if(isset($_POST['submit'])){
		$ID             		=$_POST['ID'];
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
		$BOOK_NO    		    =$_POST['BOOK_NO'];
		$PAGE_NO    		    =$_POST['PAGE_NO'];
		$REG_NO    			    =$_POST['REG_NO'];
		$SERIES_NO    		    =$_POST['SERIES_NO'];
		$NOTATIONS    		    =$_POST['NOTATIONS'];

		$sql="UPDATE tbl_death
		SET RECORD_NO='$RECORD_NO',
		NAME_OF_DECEASED='$NAME_OF_DECEASED',
		RESIDENCE='$RESIDENCE',
		AGE='$AGE',
		PARENTS_WIFE_HUSBAND='$PARENTS_WIFE_HUSBAND',
		DATE_OF_DEATH='$DATE_OF_DEATH',
		PLACE_OF_BURIAL='$PLACE_OF_BURIAL',
		DATE_OF_BURIAL='$DATE_OF_BURIAL',
		SACRAMENTS='$SACRAMENTS',
		PRIEST='$PRIEST',
		BOOK_NO='$BOOK_NO',
		PAGE_NO='$PAGE_NO',
		REG_NO='$REG_NO',
		SERIES_NO='$SERIES_NO',
		NOTATIONS='$NOTATIONS'
		WHERE ID = '$ID'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Record  updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select recird to edit first';
	}

	header('location:'.$return);
?>