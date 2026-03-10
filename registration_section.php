<?php require_once "header.php";?>
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

<?php require_once "header_menu.php";?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
              <h1 class="text-center">Create account to make an appointment</h1>
              <p class="mb-0 text-center">Sign Up, Book Your Appointment in Minutes!</p>
            <br>
            <br>
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
              <div class="col-lg-12">
            <form action="registersave.php" method="post" data-aos="fade-up" data-aos-delay="200" autocomplete="off">
            <div class="row gy-4">
               <div class="col-sm-5">
                  	<label for="firstname" class="control-label">FIRST NAME</label>
                    	<input type="text"  class="form-control" name="FNAME" placeholder="" required>
                  
                </div>
			
				 <div class="col-sm-2">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">M.I</label>
                    	<input type="text" class="form-control" maxlength="1" name="MI" placeholder="">
                  	</div>
                </div>
				 <div class="col-sm-5">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">LAST NAME</label>
                    	<input type="text" class="form-control" name="LNAME" placeholder="" required>
                  	</div>
                </div>
                <div class="col-sm-3">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">GENDER </label>
                      <select class="form-control select2" name="GENDER" required>
                        <option value="" selected>-</option>
                        <option>MALE</option>
                        <option>FEMALE</option>
                      </select>
                  	</div>
                </div>

                <div class="col-sm-3">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF BIRTH</label>
                    	<input type="date"  class="form-control"  name="DATE_OF_BIRTH" placeholder="" required>
                  	</div>
                </div>
               <div class="col-sm-3">
                <div class="form-group">
                  	<label for="lastname" class="control-label">AGE</label>
                    	<select class="form-control" name="AGE"  required>
							<option selected disabled>-</option>
						<?php 
						for($value = 1; $value <= 100; $value++){ 
							echo('<option value="' . $value . '">' . $value . '</option>');
						}
						?>
						</select>
                  	</div>
                </div>
                <div class="col-sm-3">
                <div class="form-group">
                  	<label for="address" class="control-label">CONTACT</label>
                      <input type="text" class="form-control" name="CONTACT" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                  	</div>
                </div>

				      <div class="col-sm-12">
                <div class="form-group">
                  	<label for="address" class="control-label">PRESENT ADDRESS</label>
                      <input type="text" class="form-control" name="PLACE_OF_BIRTH" placeholder="" required>
					  
                  	</div>
                </div>

                <div class="col-sm-12">
				    	<div class="form-group">
                <label for="address" class="control-label">USERNAME</label>
                <input type="text" class="form-control" name="USERNAME" id="email" onBlur="userAvailability()"  placeholder="" required>
                    <span id="user-availability-status1"></span>
                  	</div>
                </div>

                <div class="col-sm-6">
				    	<div class="form-group">
                <label for="address" class="control-label">PASSWORD</label>
                <input type="password" class="form-control" id="Password" name="PASSWORD" placeholder="" required>
                  	</div>
                </div>
				<div class="col-sm-6">
				    	<div class="form-group">
                <label for="address" class="control-label">CONFIRM PASSWORD</label>
                <input type="password" class="form-control" id="ConfirmPassword" name="PASSWORD" placeholder="" required>
              </div>
                </div>

                <div class="col-sm-12">
				    	<div class="form-group">
                <span id="msg"></span>  
              </div>
                </div>

              <!-- <div class="col-10">
                <div class="icheck-primary">
                  <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                  <label for="agreeTerms">
                  I agree to the <a href="#" data-toggle="modal" data-target="#exampleModal">terms</a>
                  </label>
                </div>
              </div> -->
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="register" id="submit" class="btn btn-primary btn-block block_btn"> <i class="fa fa-arrow-right"></i> REGISTER</button>
          </div>
          <!-- /.col -->
        </div>
            </form>
          </div><!-- End Contact Form -->   
            
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Page Title -->
  </main>
  <?php include "footer.php";?>