<?php @include "includes/header.php";
 $CONFID=intval($_GET['CONFID']);
if(isset($CONFID)){
    $sql = "SELECT * FROM tbl_confirmation_certificate WHERE CONFID = '".$CONFID."'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$smtrow = $query->fetch_assoc();
		$CONFID   	=mysqli_real_escape_string($conn,($smtrow['CONFID']));
		$CHILDNAME   		=mysqli_real_escape_string($conn,($smtrow['CHILDNAME']));
        $DOB_BAPTISM   	=mysqli_real_escape_string($conn,($smtrow['DOB_BAPTISM']));
        $PLACE_OF_BAPTISM   	=mysqli_real_escape_string($conn,($smtrow['PLACE_OF_BAPTISM']));
		$FATHER   	=mysqli_real_escape_string($conn,($smtrow['FATHER']));
		$MOTHER   	=mysqli_real_escape_string($conn,($smtrow['MOTHER']));
		$PARENTS_ADDRESS   	=mysqli_real_escape_string($conn,($smtrow['PARENTS_ADDRESS']));
		$CHURCH_NAME   	=mysqli_real_escape_string($conn,($smtrow['CHURCH_NAME']));
		$CHURCH_ADDRESS   	=mysqli_real_escape_string($conn,($smtrow['CHURCH_ADDRESS']));
		$CONFIRMED_DATE   	=mysqli_real_escape_string($conn,($smtrow['CONFIRMED_DATE']));
		$CONFIRMED_BY   	=mysqli_real_escape_string($conn,($smtrow['CONFIRMED_BY']));
		$SPONSORS   	=mysqli_real_escape_string($conn,($smtrow['SPONSORS']));
		$NOTATIONS   	=mysqli_real_escape_string($conn,($smtrow['NOTATIONS']));
		$GIVEN_DAY   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_DAY']));
		$GIVEN_MONTH   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_MONTH']));
		$GIVEN_YEAR   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_YEAR']));
		$BOOK_NO   	=mysqli_real_escape_string($conn,($smtrow['BOOK_NO']));
		$PAGE_NO   	=mysqli_real_escape_string($conn,($smtrow['PAGE_NO']));
		$REG_NO   	=mysqli_real_escape_string($conn,($smtrow['REG_NO']));
		$DATE_UPDATED =date('Y-m-d');

	}else{
		$CONFID   	="";
		$CHILDNAME  ="";
        $DOB_BAPTISM   	="";
        $PLACE_OF_BAPTISM ="";
		$FATHER  ="";
		$MOTHER  ="";
		$PARENTS_ADDRESS  ="";
		$CHURCH_NAME   	="";
		$CHURCH_ADDRESS ="";
		$CONFIRMED_DATE  ="";
		$CONFIRMED_BY   ="";
		$SPONSORS   	="";
		$NOTATIONS   	="";
		$GIVEN_DAY   	="";
		$GIVEN_MONTH   ="";
		$GIVEN_YEAR   ="";
		$BOOK_NO   	="";
		$PAGE_NO   ="";
		$REG_NO   	="";
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
            <h4>Edit Confirmation Certificate <a href="confirmation-certification-record.php" class="btn bg-maroon btn-xs"><i class="fa fa-sharp fa-solid fa-left"></i> Back</a></h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Confirmation Certificate</li>
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
					<form class="form-horizontal" method="POST" action="confirmation-certification-update-save.php?return=<?=basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                      <div class="card-body">
						<div class="row">
						<input type="hidden" name="CONFID" value="<?=$CONFID;?>" required> 
						 
						<div class="col-sm-6">
					<span>Name of Confirmand</span>
					<div class="input-group mb-3">
					<div class="input-group-prepend">
						<button type="button" class="form-control btn bg-gradient-maroon btn-sm" data-toggle="modal" data-target=".select_name_confirm">
							<i class="fa fa-plus fa-fade"></i> PICK NAME
						</button>
					</div>
					<input type="text" class="form-control text-capitalize PICK_CONFIRM_NAME" name="CHILDNAME" value="<?=$CHILDNAME;?>" required>	
					</div>
					</div>

					<div class="col-sm-3">
          		  		<div class="form-group">
							<span>Date of Baptism</span>
							<input type="date" class="form-control PICK_CONFIRM_DOB_BAPTISM" name="DOB_BAPTISM" value="<?=$DOB_BAPTISM;?>">	
                  		</div>
                	</div>
					<div class="col-sm-3">
          		  		<div class="form-group">
							<span>Place of Baptism</span>
							<input type="text" class="form-control text-capitalize PICK_CONFIRM_PLACE_OF_BAPTISM" name="PLACE_OF_BAPTISM" value="<?=$PLACE_OF_BAPTISM;?>">	
                  		</div>
                	</div>
					<div class="col-sm-3">
          		  		<div class="form-group">
							<span>Name of Father</span>
							<input type="text" class="form-control text-capitalize PICK_CONFIRM_FATHER" name="FATHER" value="<?=$FATHER;?>">	
                  		</div>
                	</div>
					<div class="col-sm-3">
          		  		<div class="form-group">
							<span>Maiden Name of Mother</span>
							<input type="text" class="form-control text-capitalize PICK_CONFIRM_MOTHER" name="MOTHER" value="<?=$MOTHER;?>">	
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Address of Parents</span>
							<input type="text" class="form-control text-capitalize PICK_CONFIRM_PARENTS_ADDRESS" name="PARENTS_ADDRESS" value="<?=$PARENTS_ADDRESS;?>">	
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Name of Church</span>
							<input type="text" class="form-control text-capitalize" name="CHURCH_NAME" value="<?=$CHURCH_NAME;?>">	
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Address of Parish</span>
							<input type="text" class="form-control text-capitalize" name="CHURCH_ADDRESS" value="<?=$CHURCH_ADDRESS;?>">	
                  		</div>
                	</div>

					<div class="col-sm-3">
          		  		<div class="form-group">
							<span>Date of Confirmation</span>
							<input type="date" class="form-control PICK_CONFIRM_CONFIRMED_DATE" name="CONFIRMED_DATE" value="<?=$CONFIRMED_DATE;?>">	
                  		</div>
                	</div>

					<div class="col-sm-3">
          		  		<div class="form-group">
							<span>Confirmed by</span>
							<input type="text" class="form-control text-capitalize PICK_CONFIRM_CONFIRMED_BY" name="CONFIRMED_BY" value="<?=$CONFIRMED_BY;?>">	
                  		</div>
                	</div>

					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Sponsors</span>
							<input type="text" class="form-control text-capitalize PICK_CONFIRM_SPONSORS" name="SPONSORS" value="<?=$SPONSORS;?>">	
                  		</div>
                	</div>

					<div class="col-sm-12">
          		  		<div class="form-group">
							<span>Notations:</span>
							<input type="text" class="form-control text-capitalize PICK_CONFIRM_NOTATIONS" name="NOTATIONS" value="<?=$NOTATIONS;?>"> 	
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
					<div class="col-sm-4">
          		  		<div class="form-group">
							<span>Book No.</span>
							<input type="text" class="form-control text-capitalize PICK_CONFIRM_BOOK_NO" name="BOOK_NO" value="<?=$BOOK_NO;?>">
                  		</div>
                	</div>

					<div class="col-sm-4">
          		  		<div class="form-group">
							<span>Page No.</span>
							<input type="text" class="form-control text-capitalize PICK_CONFIRM_PAGE_NO" name="PAGE_NO" value="<?=$PAGE_NO;?>">
                  		</div>
                	</div>
					<div class="col-sm-4">
          		  		<div class="form-group">
							<span>Reg. No.</span>
							<input type="text" class="form-control text-capitalize PICK_CONFIRM_REG_NO" name="REG_NO" value="<?=$REG_NO;?>">
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

