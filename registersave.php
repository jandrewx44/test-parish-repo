<?php
	include 'app/includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'registration_section.php';
	}

	if(isset($_POST['register'])){			
		$FNAME    			=strtoupper($_POST['FNAME']);
		$MI     			=strtoupper($_POST['MI']);
		$LNAME     			=strtoupper($_POST['LNAME']);
		$GENDER   			=strtoupper($_POST['GENDER']);
		$CONTACT    		=$_POST['CONTACT'];
        $DATE_OF_BIRTH  	=$_POST['DATE_OF_BIRTH'];
        $AGE  				=$_POST['AGE'];
        $PLACE_OF_BIRTH   	=mysqli_real_escape_string($conn,strtoupper($_POST['PLACE_OF_BIRTH']));
		$USERNAME    		=$_POST['USERNAME'];
		$PASSWORD		    =$_POST['PASSWORD'];
		$ROLE='PATIENT';
		$sql = "SELECT * FROM tbl_patients WHERE USERNAME = '$USERNAME' OR PASSWORD = '$PASSWORD'";
		$query = $conn->query($sql);
		if($query->num_rows > 0){
			$_SESSION['error'] = 'USERNAME OR PASSWORD ALREADY EXIST!';
		}else{
			$sql= "INSERT INTO tbl_patients(FNAME,MI,LNAME, GENDER, CONTACT, DATE_OF_BIRTH,AGE, PLACE_OF_BIRTH, USERNAME, PASSWORD,ROLE)
            VALUES ('$FNAME','$MI','$LNAME','$GENDER','$CONTACT','$DATE_OF_BIRTH','$AGE','$PLACE_OF_BIRTH','$USERNAME','$PASSWORD','$ROLE')";
			if ($conn->query($sql) === TRUE) {
				$last_id = $conn->insert_id;
				$_SESSION['admin']=$last_id;
				header('location:member/profile.php?welcome');
				//$_SESSION['success'] = 'Your account is waiting for oure administrator approval. Please check back later.';
			}
			else{
				$_SESSION['error'] = $conn->error;
			}


		}
	

	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
		header('location:'.$return);
	}
	//header('location: clientAccount.php?q='.$_POST['id']);
	
?>