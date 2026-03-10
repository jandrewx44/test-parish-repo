<?php
include 'includes/session.php';
$return = isset($_POST['return']) ? $_POST['return'] : 'appointment.php?home=appointment_approved';
$status = isset($_POST['status']) ? $_POST['status'] : '';
$allowed = array('Pending','Approved','Completed','Rejected');
if($status === '' || !in_array($status, $allowed)){
    $_SESSION['error'] = 'Invalid delete request';
    header('location:'.$return);
    exit;
}
$stmt = $conn->prepare("DELETE FROM tbl_appointment WHERE APP_STATUS=?");
$stmt->bind_param('s',$status);
if($stmt->execute()){
    $_SESSION['success'] = 'All '.$status.' appointments have been deleted';
    audit_log($conn,$user,'Appointment Delete All',"STATUS: ".$status." AFFECTED: ".$conn->affected_rows);
}else{
    $_SESSION['error'] = 'Delete failed';
}
header('location:'.$return);
