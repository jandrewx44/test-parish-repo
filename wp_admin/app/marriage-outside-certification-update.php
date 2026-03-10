<?php @include "includes/header.php";
 $MARRID  =intval($_GET['MARRID']);
if(isset($MARRID)){
    $sql = "SELECT * FROM tbl_marriage_outside_certificate WHERE MARRID = '".$MARRID."'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$smtrow = $query->fetch_assoc();
		$MARRID   		=mysqli_real_escape_string($conn,($smtrow['MARRID']));
		$PRIEST_NAME   	=mysqli_real_escape_string($conn,($smtrow['PRIEST_NAME']));
		$PARISHIONER   	=mysqli_real_escape_string($conn,($smtrow['PARISHIONER']));
		$CHECKBOX_ONE   =mysqli_real_escape_string($conn,($smtrow['CHECKBOX_ONE']));
		$CHECKBOX_TWO   =mysqli_real_escape_string($conn,($smtrow['CHECKBOX_TWO']));
		$GIVEN_DAY   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_DAY']));
		$GIVEN_MONTH   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_MONTH']));
		$GIVEN_YEAR   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_YEAR']));
		
		if($CHECKBOX_ONE=='YES'){
			$checkoneyes = 'checked';
		}else{
			$checkoneyes = '';
		}
		if($CHECKBOX_TWO=='YES'){
			$checktwoyes = 'checked';
		}else{
			$checktwoyes = '';
		}

	}else{
		$MARRID   		="";
		$CHECKBOX_ONE   ="";
		$CHECKBOX_TWO   ="";
		$PRIEST_NAME   	="";
		$PARISHIONER   	="";
		$GIVEN_DAY   	="";
		$GIVEN_MONTH   	="";
		$GIVEN_YEAR   	="";
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
            <h4>Edit Permision <a href="marriage-outside-certification-record.php" class="btn bg-maroon btn-xs"><i class="fa fa-sharp fa-solid fa-left"></i> Back</a></h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Certificate</li>
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
					<form class="form-horizontal" method="POST" action="marriage-outside-certification-update-save.php?return=<?=basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                      <div class="card-body">
						<div class="row">
						<input type="hidden" name="MARRID" value="<?=$MARRID;?>" required> 
						 
						<div class="col-sm-12">
          		  		<div class="form-group">
							<span>Dear Rev. Fr. </span>
							<input type="text" class="form-control text-capitalize" name="PRIEST_NAME" value="<?=$PRIEST_NAME;?>" required>
                  		</div>
                	</div>
					<div class="col-sm-12">
          		  		<div class="form-group">
							<span>I am hereby granting the request of my parishioner, </span>
							<input type="text" class="form-control text-capitalize" name="PARISHIONER" value="<?=$PARISHIONER;?>" required>
							<span>to have their marriage celebrated outside the parish. </span>
                  		</div>
                	</div>
					<div class="col-sm-12">
                      <div class="form-group">
                          <input type="checkbox" name="CHECKBOX_ONE" value="YES" <?=$checkoneyes;?>> <label>I have already conducted the interview and found no impediment</label><br>
                          <input type="checkbox" name="CHECKBOX_TWO" value="YES" <?=$checktwoyes;?>> <label>I have not yet done the interview. Please conduct the necessary investigation.</label><br>	
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

