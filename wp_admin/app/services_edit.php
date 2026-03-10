<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'services.php?home=services';
	}

	if(isset($_POST['submit'])){
		$REQ_NAME=$conn->real_escape_string(strtoupper($_POST['SERVICES']));
		$sql="UPDATE tbl_services SET SERVICES=? WHERE DID = ?";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('ss',$REQ_NAME,$_POST['DID']);
		if($stmt->execute()){
			$_SESSION['success'] = 'Services updated successfully';
      audit_log($conn,$user,'Service Updated',"ID: ".$_POST['DID']." - ".$REQ_NAME);
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
