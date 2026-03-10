<?php @include "includes/header.php";
 $PRE_ID=intval($_GET['PRE_ID']);
if(isset($PRE_ID)){
    $sql = "SELECT * FROM tbl_pre_cana WHERE PRE_ID = '".$PRE_ID."'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$smtrow = $query->fetch_assoc();

		$GROOM   	=mysqli_real_escape_string($conn,($smtrow['GROOM']));
        $G_RESIDENCE   	=mysqli_real_escape_string($conn,($smtrow['G_RESIDENCE']));
        $G_AGE   	=mysqli_real_escape_string($conn,($smtrow['G_AGE']));
        $BRIDE   	=mysqli_real_escape_string($conn,($smtrow['BRIDE']));
        $B_RESIDENCE   	=mysqli_real_escape_string($conn,($smtrow['B_RESIDENCE']));
        $B_AGE   	=mysqli_real_escape_string($conn,($smtrow['B_AGE']));
        $ON_MARRIED   	=mysqli_real_escape_string($conn,($smtrow['ON_MARRIED']));
        $AT_MARRIED  =mysqli_real_escape_string($conn,($smtrow['AT_MARRIED']));
        $ON_PARISH  =mysqli_real_escape_string($conn,($smtrow['ON_PARISH']));
        $AT_PARISH  =mysqli_real_escape_string($conn,($smtrow['AT_PARISH']));
		$THIS = mysqli_real_escape_string($conn,($smtrow['THIS']));
		$OF = mysqli_real_escape_string($conn,($smtrow['OF']));
		$YEAR = mysqli_real_escape_string($conn,($smtrow['YEAR']));
	}else{
		$GROOM   	="";
        $G_RESIDENCE ="";
        $G_AGE   	="";
        $BRIDE   	="";
        $B_RESIDENCE ="";
        $B_AGE   	="";
        $ON_MARRIED  ="";
        $AT_MARRIED  ="";
        $ON_PARISH  ="";
        $AT_PARISH  ="";
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
            <h4>Edit Pre-cana Attendance <a href="pre-cana-attendance-record.php" class="btn bg-maroon btn-xs"><i class="fa fa-sharp fa-solid fa-left"></i> Back</a></h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pre-cana Attendance</li>
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
					  <form class="form-horizontal" method="POST" action="pre-cana-attendance-update-save.php?return=<?=basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
						<div class="row">
						<input type="hidden" name="PRE_ID" value="<?=$PRE_ID;?>" required> 
						 
						<!-- <div class="col-sm-5">
          		  		<div class="form-group">
							<span>Name of Groom </span>
                    		<input type="text" class="form-control text-capitalize GROOM" name="GROOM" value="<?=$GROOM;?>" required>
                  		</div>
                	</div>
					<div class="col-sm-1">
          		  		<div class="form-group">
							<span class="text-white">HE</span>
                    		<button type="button" class="form-control btn bg-gradient-maroon btn-sm" data-toggle="modal" data-target=".find_groom">
								<i class="fa fa-plus fa-fade"></i> GROOM
							</button>
                  		</div>
                	</div>
					<div class="col-sm-5">
          		  		<div class="form-group">
							<span>Name of Bride </span>
                    		<input type="text" class="form-control text-capitalize BRIDE" name="BRIDE" value="<?=$BRIDE;?>" required>
                  		</div>
                	</div>
					<div class="col-sm-1">
          		  		<div class="form-group">
							<span class="text-white">SHE</span>
                    		<button type="button" class="form-control btn bg-gradient-maroon btn-sm" data-toggle="modal" data-target=".find_bride">
								<i class="fa fa-plus fa-fade"></i> BRIDE
							</button>
                  		</div>
                	</div> -->
					<div class="col-sm-6">
					<span>Name of Groom</span>
					<div class="input-group mb-3">
					<div class="input-group-prepend">
					<button type="button" class="form-control btn bg-gradient-maroon btn-sm" data-toggle="modal" data-target=".find_groom">
							<i class="fa fa-plus fa-fade"></i> GROOM
						</button>
					</div>
					<input type="text" class="form-control text-capitalize GROOM" name="GROOM" value="<?=$GROOM;?>" required>
					</div>
					</div>

					<div class="col-sm-6">
					<span>Name of Bride </span>
					<div class="input-group mb-3">
					<div class="input-group-prepend">
					<button type="button" class="form-control btn bg-gradient-maroon btn-sm" data-toggle="modal" data-target=".find_bride">
							<i class="fa fa-plus fa-fade"></i> BRIDE
						</button>
					</div>
					<input type="text" class="form-control text-capitalize BRIDE" name="BRIDE" value="<?=$BRIDE;?>" required>
					</div>
					</div>
					
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Groom Residence </span>
                    		<input type="text" class="form-control text-capitalize GROOM_ADDRESS" name="G_RESIDENCE" value="<?=$G_RESIDENCE;?>">
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Bride Residence </span>
                    		<input type="text" class="form-control text-capitalize BRIDE_ADDRESS" name="B_RESIDENCE" value="<?=$B_RESIDENCE;?>">
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Groom Age </span>
							 <select class="form-control" name="G_AGE" required>
				            	<option value="<?=$G_AGE;?>"><?=$G_AGE;?></option>
								  <?php 
								  for($value = 1; $value <= 100; $value++){ 
									echo('<option value="' . $value . '">' . $value . '</option>');
								  }
								  ?>
							</select>
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Bride Age </span>

							<select class="form-control" name="B_AGE" required>
				            	<option vvalue="<?=$B_AGE;?>"><?=$B_AGE;?></option>
								  <?php 
								  for($value = 1; $value <= 100; $value++){ 
									echo('<option value="' . $value . '">' . $value . '</option>');
								  }
								  ?>
							</select>
                  		</div>
                	</div>
					<div class="col-sm-12">
          		  		<div class="form-group">
							<span>Who desire to get married</span>
                  		</div>
                	</div>
					<div class="col-sm-12">
          		  		<div class="form-group">
							<span>On </span>
                    		<input type="date" class="form-control" name="ON_MARRIED" value="<?=$ON_MARRIED;?>" required>
                  		</div>
                	</div>
					
					<div class="col-sm-12">
          		  		<div class="form-group">
							<span>At </span>
                    		<input type="text" class="form-control text-capitalize" name="AT_MARRIED" value="<?=$AT_MARRIED;?>">
                  		</div>
                	</div>
					
					<div class="col-sm-12">
          		  		<div class="form-group">
							<span>Have received the Pre-Cana Formation Program of the Parish</span>
                  		</div>
                	</div>
					<div class="col-sm-12">
          		  		<div class="form-group">
							<span>On</span>
                    		<input type="date" class="form-control" name="ON_PARISH" value="<?=$ON_PARISH;?>" required>
                  		</div>
                	</div>
					<div class="col-sm-12">
          		  		<div class="form-group">
							<span>At</span>
                    		<input type="text" class="form-control text-capitalize" name="AT_PARISH" value="<?=$AT_PARISH;?>">
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>In witness thereof, here unto I affixed my signature and the seal of the parish this </span>
                  		</div>
                	</div>
					<div class="col-sm-2">
          		  		<div class="form-group">
							<input type="text" class="form-control text-capitalize" name="THIS" value="<?=$THIS;?>">
                  		</div>
                	</div>
					<div class="col-sm-1">
          		  		<div class="form-group">
							<span>day of</span>
                  		</div>
                	</div>
					<div class="col-sm-2">
          		  		<div class="form-group">
							<input type="text" class="form-control text-capitalize" name="OF" value="<?=$OF;?>">
                  		</div>
                	</div>
					
					<div class="col-sm-1">
          		  		<div class="form-group">
							<input type="text" class="form-control text-capitalize" name="YEAR" value="<?= $YEAR;?>">
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

