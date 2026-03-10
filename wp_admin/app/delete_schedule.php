<?php 
session_start();
require_once('includes/conn.php');
if(!isset($_GET['id'])){
    $_SESSION['error'] = 'Undefined Schedule ID.';
    $conn->close();
    exit;
}

$delete = $conn->query("DELETE FROM `schedule_list` where id = '{$_GET['id']}'");
if($delete){
	 $_SESSION['success'] = 'Event has deleted successfully.';
}else{
   $_SESSION['error'] = 'somthing went wrong!!';
}
$conn->close();
header("location:home.php");
?>