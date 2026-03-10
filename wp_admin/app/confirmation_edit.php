<?php
	include 'includes/session.php';
	$year = $_GET['year'];
    if(isset($_GET['year'])){
		$return = 'confirmationn_View.php?year='.$year;
	}
	else{
		$return = 'confirmationn_View.php?year='.$year;
	}

	if(isset($_POST['submit'])){
		$ID = $_POST['ID'];
		$CHILD_NAME     	=$_POST['CHILD_NAME'];
		$GENDER   			=$_POST['GENDER'];
        $DATE_OF_BAPTISM  	=$_POST['DATE_OF_BAPTISM'];
        $PLACE_OF_BAPTISM   =$_POST['PLACE_OF_BAPTISM'];
		$FATHER_NAME		=$_POST['FATHER_NAME'];
        $MOTHER_NAME    	=$_POST['MOTHER_NAME'];
        $NAME_OF_PRIEST     =$_POST['NAME_OF_PRIEST'];
		$LIST_OF_SPONSORS   =$_POST['LIST_OF_SPONSORS'];
        $DATE_CONFIRMED     =$_POST['DATE_CONFIRMED'];
        $RESIDENT_OF        =$_POST['RESIDENT_OF'];
		$BOOK_NO    		=$_POST['BOOK_NO'];
		$PAGE_NO    		=$_POST['PAGE_NO'];
		$REG_NO    			=$_POST['REG_NO'];
		$SERIES_NO    		=$_POST['SERIES_NO'];
		$NOTATIONS    		=$_POST['NOTATIONS'];

		$sql="UPDATE tbl_confirmation 
		SET CHILD_NAME='$CHILD_NAME',
		GENDER='$GENDER',
		DATE_OF_BAPTISM='$DATE_OF_BAPTISM',
		PLACE_OF_BAPTISM='$PLACE_OF_BAPTISM',
		FATHER_NAME='$FATHER_NAME',
		MOTHER_NAME='$MOTHER_NAME',
		NAME_OF_PRIEST='$NAME_OF_PRIEST',
		RESIDENT_OF='$RESIDENT_OF',
		DATE_CONFIRMED='$DATE_CONFIRMED',
		LIST_OF_SPONSORS='$LIST_OF_SPONSORS',
		BOOK_NO='$BOOK_NO',
		PAGE_NO='$PAGE_NO',
		REG_NO='$REG_NO',
		SERIES_NO='$SERIES_NO',
		NOTATIONS='$NOTATIONS'
		WHERE ID = '$ID'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Record updated successfully';
      audit_log($conn,$user,'Confirmation Updated',"ID: $ID - $CHILD_NAME");
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select record to edit first';
	}

	header('location:'.$return);
?>
