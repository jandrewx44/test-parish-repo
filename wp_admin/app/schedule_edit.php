<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'schedule.php';
	}

	if(isset($_POST['submit'])){
		$ID 			= $_POST['id'];
		$slots_date=$_POST['slots_date'];
		$slots=$_POST['slots'];
		$start_time=$_POST['start_time'];
		$end_time=$_POST['end_time'];
		$duration=$_POST['duration'];

		$sql="UPDATE tbl_slot_date
		SET slots_date=?, 
		slots=?, 
		start_time=?, 
		end_time=?, 
		duration=?
		WHERE slotid = ?";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('sssssi',$slots_date,$slots,$start_time,$end_time,$duration,$ID);
		if($stmt->execute()){
			$_SESSION['success'] = 'Schedule updated successfully';
		} else {
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select recird to edit first';
	}

	header('location:'.$return);
?>
