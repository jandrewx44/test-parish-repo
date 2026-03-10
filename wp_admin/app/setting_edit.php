<?php
	include 'includes/session.php';
    if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'setting.php?home=setting';
	}

	if(isset($_POST['form-system-update'])){			
		$SYS_ID			=$_POST['SYS_ID'];
		$SYS_NAME		=$_POST['SYS_NAME'];
		$SYS_ADDRESS	=$_POST['SYS_ADDRESS'];
		$SYS_EMAIL		=$_POST['SYS_EMAIL'];
		$SYS_ABOUT		=$_POST['SYS_ABOUT'];
		$r1				=$_POST['r1'];
		$SYS_SHORTNAME		=$_POST['SYS_SHORTNAME'];
		$SYS_NUMBER			=$_POST['SYS_NUMBER'];
		$SYS_FACEBOOK			=$_POST['SYS_FACEBOOK'];
		$SYS_TWITTER			=$_POST['SYS_TWITTER'];
		$SYS_INSTAGRAM			=$_POST['SYS_INSTAGRAM'];
		$SYS_LINKEDIN			=$_POST['SYS_LINKEDIN'];
		$SYS_DIOCESE			= isset($_POST['SYS_DIOCESE']) ? $_POST['SYS_DIOCESE'] : '';
		$SYS_CHURCH_NAME			= isset($_POST['SYS_CHURCH_NAME']) ? $_POST['SYS_CHURCH_NAME'] : '';

		// Ensure columns exist on older schemas (hosted)
		$col = $conn->query("SHOW COLUMNS FROM tbl_system_setting LIKE 'SYS_DIOCESE'");
		if(!$col || $col->num_rows==0){
			@$conn->query("ALTER TABLE tbl_system_setting ADD COLUMN SYS_DIOCESE VARCHAR(255) NULL");
		}
		$col2 = $conn->query("SHOW COLUMNS FROM tbl_system_setting LIKE 'SYS_CHURCH_NAME'");
		if(!$col2 || $col2->num_rows==0){
			@$conn->query("ALTER TABLE tbl_system_setting ADD COLUMN SYS_CHURCH_NAME VARCHAR(255) NULL");
		}

		$stmt = $conn->prepare("UPDATE tbl_system_setting SET 
			SYS_NAME=?, 
			SYS_ADDRESS=?,
			SYS_EMAIL=?, 
			SYS_ABOUT=?,
			SYS_ISDEFAULT=?,
			SYS_SHORTNAME=?,
			SYS_NUMBER=?,
			SYS_FACEBOOK=?,
			SYS_TWITTER=?,
			SYS_INSTAGRAM=?,
			SYS_LINKEDIN=?,
			SYS_DIOCESE=?,
			SYS_CHURCH_NAME=?
		 WHERE SYS_ID=?");
		$ok = false;
		if($stmt){
			$stmt->bind_param('ssssssssssssss',
				$SYS_NAME,$SYS_ADDRESS,$SYS_EMAIL,$SYS_ABOUT,$r1,$SYS_SHORTNAME,$SYS_NUMBER,$SYS_FACEBOOK,$SYS_TWITTER,$SYS_INSTAGRAM,$SYS_LINKEDIN,$SYS_DIOCESE,$SYS_CHURCH_NAME,$SYS_ID);
			$ok = $stmt->execute();
		}
		if($ok){ 
			$_SESSION['success'] = "Updated uploaded successfully."; 
		}else{ 
			$_SESSION['error'] = "File upload failed, please try again."; 
		}  

	}else{
		$_SESSION['error'] = 'Fill up add form first';
		
	}
	//header('location: clientAccount.php?q='.$_POST['id']);
	header('location:'.$return);
?>
