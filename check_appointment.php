<?php require_once "header.php";
if (empty($_SESSION['token'])) {
  $_SESSION['token'] = bin2hex(random_bytes(32));
 }
 $link="";
 if(isset($_POST['search'])){
   //Verifying CSRF Token
   if (!empty($_POST['csrftoken'])) {
     if(hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
 
     $AUTO_NUMBER = $conn -> real_escape_string(strtoupper($_POST['AUTO_NUMBER']));
     $FIRSTNAME = $conn -> real_escape_string(strtoupper($_POST['FIRSTNAME']));
     $LASTNAME =$conn -> real_escape_string(strtoupper($_POST["LASTNAME"]));
     $stmt =$conn->prepare("SELECT * FROM tbl_appointment WHERE AUTO_NUMBER=? AND FIRSTNAME=? AND LASTNAME=?");
       $stmt->bind_param('sss',$AUTO_NUMBER,$FIRSTNAME,$LASTNAME);
       if($stmt->execute()){
       $result =$stmt->get_result();
       if($result->num_rows >0){
         $row=$result->fetch_assoc();
         $_SESSION['admin'] = $row['APP_ID'];
         $link='check_appointment_process.php?AUTO_NUMBER='.$AUTO_NUMBER.'&FIRSTNAME='.$FIRSTNAME.'&LASTNAME='.$LASTNAME.'';
         $_SESSION['success']="1 result's found!";
       }else{
         $link="No result";
         $_SESSION['error']="No record found";
       }
       }
 
   }
   }
 }else{
   $_SESSION['info']="No search history";
 }

?>
<style>
  .block_btn {
  display: block;
  width: 100%;
  border: none;
  /* background-color: #04AA6D; */
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}
</style>
<body class="starter-page-page">

<?php $HIDE_TOPBAR = true; require_once "header_menu.php";?>

  <main class="main">
    <style>
      /* Uppercase display for entries on the check form */
      .check-form-uppercase input[type="text"]{
        text-transform: uppercase;
      }
    </style>

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8 ">
              <h1 class="text-center">Check Appointment</h1>
              <p class="mb-0 text-center">To view your existing appointment. Please ensure that you provide complete and accurate information.</p>
              <br>
              <br>
              <div class="col-lg-12">
            <form class="form-horizontal check-form-uppercase" autocomplete="off" method="POST" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">
              <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
                <div class="col-md-12">
                <label for="email">REFERENCE NUMBER</label>
                <input type="text" class="form-control border-1" name="AUTO_NUMBER" required>
                </div>

                <div class="col-md-12">
                <label for="email">FIRSTNAME </label>
                <input type="text" class="form-control border-1" name="FIRSTNAME" placeholder="" required>
                </div>
                <div class="col-md-12">
                <label for="email">LASTNAME </label>
                <input type="text" class="form-control border-1" name="LASTNAME" placeholder="" required>
                </div>
                <div class="col-md-12">
                  <button type="submit" name="search" class="btn btn-primary d-grid gap-2 block_btn">Submit</button>
                </div>
              </div>
            </form>
          </div><!-- End Contact Form -->   
            
          <div class="mt-3">
          <h4 class="text-primary">
									<?php
							  if(isset($_SESSION['error'])){
								echo "
								<div id='alerts' class='alert alert-danger'>
								
								  <h4><i class='icon fa fa-warning'></i> ERROR!</h4>
								  ".$_SESSION['error']."
								</div>
								";
								unset($_SESSION['error']);
							  }
							  if(isset($_SESSION['success'])){
								echo "
								<div class='alert bg-primary text-white' id='alerts'>
								  <h4><i class='icon fa fa-check'></i> FOUND!</h4>
								  ".$_SESSION['success']."
								</div>
								";
								unset($_SESSION['success']);
							  }
							  if(isset($_SESSION['info'])){
								echo "
								<div class='alert bg-warning text-white' id='alerts'>
								  <h4><i class='icon fa fa-check'></i> MESSAGE!</h4>
								  ".$_SESSION['info']."
								</div>
								";
								unset($_SESSION['info']);
							  }
							  ?>
								</h4>
                <div class="embed-responsive embed-responsive-16by9">
              <?php if($link==""){
                ?>
                <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
                  <div class="rounded">
                  <iframe class="rounded w-100 embed-responsive-item" 
                  style="height: 1000px;" src="" 
                  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              <?php }else{?>
              <iframe class="rounded w-100 embed-responsive-item" 
                style="height: 820px;" src="<?=$link;?>" 
                loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen="true"></iframe>
              <?php } ?>
            </div>
            </div>


            </div>
          </div>
        </div>
      </div>
    </div><!-- End Page Title -->
  </main>
  <?php include "footer.php";?>
