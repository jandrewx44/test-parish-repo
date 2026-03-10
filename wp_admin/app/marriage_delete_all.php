<?php
    include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'marriage.php?home=marriage';
	}

    if(isset($_POST['submit'])){

        $sql="DELETE FROM tbl_marriage";
        $stmt=$conn->prepare($sql);
        if($stmt->execute()){
            $_SESSION['success'] ="All marriage records have been successfully deleted";
        }else{
            $_SESSION['error'] ="No records deleted!";
        }
    }else{
        $_SESSION['error'] ="Invalid request";
    }
    header('location:'.$return);
?>
