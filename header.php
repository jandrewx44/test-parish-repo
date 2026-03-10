<?php

session_start();
 include "wp_admin/app/includes/conn.php";
 date_default_timezone_set("Asia/Manila");
$CURRENT_DATE =date('Y-m-d');
$checkedHindi ="";
$checkedEng="";
$sql_stmt =$conn->prepare("SELECT * FROM tbl_system_setting");
if($sql_stmt->execute()){
  $systm_result=$sql_stmt->get_result();
if($systm_result->num_rows >0){
    foreach ($systm_result as $key => $value_setting) {
          $SYS_ID =$value_setting['SYS_ID'];
          $SYS_NAME=$value_setting['SYS_NAME'];
          $SYS_ADDRESS=$value_setting['SYS_ADDRESS'];
          $SYS_LOGO=$value_setting['SYS_LOGO'];
          $SYS_LOGO=$value_setting['SYS_LOGO'];
          $SYS_EMAIL=$value_setting['SYS_EMAIL'];
          $SYS_ISDEFAULT=$value_setting['SYS_ISDEFAULT'];
          $SYS_ABOUT=$value_setting['SYS_ABOUT'];
          $SYS_SECOND_LOGO=$value_setting['SYS_SECOND_LOGO'];
          $SYS_SHORTNAME=$value_setting['SYS_SHORTNAME'];
          $SYS_NUMBER=$value_setting['SYS_NUMBER'];
          $SYS_FACEBOOK=$value_setting['SYS_FACEBOOK'];
          $SYS_TWITTER=$value_setting['SYS_TWITTER'];
          $SYS_INSTAGRAM=$value_setting['SYS_INSTAGRAM'];
          $SYS_LINKEDIN=$value_setting['SYS_LINKEDIN'];
          $SYS_GCASH_NUMBER=$value_setting['SYS_GCASH_NUMBER'];
        if($SYS_ISDEFAULT == "YES") {
            $checkedEng = 'checked';
        } elseif($SYS_ISDEFAULT == "NO") {
            $checkedHindi = 'checked';
        }
    }
      
}else{
  $SYS_ID ="";
  $SYS_NAME="";
  $SYS_ADDRESS="";;
  $SYS_LOGO="";
  $SYS_LOGO="";
  $SYS_EMAIL="";
  $SYS_ISDEFAULT="";
  $SYS_ABOUT="";
  $SYS_SECOND_LOGO="";
  $SYS_SHORTNAME="";
  $SYS_NUMBER="";
  $SYS_FACEBOOK="";
  $SYS_TWITTER="";
  $SYS_INSTAGRAM="";
  $SYS_LINKEDIN="";
  $SYS_GCASH_NUMBER="";

      $checkedHindi ="";
      $checkedEng="";
}
}
// Override contact details per request
$SYS_EMAIL = "st.philipbeniziparish@gmail.com";
$SYS_NUMBER = "09495062894";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="">
  <meta name="keywords" content="">
<?php 
    if($SYS_NAME==""){
    ?>
       <title>Not Set</title>
    <?php }else{ ?>
      <title><?=$SYS_SHORTNAME;?> | <?=$SYS_NAME;?></title>
    <?php }?>
  
  <?php 
    if($SYS_LOGO==""){
    ?>
        <link href="assets/img/favicon.png" rel="icon">
    <?php }else{ ?>
      <link rel="icon" type="image/x-icon" href="data:image/jpg;charset=utf8;base64,<?=base64_encode($SYS_LOGO); ?>">
    <?php }?>
	

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <script>
    var i = document.location.href.lastIndexOf("");
var current = document.location.href.substr(i+1);

    $("#navmenu a").removeClass('active');

    $("#navmenu a[href^='"+current+"']").each(function(){
        $(this).addClass('active');
    });
  </script>
</head>
