<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'services.php?home=services';
	}

	if(isset($_POST['submit'])){			
		$REQ_NAME=$_POST['SERVICES'];
		for($i=0;$i<count($REQ_NAME);$i++){
			$stmt=$conn->prepare("INSERT INTO tbl_services(SERVICES)VALUES(?)");
			$stmt->bind_param('s',$REQ_NAME[$i]);
			if($stmt->execute()){
				$_SESSION['success'] = "Services has been save";
        audit_log($conn,$user,'Service Added',$REQ_NAME[$i]);
			}else{
				$_SESSION['error'] = $conn->error;
			}
		}

		

	
	}else{
		$_SESSION['error'] = 'Fill up add form first';
	}
	header('location:'.$return);
?>
