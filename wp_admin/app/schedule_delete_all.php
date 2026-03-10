<?php
    include 'includes/session.php';

    if(isset($_GET['return'])){
        $return = $_GET['return'];
    } else {
        $return = 'schedule.php?schedule';
    }

    if(isset($_POST['submit'])){
        $sql = "DELETE FROM tbl_slot_date";
        $stmt = $conn->prepare($sql);
        if($stmt->execute()){
            $_SESSION['success'] = "All schedules have been successfully deleted";
            audit_log($conn,$user,'Schedule Deleted All',"All slots cleared");
        } else {
            $_SESSION['error'] = "No schedules were deleted";
        }
    } else {
        $_SESSION['error'] = "Please confirm delete all action first";
    }

    header('location:'.$return);
?>
