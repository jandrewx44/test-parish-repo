<?php include "header.php";?>
<?php include "calendar_header.php";?>
<style>
  .bg-0A7B41 {
    background-color: #0A7B41 !important;
    color: #fff !important;
  }
  .bg-00856F {
    background-color: #00856F !important;
    color: #fff !important;
  }
  .bg-005885 {
    background-color: #005885 !important;
    color: #fff !important;
  }
  .bg-001685 {
    background-color: #001685 !important;
    color: #fff !important;
  }
  /* Force uppercase display for text entries in the appointment form */
  #registerform input[type="text"],
  #registerform textarea {
    text-transform: uppercase;
  }
</style>
<body>
  <div class="wrapper">
  <?php $HIDE_TOPBAR = true; require_once "header_menu.php";?>
	<div class="content container mt-1 ">
  <section class="content-header">
    <div style="display:nones;background:rgba(0,0,0,0.40);" class="preloader flex-column justify-content-center align-items-center" id="LoadingImage">
        <img class="" src="dist/img/loader-3.gif" alt="AdminLTELogo" height="60" width="60">
      </div>
    </section> 
		<div class="container-fluid"><h4 class="text-whits">Book Appointment</h4>
      <div id="success_message"></div>
		<div class="row">
      <!---time--->
        <div class="col-md-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">  Available Time </h4>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                      <i class="fas fa-times"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
						          <div id="dataddd" class="external-event bg-primary" style="display:none"></div>
                      <div class="list_time"></div>
                      <div class="select_time_now text-red"> No available time</div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer"> 
                    <a href="" class="btn btn-primary" id="next" hidden>NEXT</a>
                 </div>
              </div>
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">LEGEND</h3>
                </div>
                <div class="card-body">
				        <div class="external-event bg-00856F">Available</div>
                <div class="external-event bg-005885">No Slots</div>
                <div class="external-event bg-001685">Fully Booked</div>
					      <div class="external-event bg-0A7B41">Holidays</div>
                </div>
                <div class="card-footer"> 
                    
                 </div>
              </div>
          </div>
      <!---end time--->
			<div class="col-md-9">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Please be advised that your chosen time slot is reserved for 30 minutes.</h4>
                  <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                  </div>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                    <div id="calendar" class="table-responsive"></div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
			  
			  <!---FORM-->
  <div id="registerform" style="display:none">
		<div class="card">
		<div class="card-header">
		  <h4 class="card-title">FORM</h4>
		  <div class="card-tools">
		  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
			<i class="fas fa-minus"></i>
		  </button>
		  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
			<i class="fas fa-times"></i>
		  </button>
		  </div>
		</div>
		 <form class="needs-validation form-horizontal" autocomplete="off" enctype="multipart/form-data" novalidate onsubmit="disableButton(this)">
		<div class="card-body">
			<div class="rows">
			
				<div class="modal-body modal-bodysss text-uppercase">
                <!-- <input type='text' id='sdate' name='sdate' hidden>
                <input type="text" id="stime" name="stime" hidden>
                <input type="text" name="AUTO_NUMBER" value="<?=$number;?>" required hidden> -->
                  <div class="row">
                   <div class="col-lg-12">

                  
                    <!-- <div id="success_message"></div> -->
                   <h6 class="text-danger">REMINDER: It is required to bring the orignal copy of your uploaded ID for validation.</h6>
                   </div>
                   <div class="col-lg-4" style="display:none">
                    <div class="form-group">
                      <label for="" class="control-label font-weight-normal">APPOINTMENT NUMBER</label>
                      <input type="text" class="form-control" name="AUTO_NUMBER" value="<?=$number;?>" readonly required>
                    </div>
                    </div>
                    <div class="col-lg-4" style="display:none">
                    <div class="form-group">
                      <label for="" class="control-label font-weight-normal">APPOINTMENT DATE</label>
                      <input type="text"  class="form-control" id="sdate" name="BOOK_DATE" readonly required>
                    </div>
                    </div>
                    <div class="col-lg-4" style="display:none">
                    <div class="form-group">
                      <label for="" class="control-label font-weight-normal">SELECTED TIME</label>
                      <input type="text"  class="form-control" id="stime" name="BOOK_TIME" readonly required>
                    </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="form-group">
                      <label for="" class="control-label font-weight-normal">First Name</label>
                      <input type="text"  class="form-control" id="FIRSTNAME" name="FIRSTNAME" placeholder="" required>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-group">
                      <label for="" class="control-label font-weight-normal">Middle Name</label>
                      <input type="text"  class="form-control" id="MIDDLENAME" name="MIDDLENAME" placeholder="" required>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-group">
                      <label for="" class="control-label font-weight-normal">Last Name</label>
                      <input type="text"  class="form-control" id="LASTNAME" name="LASTNAME" placeholder="" required>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-group">
                      <label for="" class="control-label font-weight-normal">Gender</label>
                        <select style="width:100%" class="form-control" id="GENDER" name="GENDER" required>
                          <option value=""></option>
                          <option>MALE</option>
                          <option>FEMALE</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-group">
                      <label for="" class="control-label font-weight-normal">Date of Birth</label>
                        <input type="date" id="DATE_OF_BIRTH" name="DATE_OF_BIRTH" class="form-control" required>
                    </div>
                    </div>
                    <div class="col-lg-4" style="display:none">
                    <div class="form-group">
                      <label for="" class="control-label font-weight-normal">Age</label>
                      <input type="text" class="form-control" id="AGE" name="AGE" readonly required>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-group">
                      <label for="" class="control-label font-weight-normal">Mobile # </label>
                      <input type="tel" class="form-control" id="MOBILE" name="MOBILE" placeholder="" inputmode="numeric" pattern="[0-9]{11}" maxlength="11" minlength="11" title="Enter 11-digit mobile number (e.g., 09XXXXXXXXX)" required oninput="this.value=this.value.replace(/\\D/g,'').slice(0,11)">
                    </div>
                    </div>
 
                    <div class="col-lg-12">
                    <div class="form-group">
                      <label for="" class="control-label font-weight-normal">Address</label>
                      <textarea type="text" rows="4" class="form-control" id="ADDRESS" name="ADDRESS" placeholder="" required></textarea>
                    </div>
                    </div>
 
                    <div class="col-lg-12">
                    <div class="form-group">
                      <label for="" class="control-label font-weight-normal">Purpose of Appointment</label>
                      <input type="text" class="form-control" id="PURPOSE" name="PURPOSE" list="PURPOSE_LIST" placeholder="" required>
                      <datalist id="PURPOSE_LIST">
                        <option value="MARRIAGE">Marriage</option>
                        <option value="BAPTISM">Baptism</option>
                        <option value="MASS">Mass</option>
                        <option value="OTHERS">Others</option>
                      </datalist>
                    </div>
                    </div>
 

                    <div class="col-lg-12">
                    <div class="form-group">
                    <label class="font-weight-normal">List of Acceptable Valid IDs (Any of the following with one (1) photocopy)</label>
                      <select style="width:100%" class="form-control select2 text-uppercase" name="VALID_ID_NUMBER" id="VALID_ID_NUMBER" required>
                        <option value="" selected></option>

                        <?php
                           $stmt =$conn->prepare("SELECT * FROM tbl_requirements ORDER BY REQ_NAME ASC");
                           if($stmt->execute()):
                              $requirments=$stmt->get_result();
                              if($requirments->num_rows >0):
                               while($reqrow = $requirments->fetch_assoc()){
                        ?>
                          <option><?=strtoupper($reqrow['REQ_NAME']);?></option>
                        <?php }
                           endif;
                          endif;
                        ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                    <label class="font-weight-normal">Upload valid ID</label>
                    <div class="custom-file">
                    <input type="file" name="UPLOAD_ID" id="UPLOAD_ID" class="form-control custom-file-input" accept="image/*" required>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                    <label class="font-weight-normal">Upload ID with Selfie</label>
                    <div class="custom-file">
                    <input type="file" name="UPLOAD_WITH_SELFIE" id="exampleInputFile" class="form-control custom-file-input" accept="image/*" required>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                  </div>

                  <div class="col-lg-12">
                          <div class="form-group">
                            <div class="form-check">
                            <input class="form-check-input" name="TERMS_OF_SERVICE" type="checkbox" value="AGREED" id="flexCheckChecked" required>
                            <label class="form-check-label" for="flexCheckChecked">
                            By checking this box and clicking the 'Submit' button, you confirm that you accept the Livelihood Program Privacy Policy.
                            </label>
                            </div>
                        </div>
                      </div>
                
                  </div><!---/row-->
				  </div>
				
			
			</div>
		</div>
		
		  <div class="card-footer">
		  <button type="submit" id='disabled' name="submit" class="btn btn-primary">SUBMIT</button>
			<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
		  </div>
		</form>
		</div>
		</div>
			  
			  <!----END OF FORM---->
            </div>
		</div>
		</div>
    <br>
<br>
<br>
	</div>
  <!-- /.content-wrapper -->
</div><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php include "calendar_scripts.php";?>
  <script>
    // Ensure entered values are stored as uppercase for text fields in the form
    document.addEventListener('input', function (e) {
      var el = e.target;
      if (!el.closest('#registerform')) return;
      if (el.tagName === 'INPUT' && el.type === 'text') {
        el.value = el.value.toUpperCase();
      }
      if (el.tagName === 'TEXTAREA') {
        el.value = el.value.toUpperCase();
      }
    });
  </script>
 
