<?php
	include 'includes/session.php';

    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'donations.php';
	}

	if(isset($_POST['submit'])){
		$ID = $_POST['ID'];
		$DONATOR=$_POST['DONATOR'];
		$DONATED_ON=$_POST['DONATED_ON'];
		$AMOUNT=$_POST['AMOUNT'];
		$DESCRIPTION=$_POST['DESCRIPTION'];
		$DONATION_TYPE=isset($_POST['DONATION_TYPE']) ? $_POST['DONATION_TYPE'] : '';
	
		$DESCRIPTION_SAVE = $DESCRIPTION;
		if($DONATION_TYPE!==''){
			$DESCRIPTION_SAVE .= ' | TYPE: '.$DONATION_TYPE;
		}
		$sql = "UPDATE tbl_donations SET DONATOR = '$DONATOR',DONATED_ON = '$DONATED_ON',AMOUNT = '$AMOUNT',DESCRIPTION='$DESCRIPTION_SAVE' WHERE ID = '$ID'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Updated successfully';
			audit_log($conn,$user,'Donation Updated',"ID: $ID - ".strtoupper($DONATOR));
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select to edit first';
	}

	header('location:'.$return);
?>
