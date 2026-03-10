<?php
	include 'includes/session.php';

    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'conversion_view.php?year='.$_GET['year'];
	}

	if(isset($_POST['submit'])){
		$ID             	=$_POST['ID'];
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
		$DENOMINATION      	=$_POST['DENOMINATION'];
		$NOTATIONS      	=$_POST['NOTATIONS'];
		$LIST_OF_SPONSORS   =$_POST['LIST_OF_SPONSORS'];
		$BOOK_NO    		=$_POST['BOOK_NO'];
		$PAGE_NO    		=$_POST['PAGE_NO'];
		$REG_NO    			=$_POST['REG_NO'];
		$SERIES_NO    		=$_POST['SERIES_NO'];

		$sql="UPDATE tbl_conversion
		SET RECORD_NO='$RECORD_NO',
		CHILD_NAME='$CHILD_NAME',
		DATE_OF_RITE='$DATE_OF_RITE',
		PLACE_OF_RECEPTION='$PLACE_OF_RECEPTION',
		DATE_OF_BIRTH='$DATE_OF_BIRTH',
		PLACE_OF_BIRTH='$PLACE_OF_BIRTH',
		FATHER_NAME='$FATHER_NAME',
		MOTHER_NAME='$MOTHER_NAME',
		MINISTER='$MINISTER',
		DATE_OF_BAPTISM='$DATE_OF_BAPTISM',
		PLACE_OF_BAPTISM='$PLACE_OF_BAPTISM',
		DENOMINATION='$DENOMINATION',
		LIST_OF_SPONSORS='$LIST_OF_SPONSORS',
		NOTATIONS='$NOTATIONS',
		BOOK_NO='$BOOK_NO',
		PAGE_NO='$PAGE_NO',
		REG_NO='$REG_NO',
		SERIES_NO='$SERIES_NO'
		
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