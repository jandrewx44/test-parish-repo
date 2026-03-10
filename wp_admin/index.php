<?php 
$timezone = 'Asia/Manila';date_default_timezone_set($timezone);
include "conn.php";
if(isset($_SESSION['admin'])){
  header('location:app/home.php');
}
$setting_query ="SELECT * FROM tbl_system_setting WHERE SYS_ISDEFAULT='YES'";
$setting_query_run=$conn->query($setting_query);
if($setting_query_run->num_rows>0){
    foreach ($setting_query_run as $key => $value) {
       $SYS_NAME =$value['SYS_NAME'];
       $SYS_ADDRESS =$value['SYS_ADDRESS'];
       $SYS_LOGO =$value['SYS_LOGO'];
       $SYS_EMAIL =$value['SYS_EMAIL'];
       $SYS_ABOUT =$value['SYS_ABOUT'];
    }
}else{
    $SYS_NAME ="NAME NOT SET";
    $SYS_ADDRESS ="";
    $SYS_LOGO ="";
    $SYS_EMAIL ="";
    $SYS_ABOUT ="";
}

?>
<!DOCTYPE html>
<html class="no-js" lang="en" 
xmlns:og="http://opengraphprotocol.org/schema/"
xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
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
        <link rel="icon" type="image/x-icon" href="images/logo.png">
        <?php }else{ ?>
        <link rel="icon" type="image/x-icon" href="data:image/jpg;charset=utf8;base64,<?=base64_encode($SYS_LOGO); ?>">
        <?php }?>
        <link rel="stylesheet" type="text/css" href="slider/cssss/demos.css"/>
        <link rel="stylesheet" type="text/css" href="slider/css/style2.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Google Font: Source Sans Pro -->
<link rel="stylesheet"href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-solid.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
</head>

<body class="hold-transition login-page">
<ul class="cb-slideshow list-group">
			<li><span>Image 01</span><div><h3></h3></div></li>
            <li><span>Image 02</span><div><h3></h3></div></li>
            <li><span>Image 03</span><div><h3></h3></div></li>
            <li><span>Image 04</span><div><h3></h3></div></li>
            <li><span>Image 05</span><div><h3></h3></div></li>
            <li><span>Image 06</span><div><h3></h3></div></li>
        </ul>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline" style="background-color: rgba(0, 0, 0,0.40);">
    <div class="card-header text-center text-white">
    <!-- <h3 href="#" class="h4">ST. PHILIP BENIZI  <br> PARISH CHURCH</h3> -->
    <?php 
			if($SYS_LOGO==""){
			?>
				<img src="images/logo.png" width="100" height="100" class="img-circle elevation-0 brand-image float-lefts"/>
        <!-- <h3 href="#" class="h4">ST. PHILIP BENIZI  <br> PARISH CHURCH</h3> -->
			<?php }else{ ?>
				<img src="data:image/jpg;charset=utf8;base64,<?=base64_encode($SYS_LOGO); ?>" width="100" height="100" class="img-circle elevation-0 brand-image float-lefts"> </a>
       
        <?php }?>

    </div>
    <div class="card-body">
      <p class="login-box-msg text-white">PLEASE LOGIN</p>
      <form action="login.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="USERNAME" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="PASSWORD">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!--<div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>----->
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="login" class="btn btn-block btn-success"><i class="fas fa-solid fa-arrow-right-from-bracket"></i> LOGIN</button>
            <a href="recover_forpassword.php" class="btn btn-block btn-primary">forgot password</a>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
	
	
  </div><br>	
  <!-- /.card -->
  <?php
  		if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible' id='alert'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h5><i class='fa fa-solid fa-exclamation'></i> Error!</h5> 
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
  	?>
</div>
<!-- /.login-box -->


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


</body>
</html>
