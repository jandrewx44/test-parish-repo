<?php @include "includes/header.php";?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- .navbar -->
  <?php @include "includes/navbar.php";?>
  <!-- /.navbar -->
  <?php @include "includes/sidebar.php";?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-6">
            <h1 class="m-0">SMS</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-12">
            <div class="btn-group btn-group-sm" role="group" aria-label="Manage filters">
              <a href="holiday.php?home=manage_holiday" class="btn btn-outline-light text-dark bg-white">Holiday</a>
              <a href="schedule.php?home=manage_slots" class="btn btn-outline-light text-dark bg-white">Schedule</a>
              <a href="sms.php?home=sms" class="btn btn-primary text-white">SMS</a>
              <a href="requirements.php?home=requirements" class="btn btn-outline-light text-dark bg-white">Requirements</a>
              <a href="services.php?home=services" class="btn btn-outline-light text-dark bg-white">Services</a>
              <a href="contact_us.php?home=contactus" class="btn btn-outline-light text-dark bg-white">Inquiries</a>
              <a href="reviews.php" class="btn btn-outline-light text-dark bg-white">Reviews</a>
              <a href="priest.php?=priest" class="btn btn-outline-light text-dark bg-white">Priest</a>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
         
            <div id="alert"></div>
            <div class="card">
              <div class="card-header">
                 <h3 class="card-title">SEMAPHORE SMS <a target="_blank" href="https://semaphore.co/"><i>(https://semaphore.co/)</i></a></h3>
			      	<div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <form class="view_form"  autocomplete="off" enctype="multipart/form-data" novalidate>
              <div class="card-body">
              
                <?php
                $stmt=$conn->prepare("SELECT SMSI_ID, APIKEY, SENDERNAME, APILINK, SMS_PENDING, SMS_APPROVED, SMS_REJECTED FROM tbl_sms");
                if($stmt->execute()){
                    $api =$stmt->get_result();
                 if($api->num_rows >0){
                    $api_rows=$api->fetch_assoc();
                ?>
          		  <div class="row">
                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">API KEY</label>
                             <input type="text" class="form-control" placeholder="" name="SMSI_ID" value="<?=$api_rows['SMSI_ID'];?>" required hidden>
                            <input type="text" class="form-control" placeholder="" name="APIKEY" value="<?=$api_rows['APIKEY'];?>" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">SENDER NAME <i>(From your api information)</i></label>
                            <input type="text" class="form-control" placeholder="" name="SENDERNAME" value="<?=$api_rows['SENDERNAME'];?>" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">API LINK <i>(https://semaphore.co/api/v4/messages)</i></label>
                            <input type="text" class="form-control" placeholder="" value="<?=$api_rows['APILINK'];?>" name="APILINK" required>
                        </div>
                    </div>
                    <!-- <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">DEFAULT MESSAGE <i>(This is for pending booking)</i></label>
                            <textarea rows='4' class="form-control" placeholder="" name="SMS_PENDING" required></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">DEFAULT MESSAGE <i>(This is for approved booking)</i></label>
                            <textarea rows='4' class="form-control" placeholder="" name="SMS_APPROVED" required></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">DEFAULT MESSAGE <i>(This is for rejected booking)</i></label>
                            <textarea rows='4' class="form-control" placeholder="" name="SMS_REJECTED" required></textarea>
                        </div>
                    </div> -->
                </div>
                <?php } }  ?>  
                                 
              </div>
              <div class="modal-footer">
            	<button type="reset" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> RESET</button>
            	<button type="submit" id="btn_submit" class="btn btn-primary btn-sm">SUBMIT</button>
            	
          	</div>
              </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include "includes/footer.php";?>
 <script type="text/javascript">
 // Bootstrap 4 Validation
 $(".view_form").submit(function () {
    var form = $(this);
    if (form[0].checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }else{
            // Show loading state
            var btn = $("#btn_submit");
            var originalText = btn.html();
            btn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> UPDATING...');

            $.ajax({
                url:"sms_edit.php",
                type:"POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success:function(data){
                    try {
                      if (typeof data === 'string') data = JSON.parse(data);
                      if (data.status === 'success') {
                        Swal.fire({
                          title: "SUCCESS!",
                          text: data.message,
                          icon: "success",
                          showConfirmButton: false,
                          timer: 1200
                        });
                      } else {
                        Swal.fire({
                          title: "ERROR!",
                          text: data.message || "Update failed",
                          icon: "error",
                          showConfirmButton: false,
                          timer: 1500
                        });
                      }
                    } catch(e) {
                      $("#alert").html(data);
                    }
                    // Reset button state
                    btn.prop('disabled', false).html(originalText);
                },
                error: function(data){
                    console.log("error");
                    console.log(data);
                    // Reset button state
                    btn.prop('disabled', false).html(originalText);
                  }
            });
			// to prevent refreshing the whole page page
			return false;
        
    }
    form.addClass("was-validated");
  });
</script>
</body>
</html>

