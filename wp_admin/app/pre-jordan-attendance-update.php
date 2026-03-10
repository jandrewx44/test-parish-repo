<?php @include "includes/header.php";
 $JORID=intval($_GET['JORID']);
if(isset($JORID)){
    $sql = "SELECT * FROM tbl_pre_jordan WHERE JORID = '".$JORID."'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$smtrow = $query->fetch_assoc();
		$JORDI   	=mysqli_real_escape_string($conn,($smtrow['JORID']));
		$CERTIFICATE_TO   	=mysqli_real_escape_string($conn,($smtrow['CERTIFICATE_TO']));
        $CERTIFICATE_ON   	=mysqli_real_escape_string($conn,($smtrow['CERTIFICATE_ON']));
        $CERTIFICATE_AT   	=mysqli_real_escape_string($conn,($smtrow['CERTIFICATE_AT']));
		$GIVEN_THIS   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_THIS']));
		$DAY_OF   	=mysqli_real_escape_string($conn,($smtrow['DAY_OF']));
        $YEAR   	=mysqli_real_escape_string($conn,($smtrow['YEAR']));
		$DATE_UPDATED   	=mysqli_real_escape_string($conn,($smtrow['DATE_UPDATED']));
	}else{
		$CERTIFICATE_TO   	="";
        $CERTIFICATE_ON 	="";
        $CERTIFICATE_AT   	="";
        $DATE_UPDATED   	="";
		$GIVEN_THIS			="";
		$DAY_OF			="";
		$YEAR			="";
	}
}
?>
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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4>Edit Pre-Jordan Attendance <a href="pre-jordan-attendance-record.php" class="btn bg-maroon btn-xs"><i class="fa fa-sharp fa-solid fa-left"></i> Back</a></h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pre-Jordan Attendance</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
		  
		  <?php
				if(isset($_SESSION['error'])){
				  echo "
					<div id='alert' class='alert alert-danger' id='alert'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <h4><i class='icon fa fa-warning'></i> ERROR!</h4>
					  ".$_SESSION['error']."
					</div>
				  ";
				  unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
				  echo "
					<div id='alert' class='alert alert-success' id='alert'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <h4><i class='icon fa fa-check'></i> SUCCESS!</h4>
					  ".$_SESSION['success']."
					</div>
				  ";
				  unset($_SESSION['success']);
				}
			  ?>
		  
			  <div class="card card-default">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100 text-uppercase" data-toggle="collapse" href="#collapseOne">
                          <i class="fa fa-edit"></i> Edit Attendance
                        </a>
                      </h4>
                    </div>
                      <div class="card-body">
					  <form class="form-horizontal" method="POST" action="pre-jordan-attendance-update-save.php?return=<?=basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
						<div class="row">
						<input type="hidden" name="JORID" value="<?=$JORDI;?>" required> 
						 
						<div class="col-sm-12">
					<span>Certificate of attendance to </span>
					<div class="input-group mb-3">
					<div class="input-group-prepend">
					<button type="button" class="form-control btn bg-gradient-maroon btn-sm" data-toggle="modal" data-target=".select_jordan">
							<i class="fa fa-plus fa-fade"></i> PICK NAME
						</button>
					</div>
					<input type="text" class="form-control text-capitalize PICK_JORDAN" name="CERTIFICATE_TO" value="<?=$CERTIFICATE_TO;?>" required>	
					</div>
					</div>

					<div class="col-sm-12">
          		  		<div class="form-group">
							<span>Conducted by the Family Life Apostolate Of the Parish of St.Philip Benizi Parish</span>
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>On </span>
                    		<input type="date" class="form-control" name="CERTIFICATE_ON" value="<?=$CERTIFICATE_ON;?>" required>
                  		</div>
                	</div>
					
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>At </span>
                    		<input type="text" class="form-control text-capitalize" name="CERTIFICATE_AT" value="<?=$CERTIFICATE_AT;?>">
                  		</div>
                	</div>
				
					<div class="col-sm-4">
          		  		<div class="form-group">
							 <span>Given this </span>
							<input type="text" class="form-control text-capitalize" name="GIVEN_THIS" value="<?=$GIVEN_THIS;?>">
                  		</div>
                	</div>
					<div class="col-sm-4">
          		  		<div class="form-group">
							<span>day of</span>
							<input type="text" class="form-control text-capitalize" name="DAY_OF" value="<?=$DAY_OF;?>">
                  		</div>
                	</div>
					<div class="col-sm-4">
          		  		<div class="form-group">
							<span>Year</span>
							<input type="text" class="form-control text-capitalize" name="YEAR" value="<?= $YEAR;;?>">
                  		</div>
                	</div>
	
					
						</div>
                      </div>
					  <div class="card-footer">
					  <button type="submit" name="submit" class="btn bg-gradient-maroon btn-sm">SUBMIT</button>
					</div>
					</form>
                  </div>
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
  <?php 
 include "includes/footer.php"; 
 include "includes/certification_modal.php";
 require_once ('myscripts.php');
?>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
</script>
</body>
</html>

