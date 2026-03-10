 <?php
 if (empty($_SESSION['token'])) {
  $_SESSION['token'] = bin2hex(random_bytes(32));
 }
 error_reporting(0);
 if(isset($_POST['send_message'])){
   //Verifying CSRF Token
   if (!empty($_POST['csrftoken'])) {
     if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
 
     $C_NAME =$_POST["C_NAME"];
     $C_EMAIL =$_POST["C_EMAIL"];
     $C_PHONE =$_POST["C_PHONE"];
     $C_MESSAGE =$_POST["C_MESSAGE"];
     $C_SUBJECT =$_POST["C_SUBJECT"];
     $query=mysqli_query($conn,"INSERT into tbl_contact_us(C_NAME,C_EMAIL,C_PHONE,C_MESSAGE,C_SUBJECT) values('$C_NAME','$C_EMAIL','$C_PHONE','$C_MESSAGE','$C_SUBJECT')");
     if($query):
      $_SESSION['success']="Your message has been successfully send!";
       unset($_SESSION['token']);
     else :
      $_SESSION['error']="Something went wrong. Please try again.";  
 
     endif;
     
   }
   header("location: index.php#contact");
   }
   
 }

 ?>
 
 <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Get in Touch – We’re Always Available!</p>
      </div><!-- End Section Title -->

      <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.it/maps?q=<?=$SYS_ADDRESS; ?>&output=embed" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Location</h3>
                <p><?php print $SYS_ADDRESS;?></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p><?php print $SYS_NUMBER;?></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p><?php print $SYS_EMAIL;?></p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
          <?php
							  if(isset($_SESSION['error'])){
								echo "
								<div id='alert' class='alert alert-danger'>
								
								  <h4><i class='icon fa fa-warning'></i> ERROR!</h4>
								  ".$_SESSION['error']."
								</div>
								";
								unset($_SESSION['error']);
							  }
							  if(isset($_SESSION['success'])){
								echo "
								<div class='alert bg-primary text-white' id='alert'>
								  <h4><i class='icon fa fa-check'></i> SUCCESS!</h4>
								  ".$_SESSION['success']."
								</div>
								";
								unset($_SESSION['success']);
							  }
							  ?>
            <form method="POST" autocomplete="off" data-aos="fade-up" data-aos-delay="200">
            <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" /> 
            <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="C_NAME" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="C_EMAIL" placeholder="Your Email" required="">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="C_PHONE" placeholder="Your Phone" required="">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="C_SUBJECT" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="C_MESSAGE" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12">
                <?php
							  if(isset($_SESSION['error'])){
								echo "
								<div id='alert' class='alert alert-danger'>
								
								  <h4><i class='icon fa fa-warning'></i> ERROR!</h4>
								  ".$_SESSION['error']."
								</div>
								";
								unset($_SESSION['error']);
							  }
							  if(isset($_SESSION['success'])){
								echo "
								<div class='alert bg-primary text-white' id='alert'>
								  <h4><i class='icon fa fa-check'></i> SUCCESS!</h4>
								  ".$_SESSION['success']."
								</div>
								";
								unset($_SESSION['success']);
							  }
							  ?>

                  <button type="submit" class="btn btn-primary" name="send_message">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section>