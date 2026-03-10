<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'baptismal.php';
	}

	if(isset($_POST['submit'])){			
		$RECORD_NUMBER    	=$_POST['RECORD_NUMBER'];
		$CHILD_NAME     	=$_POST['CHILD_NAME'];
        $DATE_OF_BIRTH  	=$_POST['DATE_OF_BIRTH'];
        $PLACE_OF_BIRTH   	=mysqli_real_escape_string($conn,($_POST['PLACE_OF_BIRTH']));
		$FATHER_NAME		=$_POST['FATHER_NAME'];
        $MOTHER_NAME    	=$_POST['MOTHER_NAME'];
        $NAME_OF_PRIEST     =$_POST['NAME_OF_PRIEST'];
        $NAME_OF_CHURCH     =$_POST['NAME_OF_CHURCH'];
        $PERMANENT_ADDRESS  =mysqli_real_escape_string($conn,($_POST['PERMANENT_ADDRESS']));
        $LIST_OF_SPONSORS   =$_POST['LIST_OF_SPONSORS'];
		$GENDER   			=$_POST['GENDER'];
		$DATE_OF_BAPTISM    =$_POST['DATE_OF_BAPTISM'];
		$PLACE_OF_BAPTISM   =mysqli_real_escape_string($conn,($_POST['PLACE_OF_BAPTISM']));
		$BOOK_NO    		=$_POST['BOOK_NO'];
		$PAGE_NO    		=$_POST['PAGE_NO'];
		$REG_NO    			=$_POST['REG_NO'];
		$SERIES_NO    		=$_POST['SERIES_NO'];
		$NOTATIONS    		=mysqli_real_escape_string($conn,($_POST['NOTATIONS']));
		
        if($DATE_OF_BIRTH==""){
			$NULL = 'NULL';
		}else{
			$NULL = $DATE_OF_BIRTH;
		}
		//$sql = "SELECT * FROM tbl_baptismal WHERE RECORD_NUMBER = '$RECORD_NUMBER' OR BOOK_NO = '$BOOK_NO' OR PAGE_NO = '$PAGE_NO' OR REG_NO = '$REG_NO'";
		
		// $sql="SELECT * FROM tbl_baptismal WHERE RECORD_NUMBER = '$RECORD_NUMBER'";
		
		// $query = $conn->query($sql);
		// if($query->num_rows > 0){
			// //$_SESSION['error'] = 'Record No.'.$RECORD_NUMBER.' or Book No. '.$BOOK_NO.' or Page No. '.$PAGE_NO.' or Reg No. '.$REG_NO.' must be unique, please check.';
		// $_SESSION['error'] = 'Record No.'.$RECORD_NUMBER.' already exist!';
		// }else{
			


		// }
		
		$sql= "INSERT INTO `tbl_baptismal`(`RECORD_NUMBER`, `CHILD_NAME`, `DATE_OF_BIRTH`, `PLACE_OF_BIRTH`, `FATHER_NAME`, `MOTHER_NAME`, `NAME_OF_PRIEST`, `NAME_OF_CHURCH`, `PERMANENT_ADDRESS`, `LIST_OF_SPONSORS`,`GENDER`,`DATE_OF_BAPTISM`,`PLACE_OF_BAPTISM`,`BOOK_NO`,`PAGE_NO`,`REG_NO`,`SERIES_NO`,`NOTATIONS`)
            VALUES ('$RECORD_NUMBER','$CHILD_NAME','$NULL','$PLACE_OF_BIRTH','$FATHER_NAME','$MOTHER_NAME','$NAME_OF_PRIEST','$NAME_OF_CHURCH','$PERMANENT_ADDRESS','$LIST_OF_SPONSORS','$GENDER','$DATE_OF_BAPTISM','$PLACE_OF_BAPTISM','$BOOK_NO','$PAGE_NO','$REG_NO','$SERIES_NO','$NOTATIONS')";
			if($conn->query($sql)){
				$_SESSION['success'] = 'New record have been created.';
        audit_log($conn,$user,'Baptism Added',"Record No: $RECORD_NUMBER - $CHILD_NAME");
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
	

	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
		
	}
	//header('location: clientAccount.php?q='.$_POST['id']);
	header('location:'.$return);
?>
