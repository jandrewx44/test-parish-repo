<?php
date_default_timezone_set('Asia/Manila');
	include "includes/session.php";
	
 mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('".$user['FIRSTNAME'].' '.$user['MI'].' '.$user['LASTNAME']."', 'Logout', NOW(),'".$user['ROLE']."')");
	//session_start();
	session_destroy();
	header('location: ../index.php');


?>