<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'donations.php';
	}

	if(isset($_POST['submit'])){			
		$DONATOR=$_POST['DONATOR'];
		$DONATED_ON=$_POST['DONATED_ON'];
		$AMOUNT=$_POST['AMOUNT'];
		$DESCRIPTION=$_POST['DESCRIPTION'];
		$DONATION_TYPE=isset($_POST['DONATION_TYPE']) ? $_POST['DONATION_TYPE'] : '';

		$DESCRIPTION_SAVE = $DESCRIPTION;
		if($DONATION_TYPE!==''){
			$DESCRIPTION_SAVE .= ' | TYPE: '.$DONATION_TYPE;
		}
		$sql= "INSERT INTO tbl_donations(DONATOR, DONATED_ON, AMOUNT, DESCRIPTION)VALUES('$DONATOR','$DONATED_ON','$AMOUNT','$DESCRIPTION_SAVE')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Article have been created.';
			audit_log($conn,$user,'Donation Added',strtoupper($DONATOR).' - '.$AMOUNT.' ('.$DONATED_ON.')');
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
