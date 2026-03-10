<?php
    include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'conversion.php?home=conversion';
	}

    if(isset($_POST['submit'])){

        $sql="DELETE FROM tbl_conversion";
        $stmt=$conn->prepare($sql);
        if($stmt->execute()){
            $_SESSION['success'] ="All conversion records have been successfully deleted";
        }else{
            $_SESSION['error'] ="No records deleted!";
        }
    }else{
        $_SESSION['error'] ="Invalid request";
    }
    header('location:'.$return);
?>
