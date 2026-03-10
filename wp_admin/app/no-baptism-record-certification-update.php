<?php @include "includes/header.php";
 $NOBAPID =intval($_GET['NOBAPID']);
if(isset($NOBAPID)){
    $sql = "SELECT * FROM tbl_no_baptism_certificate WHERE NOBAPID = '".$NOBAPID."'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$smtrow = $query->fetch_assoc();
		$NOBAPID   	=mysqli_real_escape_string($conn,($smtrow['NOBAPID']));
		$NO_BAP_NAME   		=mysqli_real_escape_string($conn,($smtrow['NO_BAP_NAME']));
        $NO_BAP_REQUEST_OF   	=mysqli_real_escape_string($conn,($smtrow['NO_BAP_REQUEST_OF']));
		$GIVEN_DAY   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_DAY']));
		$GIVEN_MONTH   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_MONTH']));
		$GIVEN_YEAR   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_YEAR']));
		$DATE_UPDATED =date('Y-m-d');

	}else{
		$NOBAPID   	="";
		$NO_BAP_NAME  ="";
        $NO_BAP_REQUEST_OF ="";
		$GIVEN_DAY   	="";
		$GIVEN_MONTH   ="";
		$GIVEN_YEAR   ="";
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
            <h4>Edit Certificate <a href="no-baptism-record-certification-record.php" class="btn bg-maroon btn-xs"><i class="fa fa-sharp fa-solid fa-left"></i> Back</a></h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Baptism Certificate</li>
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
                        <a class="d-block w-100 text-uppercase" data-toggle="collapse">
                          <i class="fa fa-edit"></i> Edit
                        </a>
                      </h4>
                    </div>
					<form class="form-horizontal" method="POST" action="no-baptism-record-certification-update-save.php?return=<?=basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                      <div class="card-body">
						<div class="row">
						<input type="hidden" name="NOBAPID" value="<?=$NOBAPID;?>" required> 
						 
						<div class="col-sm-12">
          		  		<div class="form-group">
							<span>This is to certify that</span>
							<input type="text" class="form-control text-capitalize" name="NO_BAP_NAME" value="<?=$NO_BAP_NAME;?>" required>
							<span>has no record of BAPTISM in our parish, hence we cannot issue upon a certificate of baptism as humbly requested.</span>
                  		</div>
                	</div>
					<div class="col-sm-12">
          		  		<div class="form-group">
							<span>This certification is issued upon the request of </span>
							<input type="text" class="form-control text-capitalize" name="NO_BAP_REQUEST_OF" value="<?=$NO_BAP_REQUEST_OF;?>" required>
							<span>for whatever purposes it may serve him/her best.</span>
                  		</div>
                	</div>

					<div class="col-sm-4">
          		  		<div class="form-group">
							<span>Given Day</span>
							<input type="text" class="form-control text-capitalize" name="GIVEN_DAY" value="<?=$GIVEN_DAY;?>">
                  		</div>
                	</div>
					<div class="col-sm-4">
          		  		<div class="form-group">
							<span>Month</span>
							<input type="text" class="form-control text-capitalize" name="GIVEN_MONTH" value="<?=$GIVEN_MONTH;?>">
                  		</div>
                	</div>
					
					<div class="col-sm-4">
          		  		<div class="form-group">
							<span>Year</span>
							<input type="text" class="form-control text-capitalize" name="GIVEN_YEAR" value="<?=$GIVEN_YEAR;?>">
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

