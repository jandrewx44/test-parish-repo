<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'events.php';
	}

	if(isset($_POST['submit'])){			
		$TITLE=trim($_POST['title']);
		$DESCRIPTION=trim($_POST['description']);
		$DATE=trim($_POST['start_datetime']);
		$TIME=trim($_POST['end_datetime']);

		$stmt = $conn->prepare("INSERT INTO schedule_list(title, description, start_datetime, end_datetime) VALUES (?,?,?,?)");
		$stmt->bind_param("ssss",$TITLE,$DESCRIPTION,$DATE,$TIME);
		if($stmt->execute()){
			$_SESSION['success'] = 'New Event have been created.';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	

	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
		
	}
	//header('location: clientAccount.php?q='.$_POST['id']);
	header('location:'.$return);
?>
