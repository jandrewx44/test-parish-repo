<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'events.php';
	}

	if(isset($_POST['submit'])){
		$ID 		= (int)$_POST['id'];
		$TITLE     	= trim($_POST['title']);
        $DESCRIPTION= trim($_POST['description']);
        $DATE   	= trim($_POST['start_datetime']);
		$TIME		= trim($_POST['end_datetime']);

		$stmt = $conn->prepare("UPDATE schedule_list SET title=?, description=?, start_datetime=?, end_datetime=? WHERE id=?");
		$stmt->bind_param("ssssi",$TITLE,$DESCRIPTION,$DATE,$TIME,$ID);
		if($stmt->execute()){
			$_SESSION['success'] = 'Event updated successfully';
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
