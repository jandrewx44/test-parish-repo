<?php
session_start();
$conn = new mysqli('localhost', 'root', '', '2906898_mpcdatabase');
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>
