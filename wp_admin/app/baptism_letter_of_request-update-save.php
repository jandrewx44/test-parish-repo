<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'baptism_letter_of_request-record.php';
	}else{
		$return = 'baptism_letter_of_request-record.php';
	}

	if(isset($_POST['submit'])){			
		
        $REQID   	=mysqli_real_escape_string($conn,($_POST['REQID']));
		$MY_NAME   	=mysqli_real_escape_string($conn,($_POST['MY_NAME']));
        $NAME_OF   	=mysqli_real_escape_string($conn,($_POST['NAME_OF']));
        $CNAME   	=mysqli_real_escape_string($conn,($_POST['CNAME']));
        $CFNAME   	=mysqli_real_escape_string($conn,($_POST['CFNAME']));
        $CMNAME   	=mysqli_real_escape_string($conn,($_POST['CMNAME']));
        $CPOB   	=mysqli_real_escape_string($conn,($_POST['CPOB']));
        $CDOB   	=mysqli_real_escape_string($conn,($_POST['CDOB']));
        $CSPONSORS  =mysqli_real_escape_string($conn,($_POST['CSPONSORS']));
		$DATE_UPDATED 	=date('Y-m-d');
		
		$sql= "UPDATE tbl_baptismal_letter_request
		SET MY_NAME='$MY_NAME',
		NAME_OF='$NAME_OF',
		CNAME='$CNAME',
		CFNAME='$CFNAME',
		CMNAME='$CMNAME',
		CPOB='$CPOB',
		CDOB='$CDOB',
		CSPONSORS='$CSPONSORS',
		DATE_UPDATED='$DATE_UPDATED' WHERE REQID='$REQID'";
		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Updated successfully!';
		}else{
			$_SESSION['error'] = $conn->error;
		}
	
	}else{
		$_SESSION['error'] = 'Fill up add form first';
		
	}
	header('location:'.$return);
?>