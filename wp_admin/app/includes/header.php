<?php 
require_once "includes/session.php";
$checkedHindi ="";
$checkedEng="";
$sql_stmt =$conn->prepare("SELECT * FROM tbl_system_setting");
if($sql_stmt->execute()){
  $systm_result=$sql_stmt->get_result();
if($systm_result->num_rows >0){
    foreach ($systm_result as $key => $value_setting) {
          $SYS_ID = isset($value_setting['SYS_ID']) ? $value_setting['SYS_ID'] : '';
          $SYS_NAME = isset($value_setting['SYS_NAME']) ? $value_setting['SYS_NAME'] : '';
          $SYS_ADDRESS = isset($value_setting['SYS_ADDRESS']) ? $value_setting['SYS_ADDRESS'] : '';
          $SYS_LOGO = isset($value_setting['SYS_LOGO']) ? $value_setting['SYS_LOGO'] : '';
          $SYS_EMAIL = isset($value_setting['SYS_EMAIL']) ? $value_setting['SYS_EMAIL'] : '';
          $SYS_ISDEFAULT = isset($value_setting['SYS_ISDEFAULT']) ? $value_setting['SYS_ISDEFAULT'] : '';
          $SYS_ABOUT = isset($value_setting['SYS_ABOUT']) ? $value_setting['SYS_ABOUT'] : '';
          $SYS_SECOND_LOGO = isset($value_setting['SYS_SECOND_LOGO']) ? $value_setting['SYS_SECOND_LOGO'] : '';
          $SYS_SHORTNAME = isset($value_setting['SYS_SHORTNAME']) ? $value_setting['SYS_SHORTNAME'] : '';
          $SYS_NUMBER = isset($value_setting['SYS_NUMBER']) ? $value_setting['SYS_NUMBER'] : '';
          $SYS_FACEBOOK = isset($value_setting['SYS_FACEBOOK']) ? $value_setting['SYS_FACEBOOK'] : '';
          $SYS_TWITTER = isset($value_setting['SYS_TWITTER']) ? $value_setting['SYS_TWITTER'] : '';
          $SYS_INSTAGRAM = isset($value_setting['SYS_INSTAGRAM']) ? $value_setting['SYS_INSTAGRAM'] : '';
          $SYS_LINKEDIN = isset($value_setting['SYS_LINKEDIN']) ? $value_setting['SYS_LINKEDIN'] : '';
          $SYS_DIOCESE = isset($value_setting['SYS_DIOCESE']) ? $value_setting['SYS_DIOCESE'] : '';
          $SYS_CHURCH_NAME = isset($value_setting['SYS_CHURCH_NAME']) ? $value_setting['SYS_CHURCH_NAME'] : '';
          

        if($SYS_ISDEFAULT == "YES") {
            $checkedEng = 'checked';
        } elseif($SYS_ISDEFAULT == "NO") {
            $checkedHindi = 'checked';
        }
    }
      
}else{
  $SYS_ID = "";
  $SYS_NAME = "";
  $SYS_ADDRESS = "";
  $SYS_LOGO = "";
  $SYS_EMAIL = "";
  $SYS_ISDEFAULT = "";
  $SYS_ABOUT = "";
  $SYS_SECOND_LOGO = "";
  $SYS_SHORTNAME = "";
  $SYS_NUMBER = "";
  $SYS_FACEBOOK = "";
  $SYS_TWITTER = "";
  $SYS_INSTAGRAM = "";
  $SYS_LINKEDIN = "";
  $SYS_DIOCESE = "";
  $SYS_CHURCH_NAME = "";

      $checkedHindi ="";
      $checkedEng="";
}
} else {
  // If execute fails, set safe defaults to avoid notices on strict hosts
  $SYS_ID = "";
  $SYS_NAME = "";
  $SYS_ADDRESS = "";
  $SYS_LOGO = "";
  $SYS_EMAIL = "";
  $SYS_ISDEFAULT = "";
  $SYS_ABOUT = "";
  $SYS_SECOND_LOGO = "";
  $SYS_SHORTNAME = "";
  $SYS_NUMBER = "";
  $SYS_FACEBOOK = "";
  $SYS_TWITTER = "";
  $SYS_INSTAGRAM = "";
  $SYS_LINKEDIN = "";
  $SYS_DIOCESE = "";
  $SYS_CHURCH_NAME = "";
  $checkedHindi ="";
  $checkedEng="";
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
      <title><?=$SYS_SHORTNAME;?> | <?=$SYS_NAME;?></title>
    <?php }?>
  
  <?php 
    if($SYS_LOGO==""){
      echo '<link rel="icon" type="image/x-icon" href="../images/Logo.png">';
    }else{
      // If the stored value is already base64 (safe ASCII), use it; otherwise encode binary
      $is_base64 = preg_match('/^[A-Za-z0-9+\/=\r\n]+$/', $SYS_LOGO) === 1;
      $logo_b64 = $is_base64 ? $SYS_LOGO : base64_encode($SYS_LOGO);
      echo '<link rel="icon" type="image/png" href="data:image/png;base64,'.$logo_b64.'">';
    }
  ?>
 <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs5.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

<link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar/lib/main.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-solid.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <style>
    .tooltip { top: 0; }
    a.active.nav-link{background-color: rgba(252, 66, 123,1.0)!important;color:#fff;}
    .main-sidebar .brand-link {
      padding: 6px 10px;
      min-height: 46px;
    }
    .main-sidebar .brand-link .brand-image {
      height: 28px;
      width: 28px;
      margin-top: -2px;
    }
    .main-sidebar .brand-link .brand-text {
      font-size: 14px;
    }
    .main-sidebar .nav-link {
      padding: 4px 10px;
      min-height: 32px;
      font-size: 13px;
    }
    .main-sidebar .nav-link p {
      margin: 0;
    }
    .main-sidebar .nav-icon {
      font-size: 14px;
      margin-right: 6px;
    }
    .main-sidebar .nav-header {
      font-size: 11px;
      padding: 4px 10px 2px;
    }
    .content-header .breadcrumb, 
    .content-header h1, 
    .content-header h4 {
      display: none !important;
    }
  </style>
 
</head>
