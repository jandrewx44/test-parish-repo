<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		$return = 'baptismal-changes-own-record.php';
	}else{
		$return = 'baptismal-changes-own-record.php';
	}

	if(isset($_POST['submit'])){			
		
        $EDIT   		=mysqli_real_escape_string($conn,($_POST['EDIT']));
        $NAME_NOWBE   	=mysqli_real_escape_string($conn,($_POST['NAME_NOWBE']));
        $POB   			=mysqli_real_escape_string($conn,($_POST['POB']));
        $DOB   			=mysqli_real_escape_string($conn,($_POST['DOB']));
        $FATHER_NAME   	=mysqli_real_escape_string($conn,($_POST['FATHER_NAME']));
        $MOTHER_NAME   	=mysqli_real_escape_string($conn,($_POST['MOTHER_NAME']));
        $SPONSOR   		=mysqli_real_escape_string($conn,($_POST['SPONSOR']));
        $OTHERS   		=mysqli_real_escape_string($conn,($_POST['OTHERS']));
        $PETITIONER   	=mysqli_real_escape_string($conn,($_POST['PETITIONER']));
		$DATE_UPDATED 	=date('Y-m-d');
		$THIS   		=$_POST['THIS'];
        $OF   			=$_POST['OF'];
        $YEAR   		=$_POST['YEAR'];
		
		$BIRTH_CERT   	=mysqli_real_escape_string($conn,($_POST['BIRTH_CERT']));
        $JOINT_AFFIDAVIT   	=mysqli_real_escape_string($conn,($_POST['JOINT_AFFIDAVIT']));
        $MARRIAGE_CONTRACT_PARENTS   	=mysqli_real_escape_string($conn,($_POST['MARRIAGE_CONTRACT_PARENTS']));
        $CERT_OF_BAPTISM   	=mysqli_real_escape_string($conn,($_POST['CERT_OF_BAPTISM']));
		
		$sql= "UPDATE tbl_baptismal_changes
		SET NAME_NOWBE='$NAME_NOWBE',
		POB='$POB',
		DOB='$DOB',
		FATHERNAME='$FATHER_NAME',
		MOTHERNAME='$MOTHER_NAME',
		SPONSOR='$SPONSOR',
		OTHERS='$OTHERS',
		PETITIONER='$PETITIONER',
		DATE_UPDATED='$DATE_UPDATED',
		BIRTH_CERT='$BIRTH_CERT',
		JOINT_AFFIDAVIT='$JOINT_AFFIDAVIT',
		MARRIAGE_CONTRACT_PARENTS='$MARRIAGE_CONTRACT_PARENTS', THIS= '$THIS', OF='$OF', YEAR='$YEAR',
		CERT_OF_BAPTISM='$CERT_OF_BAPTISM' WHERE ID='$EDIT'";
		
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