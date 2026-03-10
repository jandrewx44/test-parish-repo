<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'priest.php?home=priest';
	}

	if(isset($_POST['submit'])){
		$PRIEST_NAME   	= str_replace('ñ', 'Ñ', strtoupper($_POST['PRIEST_NAME']));
		$PRIEST_DEFAULT   	=$_POST['PRIEST_DEFAULT'];
		$PRIEST_ID =$_POST['PRIEST_ID'];

		$sql="UPDATE tbl_priest SET PRIEST_NAME=?, PRIEST_DEFAULT=? WHERE PRIEST_ID=?";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('ssi',$PRIEST_NAME,$PRIEST_DEFAULT,$PRIEST_ID);
		if($stmt->execute()){
			$_SESSION['success'] = 'Requirements updated successfully';
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
