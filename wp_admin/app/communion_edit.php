<?php
	include 'includes/session.php';

    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'communion_view.php?year='.$_GET['year'];
	}

	if(isset($_POST['submit'])){
		$ID             		=$_POST['ID'];
        $RECORD_NO    			=$_POST['RECORD_NO'];
		$CHILD_NAME     		=$_POST['CHILD_NAME'];
		$DATE_OF_BAPTISM    	=$_POST['DATE_OF_BAPTISM'];
		$PLACE_OF_BAPTISM    	=$_POST['PLACE_OF_BAPTISM'];
		$FATHER_NAME			=$_POST['FATHER_NAME'];
        $MOTHER_NAME    		=$_POST['MOTHER_NAME'];
        $DATE_OF_COMMUNION  	=$_POST['DATE_OF_COMMUNION'];
        $PLACE_OF_COMMUNION   	=$_POST['PLACE_OF_COMMUNION'];
        $NAME_OF_MINISTER       =$_POST['NAME_OF_MINISTER'];
        $NOTATIONS      		=$_POST['NOTATIONS'];
		$SERIES_NO      		=$_POST['SERIES_NO'];
		$BOOK_NO      			=$_POST['BOOK_NO'];
		$PAGE_NO      			=$_POST['PAGE_NO'];
		$REG_NO      			=$_POST['REG_NO'];

		$sql="UPDATE tbl_communion
		SET RECORD_NO='$RECORD_NO',
		CHILD_NAME='$CHILD_NAME',
		DATE_OF_BAPTISM='$DATE_OF_BAPTISM',
		PLACE_OF_BAPTISM='$PLACE_OF_BAPTISM',
		FATHER_NAME='$FATHER_NAME',
		MOTHER_NAME='$MOTHER_NAME',
		DATE_OF_COMMUNION='$DATE_OF_COMMUNION',
		PLACE_OF_COMMUNION='$PLACE_OF_COMMUNION',
		NAME_OF_MINISTER='$NAME_OF_MINISTER',
		NOTATIONS='$NOTATIONS',
		SERIES_NO='$SERIES_NO',
		BOOK_NO='$BOOK_NO',
		PAGE_NO='$PAGE_NO',
		REG_NO='$REG_NO'
		WHERE ID = '$ID'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Record  updated successfully';
      audit_log($conn,$user,'Communion Updated',"ID: $ID - $CHILD_NAME");
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
