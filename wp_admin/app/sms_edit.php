<?php
session_start();
include "includes/conn.php";
$APIKEY =$_POST['APIKEY'];
$SENDERNAME =$_POST['SENDERNAME'];
$APILINK = $_POST["APILINK"];

$stmt =$conn->prepare("UPDATE tbl_sms SET APIKEY=?, SENDERNAME=?, APILINK=? WHERE SMSI_ID=?");
$stmt->bind_param('ssss',$APIKEY,$SENDERNAME,$APILINK, $_POST["SMSI_ID"]);
header('Content-Type: application/json');
if($stmt->execute()){
  echo json_encode([
    'status' => 'success',
    'message' => 'SMS has been updated successfully'
  ]);
}else{
  echo json_encode([
    'status' => 'error',
    'message' => 'Sorry! You have entered invalid api'
  ]);
}
?>

