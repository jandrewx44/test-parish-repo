<?php
session_start();
error_reporting(0);
include "app/includes/conn.php";
$checkedHindi ="";
$checkedEng="";
$sql_query ="SELECT * FROM tbl_system_setting";
$sql_query_run =$conn->query($sql_query);
if($sql_query_run->num_rows >0){
    foreach ($sql_query_run as $key => $value_setting) {
          $SYS_ID =$value_setting['SYS_ID'];
          $SYS_NAME=$value_setting['SYS_NAME'];
          $SYS_ADDRESS=$value_setting['SYS_ADDRESS'];
          $SYS_LOGO=$value_setting['SYS_LOGO'];
          $SYS_EMAIL=$value_setting['SYS_EMAIL'];
          $SYS_ABOUT=$value_setting['SYS_ABOUT'];
          $SYS_ISDEFAULT=$value_setting['SYS_ISDEFAULT'];
          $SYS_SECOND_LOGO=$value_setting['SYS_SECOND_LOGO'];
         
        if($SYS_ISDEFAULT == "YES") {
            $checkedEng = 'checked';
        } elseif($SYS_ISDEFAULT == "NO") {
            $checkedHindi = 'checked';
        }
    }
      
}else{
      $SYS_ID ="";
      $SYS_NAME="";
      $SYS_ADDRESS="";
      $SYS_LOGO="";
      $SYS_EMAIL="";
      $SYS_ABOUT="";
      $SYS_ISDEFAULT="";
      $checkedHindi ="";
      $checkedEng="";
}


if(isset($_POST['login'])){
  $FIRSTNAME = $_POST['FIRSTNAME'];
  $LASTNAME = $_POST['LASTNAME'];
  $USERNAME = $_POST['USERNAME'];

  $sql1 = "SELECT ID, FIRSTNAME, LASTNAME, USERNAME FROM tbl_users WHERE FIRSTNAME = '$FIRSTNAME' AND LASTNAME='$LASTNAME'";
  $query1 = $conn->query($sql1);
  if($query1->num_rows > 0){
    $rowss = $query1->fetch_assoc();
    if($USERNAME==$rowss['USERNAME']){
      $_SESSION['admin'] = $rowss['ID'];	
      header('location:recover-password.php?recover-password');
    }else{
      $_SESSION['error'] = 'Incorrect information';
    }
  }else{
    $_SESSION['error'] = 'username or password not found!';
  }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <?php 
    if($SYS_NAME==""){
    ?>
       <title>Not Set</title>
    <?php }else{ ?>
      <title><?=$SYS_NAME;?></title>
    <?php }?>
  
  <?php 
    if($SYS_LOGO==""){
    ?>
      <link rel="icon" type="image/x-icon" href="images/no-image-icon.png">
    <?php }else{ ?>
      <link rel="icon" type="image/x-icon" href="data:image/jpg;charset=utf8;base64,<?=base64_encode($SYS_LOGO); ?>">
    <?php }?>
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <link rel="stylesheet" type="text/css" href="slider/css/demos.css" />
        <link rel="stylesheet" type="text/css" href="slider/css/style2.css" />
		<link rel="stylesheet"href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css">
		<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-solid.css">
		 <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
      

  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="plugins/ekko-lightbox/ekko-lightbox.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    </head>

    <body class="hold-transition login-page" style="background-color: gray;">
    <ul class="cb-slideshow list-group">
			<li><span>Image 01</span><div><h3></h3></div></li>
            <li><span>Image 02</span><div><h3></h3></div></li>
            <li><span>Image 03</span><div><h3></h3></div></li>
            <li><span>Image 04</span><div><h3></h3></div></li>
            <li><span>Image 05</span><div><h3></h3></div></li>
            <li><span>Image 06</span><div><h3></h3></div></li>
        </ul>
<div class="login-boxs mt-3 col-md-4" style="margin-top:0%">
<?php
  		if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible' id='alert'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
  	?>
  <div class="card card-outline" style="background:rgba(255, 255, 255, 0.60);">
    <div class="card-header text-center">
     <?php 
        if($SYS_LOGO==""){
        ?>
          <img src="images/no-image-icon.png" class="brand-image img-circle" alt="User Image">
        <?php }else{ ?>
          <img src="data:image/jpg;charset=utf8;base64,<?=base64_encode($SYS_LOGO); ?>" class="brand-image img-circle" width="130">
        <?php }?>
    </div>

    <div class="card-body">
    <div class="card-header text-center">
      <a href="#" class="h4">FORGOT PASSWORD</a>
    </div>
      <p class="login-box-msgs text-justify">You forgot your password? Here you can easily retrieve a new password. Please enter your accurate details.</p>
      <form method="POST" class="needs-validation" autocomplete="off" novalidate>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
              <label for="">FIRSTNAME</label>
            <input type="text" name="FIRSTNAME"  class="form-control" required>
            <div class="invalid-feedback">
                Firstname is required*
            </div>
          </div>
        </div>
        <div class="col-md-12">
        <div class="form-group">
            <label for="">LASTNAME</label>
          <input type="text" name="LASTNAME"  class="form-control" required>
          <div class="invalid-feedback">
              Lastname is required*
          </div>
        </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
            <label for="">USERNAME</label>
          <input type="text" name="USERNAME"  class="form-control" required>
          <div class="invalid-feedback">
              Username is required*
          </div>
        </div>
    </div>
    </div>
        
      <div class="row">
        <div class="col-12">
          <button type="submit" name="login" class="btn btn-success btn-block"><span class="fas fa-arrow-right"></span> Submit</button>
        </div>
      </div>
		  
      </form>
    <a href="index.php?signin" class="btn btn-primary btn-block mt-2"> Login</a>
  </div>
</div>	
  <!-- /.card -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>


<script type="text/javascript">
	$(document).ready(function () {
	window.setTimeout(function() {
		$("#alert").fadeTo(1000, 0).slideUp(1000, function(){
			$(this).remove(); 
		});
	}, 5000);

	});
</script>
<script>
 // Bootstrap 4 Validation
 $(".needs-validation").submit(function () {
    var form = $(this);
    if (form[0].checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }
    form.addClass("was-validated");
  });
</script>
	
</body>
</html>
