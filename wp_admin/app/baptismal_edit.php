<?php
	include 'includes/session.php';
	  $year = $_GET['year'];
    if(isset($_GET['year'])){
		$return = $_GET['year'];
		$return = 'baptismal_acView.php?year='.$year;
	}else{
		$return = 'baptismal_acView.php?year='.$year;
	}

	if(isset($_POST['submit'])){
		$ID = $_POST['ID'];
		$CHILD_NAME     	=$_POST['CHILD_NAME'];
        $DATE_OF_BIRTH  	=$_POST['DATE_OF_BIRTH'];
        $PLACE_OF_BIRTH   	=$_POST['PLACE_OF_BIRTH'];
		$FATHER_NAME		=$_POST['FATHER_NAME'];
        $MOTHER_NAME    	=$_POST['MOTHER_NAME'];
        $NAME_OF_PRIEST      =$_POST['NAME_OF_PRIEST'];
        $NAME_OF_CHURCH      =$_POST['NAME_OF_CHURCH'];
        $PERMANENT_ADDRESS   =$_POST['PERMANENT_ADDRESS'];
        $LIST_OF_SPONSORS    =$_POST['LIST_OF_SPONSORS'];
		$DATE_OF_BAPTISM    =$_POST['DATE_OF_BAPTISM'];
		$PLACE_OF_BAPTISM    =$_POST['PLACE_OF_BAPTISM'];
		$RECORD_NO    		=$_POST['RECORD_NUMBER'];
		$BOOK_NO    		=$_POST['BOOK_NO'];
		$PAGE_NO    		=$_POST['PAGE_NO'];
		$REG_NO    			=$_POST['REG_NO'];
		$SERIES_NO    		=$_POST['SERIES_NO'];
		$NOTATIONS    		=$_POST['NOTATIONS'];
		

		$sql="UPDATE tbl_baptismal 
		SET CHILD_NAME='$CHILD_NAME',
		DATE_OF_BIRTH='$DATE_OF_BIRTH',
		PLACE_OF_BIRTH='$PLACE_OF_BIRTH',
		FATHER_NAME='$FATHER_NAME',
		MOTHER_NAME='$MOTHER_NAME',
		NAME_OF_PRIEST='$NAME_OF_PRIEST',
		NAME_OF_CHURCH='$NAME_OF_CHURCH',
		PERMANENT_ADDRESS='$PERMANENT_ADDRESS',
		LIST_OF_SPONSORS='$LIST_OF_SPONSORS',
		DATE_OF_BAPTISM='$DATE_OF_BAPTISM', 
		PLACE_OF_BAPTISM='$PLACE_OF_BAPTISM',
		RECORD_NUMBER='$RECORD_NO',
		BOOK_NO='$BOOK_NO',
		PAGE_NO='$PAGE_NO',
		REG_NO='$REG_NO',
		SERIES_NO='$SERIES_NO',
		NOTATIONS='$NOTATIONS'
		WHERE ID = '$ID'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Record  updated successfully';
      audit_log($conn,$user,'Baptism Updated',"ID: $ID - $CHILD_NAME");
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
