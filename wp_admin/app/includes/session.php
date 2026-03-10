<?php
	session_start();
	include 'conn.php';

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: ../index.php');
	}
	$sql = "SELECT * FROM tbl_users WHERE ID = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();
	function audit_log($conn,$user,$action,$data=''){
		$fname = trim(($user['FIRSTNAME'] ?? '').' '.($user['MI'] ?? '').' '.($user['LASTNAME'] ?? ''));
		$type  = (string)($user['ROLE'] ?? '');
		// Ensure $data is a string and compact
		if (is_array($data)) { $data = json_encode($data); }
		$d = ($data === '' || $data === null) ? $fname : ($fname === '' ? (string)$data : $fname.' | '.(string)$data);
		// Let MySQL safely clamp the lengths with LEFT(); also guard execute to avoid fatal on strict hosts
		$stmt = $conn->prepare("INSERT INTO history (data,action,date,user) VALUES (LEFT(?,255),LEFT(?,100),NOW(),LEFT(?,50))");
		if ($stmt) {
			$stmt->bind_param('sss',$d,$action,$type);
			@ $stmt->execute();
		}
	}
?>
