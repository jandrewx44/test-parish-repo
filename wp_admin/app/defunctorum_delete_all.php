<?php
    include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'defunctorum.php?home=defunctorum';
	}

    if(isset($_POST['submit'])){

        $sql="DELETE FROM tbl_death";
        $stmt=$conn->prepare($sql);
        if($stmt->execute()){
            $_SESSION['success'] ="All death records have been successfully deleted";
            audit_log($conn,$user,'Death Deleted All',"All records cleared");
        }else{
            $_SESSION['error'] ="No records deleted!";
        }
    }else{
        $_SESSION['error'] ="Invalid request";
    }
    header('location:'.$return);
?>
