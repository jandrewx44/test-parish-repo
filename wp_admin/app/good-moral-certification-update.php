<?php @include "includes/header.php";
 $GOODID=intval($_GET['GOODID']);
if(isset($GOODID)){
    $sql = "SELECT * FROM tbl_good_moral WHERE GOODID = '".$GOODID."'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$smtrow = $query->fetch_assoc();
		$GOODID   		=mysqli_real_escape_string($conn,($smtrow['GOODID']));
		$CHILDNAME  	=mysqli_real_escape_string($conn,($smtrow['CHILDNAME']));
		$FATHER   		=mysqli_real_escape_string($conn,($smtrow['FATHER']));
		$MOTHER   		=mysqli_real_escape_string($conn,($smtrow['MOTHER']));
		$PARENTS_ADDRESS=mysqli_real_escape_string($conn,($smtrow['PARENTS_ADDRESS']));
		$FINISHED_IN   	=mysqli_real_escape_string($conn,($smtrow['FINISHED_IN']));
		$MONTH   		=mysqli_real_escape_string($conn,($smtrow['MONTH']));
		$YEAR   		=mysqli_real_escape_string($conn,($smtrow['YEAR']));
		$DEGREE_OF   	=mysqli_real_escape_string($conn,($smtrow['DEGREE_OF']));
		$REQUEST_FOR   	=mysqli_real_escape_string($conn,($smtrow['REQUEST_FOR']));
		$GIVEN_DAY   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_DAY']));
		$GIVEN_MONTH   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_MONTH']));
		$GIVEN_YEAR   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_YEAR']));

	}else{
		$GOODID   		="";
		$CHILDNAME  	="";
		$FATHER   		="";
		$MOTHER   		="";
		$PARENTS_ADDRESS="";
		$FINISHED_IN   	="";
		$MONTH   		="";
		$YEAR   		="";
		$DEGREE_OF   	="";
		$REQUEST_FOR   	="";
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
            <h4>Edit Good Moral Certificate <a href="good-moral-certification-record.php" class="btn bg-maroon btn-xs"><i class="fa fa-sharp fa-solid fa-left"></i> Back</a></h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Good Moral</li>
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
					<form class="form-horizontal" method="POST" action="good-moral-certification-update-save.php?return=<?=basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                      <div class="card-body">
						<div class="row">
						<input type="hidden" name="GOODID" value="<?=$GOODID;?>" required> 
						 
						<div class="col-sm-12">
          		  		<div class="form-group">
							<span>Name</span>
							<input type="text" class="form-control text-capitalize" name="CHILDNAME" value="<?=$CHILDNAME;?>" required>	
                  		</div>
                	</div>
					<div class="col-sm-3">
          		  		<div class="form-group">
							<span>Name of Father</span>
							<input type="text" class="form-control text-capitalize" name="FATHER" value="<?=$FATHER;?>">	
                  		</div>
                	</div>
					<div class="col-sm-3">
          		  		<div class="form-group">
							<span>Name of Mother</span>
							<input type="text" class="form-control text-capitalize" name="MOTHER" value="<?=$MOTHER;?>">	
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Address of Parents</span>
							<input type="text" class="form-control text-capitalize" name="PARENTS_ADDRESS" value="<?=$PARENTS_ADDRESS;?>">	
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>He/She finished his/her in</span>
							<input type="text" class="form-control text-capitalize" name="FINISHED_IN" value="<?=$FINISHED_IN;?>">	
                  		</div>
                	</div>

					<div class="col-sm-3">
          		  		<div class="form-group">
							<span>On</span>
							<input type="Text" class="form-control text-capitalize" name="MONTH" value="<?=$MONTH;?>">	
                  		</div>
                	</div>

					<div class="col-sm-3">
          		  		<div class="form-group">
							<span>Year</span>
							<input type="text" class="form-control text-capitalize" name="YEAR" value="<?=$YEAR;?>">	
                  		</div>
                	</div>

					<div class="col-sm-12">
          		  		<div class="form-group">
							<span>Degree of</span>
							<input type="text" class="form-control text-capitalize" name="DEGREE_OF" value="<?=$DEGREE_OF;?>">	
                  		</div>
                	</div>

					<div class="col-sm-12">
          		  		<div class="form-group">
							<span>This certification is issued upon his/her request for </span>
							<input type="text" class="form-control text-capitalize" name="REQUEST_FOR" value="<?=$REQUEST_FOR;?>">	
                  		</div>
                	</div>

					<div class="col-sm-4">
          		  		<div class="form-group">
							 <span>Given this </span>
							<input type="text" class="form-control text-capitalize" name="GIVEN_DAY" value="<?=$GIVEN_DAY;?>">
                  		</div>
                	</div>
					<div class="col-sm-4">
          		  		<div class="form-group">
							<span>day of</span>
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

