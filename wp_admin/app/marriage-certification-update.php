<?php @include "includes/header.php";
 $MARRIAGEID=intval($_GET['MARRIAGEID']);
if(isset($MARRIAGEID)){
    $sql = "SELECT * FROM tbl_marriage_certificate WHERE MARRIAGEID = '".$MARRIAGEID."'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$smtrow = $query->fetch_assoc();
		$MARRIAGEID   	=mysqli_real_escape_string($conn,($smtrow['MARRIAGEID']));
		$GROOM_NAME   		=mysqli_real_escape_string($conn,($smtrow['GROOM_NAME']));
        $GROOM_RESIDENCE   	=mysqli_real_escape_string($conn,($smtrow['GROOM_RESIDENCE']));
        $GROOM_FATHER   	=mysqli_real_escape_string($conn,($smtrow['GROOM_FATHER']));
		$GROOM_MOTHER   	=mysqli_real_escape_string($conn,($smtrow['GROOM_MOTHER']));
		$BRIDE_NAME   	=mysqli_real_escape_string($conn,($smtrow['BRIDE_NAME']));
		$BRIDE_RESIDENCE   	=mysqli_real_escape_string($conn,($smtrow['BRIDE_RESIDENCE']));
		$BRIDE_FATHER   	=mysqli_real_escape_string($conn,($smtrow['BRIDE_FATHER']));
		$BRIDE_MOTHER   	=mysqli_real_escape_string($conn,($smtrow['BRIDE_MOTHER']));
		$PLACE_OF_MARRIAGE   	=mysqli_real_escape_string($conn,($smtrow['PLACE_OF_MARRIAGE']));
		$DATE_OF_MARRIAGE   	=mysqli_real_escape_string($conn,($smtrow['DATE_OF_MARRIAGE']));
		$NAME_OF_WITNESS   	=mysqli_real_escape_string($conn,($smtrow['NAME_OF_WITNESS']));
		$SOLEMNIZING_PRIEST   	=mysqli_real_escape_string($conn,($smtrow['SOLEMNIZING_PRIEST']));
		$GIVEN_DAY   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_DAY']));
		$GIVEN_MONTH   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_MONTH']));
		$GIVEN_YEAR   	=mysqli_real_escape_string($conn,($smtrow['GIVEN_YEAR']));
		$DATE_UPDATED =date('Y-m-d');

	}else{
		$MARRIAGEID   	="";
		$GROOM_NAME   	="";
        $GROOM_RESIDENCE="";
        $GROOM_FATHER   ="";
		$GROOM_MOTHER   ="";
		$BRIDE_NAME   	="";
		$BRIDE_RESIDENCE ="";
		$BRIDE_FATHER   	="";
		$BRIDE_MOTHER   	="";
		$PLACE_OF_MARRIAGE   ="";
		$DATE_OF_MARRIAGE   ="";
		$NAME_OF_WITNESS  ="";
		$SOLEMNIZING_PRIEST ="";
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
            <h4>Edit Marriage Certificate <a href="marriage-certification-record.php" class="btn bg-maroon btn-xs"><i class="fa fa-sharp fa-solid fa-left"></i> Back</a></h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Marriage Certificate</li>
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
					<form class="form-horizontal" method="POST" action="marriage-certification-update-save.php?return=<?=basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                      <div class="card-body">
						<div class="row">
						<input type="hidden" name="MARRIAGEID" value="<?=$MARRIAGEID;?>" required> 
						 
						<div class="col-sm-6">
					<span>Name of Groom</span>
					<div class="input-group mb-3">
					<input type="text" class="form-control text-capitalize GROOM_NAME" name="GROOM_NAME" value="<?=$GROOM_NAME;?>" required>
					<div class="input-group-prepend">
					<button type="button" class="form-control btn bg-gradient-maroon btn-sm" data-toggle="modal" data-target=".find_groom_marriage">
							<i class="fa fa-plus fa-fade"></i> GROOM
						</button>
					</div>
						
					</div>
					</div>

					<div class="col-sm-6">
					<span>Name of Bride </span>
					<div class="input-group mb-3">
					<input type="text" class="form-control text-capitalize BRIDE_NAME" name="BRIDE_NAME" value="<?=$BRIDE_NAME;?>" required>
					<div class="input-group-prepend">
					<button type="button" class="form-control btn bg-gradient-maroon btn-sm" data-toggle="modal" data-target=".find_bride_marriage">
							<i class="fa fa-plus fa-fade"></i> BRIDE
						</button>
					</div>
					
					</div>
					</div>

					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Groom Residence </span>
                    		<input type="text" class="form-control text-capitalize GROOM_RESIDENCE" name="GROOM_RESIDENCE" value="<?=$GROOM_RESIDENCE;?>">
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Bride Residence </span>
                    		<input type="text" class="form-control text-capitalize BRIDE_RESIDENCE" name="BRIDE_RESIDENCE" value="<?=$BRIDE_RESIDENCE;?>">
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Groom Name of Father </span>
							<input type="text" class="form-control text-capitalize GROOM_FATHER" name="GROOM_FATHER" value="<?=$GROOM_FATHER;?>">
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Bride Name of Father  </span>
							<input type="text" class="form-control text-capitalize BRIDE_FATHER" name="BRIDE_FATHER" value="<?=$BRIDE_FATHER;?>">
                  		</div>
                	</div>

					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Groom Maiden Name of Mother </span>
							<input type="text" class="form-control text-capitalize GROOM_MOTHER" name="GROOM_MOTHER" value="<?=$GROOM_MOTHER;?>">
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Bride Maiden Name of Mother  </span>
							<input type="text" class="form-control text-capitalize BRIDE_MOTHER" name="BRIDE_MOTHER" value="<?=$BRIDE_MOTHER;?>">
                  		</div>
                	</div>

					<div class="col-sm-12">
          		  		<div class="form-group">
							<label>Were solemnly married according to the Rites of the Roman Catholic Church</label>
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Place of Marriage </span>
                    		<input type="text" class="form-control PLACE_OF_MARRIAGE" name="PLACE_OF_MARRIAGE" value="<?=$PLACE_OF_MARRIAGE;?>" required>
                  		</div>
                	</div>
					
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Date of Marriage </span>
                    		<input type="date" class="form-control DATE_OF_MARRIAGE" name="DATE_OF_MARRIAGE" value="<?=$DATE_OF_MARRIAGE;?>">
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Name of Witness(es)</span>
                    		<input type="text" class="form-control text-capitalize" name="NAME_OF_WITNESS" value="<?=$NAME_OF_WITNESS;?>">
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>Solemnizing Priest</span>
                    		<input type="text" class="form-control text-capitalize" name="SOLEMNIZING_PRIEST" value="<?=$SOLEMNIZING_PRIEST;?>">
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
							<input type="text" class="form-control text-capitalize" name="GIVEN_YEAR" value="<?= $GIVEN_YEAR;?>">
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

