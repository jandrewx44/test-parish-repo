<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'pre-cana-attendance-record.php';
	}else{
		$return = 'pre-cana-attendance-record.php';
	}

	if(isset($_POST['submit'])){			
		
        $PRE_ID   	=mysqli_real_escape_string($conn,($_POST['PRE_ID']));
		$GROOM   	=mysqli_real_escape_string($conn,($_POST['GROOM']));
        $G_RESIDENCE   	=mysqli_real_escape_string($conn,($_POST['G_RESIDENCE']));
        $G_AGE   	=mysqli_real_escape_string($conn,($_POST['G_AGE']));
        $BRIDE   	=mysqli_real_escape_string($conn,($_POST['BRIDE']));
        $B_RESIDENCE   	=mysqli_real_escape_string($conn,($_POST['B_RESIDENCE']));
        $B_AGE   	=mysqli_real_escape_string($conn,($_POST['B_AGE']));
        $ON_MARRIED   	=mysqli_real_escape_string($conn,($_POST['ON_MARRIED']));
        $AT_MARRIED  =mysqli_real_escape_string($conn,($_POST['AT_MARRIED']));
        $ON_PARISH  =mysqli_real_escape_string($conn,($_POST['ON_PARISH']));
        $AT_PARISH  =mysqli_real_escape_string($conn,($_POST['AT_PARISH']));
		$DATE_UPDATED 	=date('Y-m-d');

		$THIS= $_POST['THIS'];
		$OF= $_POST['OF'];
		$YEAR = $_POST['YEAR'];
		
		$sql= "UPDATE tbl_pre_cana
		SET GROOM='$GROOM',
		G_RESIDENCE='$G_RESIDENCE',
		G_AGE='$G_AGE',
		BRIDE='$BRIDE',
		B_RESIDENCE='$B_RESIDENCE',
		B_AGE='$B_AGE',
		ON_MARRIED='$ON_MARRIED',
		AT_MARRIED='$AT_MARRIED',
		ON_PARISH='$ON_PARISH',
		AT_PARISH='$AT_PARISH',
		DATE_UPDATED='$DATE_UPDATED',
		THIS ='$THIS', OF='$OF', YEAR='$YEAR'
		WHERE PRE_ID='$PRE_ID'";
		
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