<?php
	date_default_timezone_set('Asia/Manila');
	session_start();
	include 'conn.php';

	if(isset($_POST['login'])){
		$username = trim($_POST['username']);
		$password = $_POST['password'];

		$sql = "SELECT * FROM tbl_users WHERE TRIM(USERNAME) = '$username'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find account with the username';
		}
		else{
			$row = $query->fetch_assoc();
			if($row['STATUS'] != 1){
				$_SESSION['error'] = 'Account is disabled. Please contact administrator.';
			}
			elseif($password==$row['PASSWORD']){
				$_SESSION['admin'] = $row['ID'];
				$_SESSION['last_login_timestamp'] = time(); 
                $fname=$row['FIRSTNAME'].' '. $row['MI'].' '.$row['LASTNAME'];
                $type=$row['ROLE'];
                mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$fname', 'Login', NOW(),'$type')");
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input admin credentials first';
	}

	header('location: index.php');

?>
