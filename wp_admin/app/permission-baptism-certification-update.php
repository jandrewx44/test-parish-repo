<?php @include "includes/header.php";
 $PERID  =intval($_GET['PERID']);
if(isset($PERID)){
    $sql = "SELECT * FROM tbl_permission_baptism_certificate WHERE PERID = '".$PERID."'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$smtrow = $query->fetch_assoc();
		$PERID   		=mysqli_real_escape_string($conn,($smtrow['PERID']));
		$ENTRY_ONE   	=mysqli_real_escape_string($conn,($smtrow['ENTRY_ONE']));
        $ENTRY_TWO   	=mysqli_real_escape_string($conn,($smtrow['ENTRY_TWO']));
		$ENTRY_THREE   	=mysqli_real_escape_string($conn,($smtrow['ENTRY_THREE']));
		$ENTRY_FOUR   	=mysqli_real_escape_string($conn,($smtrow['ENTRY_FOUR']));
		$PRIEST_NAME   	=mysqli_real_escape_string($conn,($smtrow['PRIEST_NAME']));
		$PARISHIONER   	=mysqli_real_escape_string($conn,($smtrow['PARISHIONER']));
		$CHILDNAME   	=mysqli_real_escape_string($conn,($smtrow['CHILDNAME']));
		$GIVEN_DAY   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_DAY']));
		$GIVEN_MONTH   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_MONTH']));
		$GIVEN_YEAR   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_YEAR']));
		

	}else{
		$PERID   		="";
		$ENTRY_ONE   	="";
        $ENTRY_TWO   	="";
		$ENTRY_THREE   	="";
		$ENTRY_FOUR   	="";
		$PRIEST_NAME   	="";
		$PARISHIONER   	="";
		$CHILDNAME   	="";
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
            <h4>Edit Certificate <a href="permission-baptism-certification-record.php" class="btn bg-maroon btn-xs"><i class="fa fa-sharp fa-solid fa-left"></i> Back</a></h4>
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
					<form class="form-horizontal" method="POST" action="permission-baptism-certification-update-save.php?return=<?=basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                      <div class="card-body">
						<div class="row">
						<input type="hidden" name="PERID" value="<?=$PERID;?>" required> 
						 
						<div class="col-sm-3">
          		  		<div class="form-group">
							<span>1. </span>
							<input type="text" class="form-control text-capitalize" style="border-bottom:1px solid #000" name="ENTRY_ONE" value="<?=$ENTRY_ONE;?>">
                  		</div>
                	</div>
					<div class="col-sm-3">
          		  		<div class="form-group">
							<span>2. </span>
							<input type="text" class="form-control text-capitalize" style="border-bottom:1px solid #000" name="ENTRY_TWO" value="<?=$ENTRY_TWO;?>">
                  		</div>
                	</div>
					<div class="col-sm-3">
          		  		<div class="form-group">
							<span>3. </span>
							<input type="text" class="form-control text-capitalize" style="border-bottom:1px solid #000" name="ENTRY_THREE" value="<?=$ENTRY_THREE;?>">
                  		</div>
                	</div>
					<div class="col-sm-3">
          		  		<div class="form-group">
							<span>4.</span>
							<input type="text" class="form-control text-capitalize" style="border-bottom:1px solid #000" name="ENTRY_FOUR" value="<?=$ENTRY_FOUR;?>">
                  		</div>
                	</div>

					<div class="col-sm-12">
          		  		<div class="form-group">
							<span>Dear Rev. Fr. </span>
							<input type="text" class="form-control text-capitalize" name="PRIEST_NAME" value="<?=$PRIEST_NAME;?>" required>
                  		</div>
                	</div>
					<div class="col-sm-12">
          		  		<div class="form-group">
							<span>This is to respectfully grant our parishioner, </span>
							<input type="text" class="form-control text-capitalize" name="PARISHIONER" value="<?=$PARISHIONER;?>" required>
							<span>to have the baptism of his/ her child </span>
                  		</div>
                	</div>
					<div class="col-sm-12">
          		  		<div class="form-group">
							<input type="text" class="form-control text-capitalize" name="CHILDNAME" value="<?=$CHILDNAME;?>" required>
							<span>administered in your Church.</span>
                  		</div>
                	</div>

					<div class="col-sm-12">
          		  		<div class="form-group">
							<span>Please do the necessary things that need to be done so the said parishioner complies with the requirements prescribed in the Code of Canon Law and our Diocesan Statutes. </span>
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

