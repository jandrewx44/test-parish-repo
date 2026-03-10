<?php @include "includes/header.php";
 $EDIT=intval($_GET['edit']);
if(isset($EDIT)){
    $sql = "SELECT * FROM tbl_baptismal_letter_request WHERE REQID= '".$EDIT."'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$smtrow = $query->fetch_assoc();
		$REQID   	=mysqli_real_escape_string($conn,($smtrow['REQID']));
		$MY_NAME   	=mysqli_real_escape_string($conn,($smtrow['MY_NAME']));
        $NAME_OF   	=mysqli_real_escape_string($conn,($smtrow['NAME_OF']));
        $CNAME   	=mysqli_real_escape_string($conn,($smtrow['CNAME']));
        $CFNAME   	=mysqli_real_escape_string($conn,($smtrow['CFNAME']));
        $CMNAME   	=mysqli_real_escape_string($conn,($smtrow['CMNAME']));
        $CPOB   	=mysqli_real_escape_string($conn,($smtrow['CPOB']));
        $CDOB   	=mysqli_real_escape_string($conn,($smtrow['CDOB']));
        $CSPONSORS  =mysqli_real_escape_string($conn,($smtrow['CSPONSORS']));
		
		if($CNAME=='YES'){ $CNAME_checked ='checked';}else{$CNAME_checked='';}
		if($CFNAME=='YES'){ $CFNAME_checked ='checked';}else{$CFNAME_checked='';}
		if($CMNAME=='YES'){ $CMNAME_checked ='checked';}else{$CMNAME_checked='';}
		if($CPOB=='YES'){ $CPOB_checked ='checked';}else{$CPOB_checked='';}
		if($CDOB=='YES'){ $CDOB_checked ='checked';}else{$CDOB_checked='';}
		if($CSPONSORS=='YES'){ $CSPONSORS_checked ='checked';}else{$CSPONSORS_checked='';}
		
		
	}else{
	  
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
            <h4>Edit Request Letter <a href="baptism_letter_of_request-record.php" class="btn bg-maroon btn-xs"><i class="fa fa-sharp fa-solid fa-left"></i> Back</a></h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Request Letter</li>
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
                          <i class="fa fa-edit"></i> Edit Request Letter
                        </a>
                      </h4>
                    </div>
            
                      <div class="card-body">
					  <form class="form-horizontal" method="POST" action="baptism_letter_of_request-update-save.php?return=<?=basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
						<div class="row">
                      <div class="col-sm-12">
						<div class="form-group">
							<span>
								His Excellency<br>
								<strong>MOST REV. JULITO B. CORTES, D.D.</strong><br>
								Bishop of Dipolog<br>
								Office of the Bishop, 2/F Diocesan Pastoral Center<br>
								Dipolog City, Zamboanga del Norte, Philippines<br>
							</span>
						</div>
					</div>  

					<div class="col-sm-12">
					<span>I, the undersigned </span>
					<div class="input-group mb-3">
					<div class="input-group-prepend">
					<button type="button" class="form-control btn bg-gradient-maroon btn-sm" data-toggle="modal" data-target=".REQUEST_FOR_PARTIAL">
					<i class="fa fa-plus fa-fade"></i> PICK A NAME
							</button>
					</div>
						<input type="text" class="form-control text-capitalize PICK_NAME" name="MY_NAME" value="<?=$MY_NAME;?>" required>
                    	<input type="hidden" class="form-control text-capitalize" name="REQID" value="<?=$REQID;?>" required>
					</div>
					</div>

					<!-- <div class="col-sm-11">
          		  		<div class="form-group">
							<span>I, the undersigned </span>
                    		<input type="text" class="form-control text-capitalize PICK_NAME" name="MY_NAME" value="<?=$MY_NAME;?>" required>
                    		<input type="hidden" class="form-control text-capitalize" name="REQID" value="<?=$REQID;?>" required>
                  		</div>
                	</div>
					<div class="col-sm-1">
						<div class="form-group">
							<span class="text-white">HE</span>
							<button type="button" class="form-control btn bg-gradient-maroon btn-sm" data-toggle="modal" data-target=".REQUEST_FOR_PARTIAL">
								<i class="fa fa-magnifying-glass fa-fade"></i> NAME
							</button>
						</div>
					</div> -->
					<div class="col-sm-12">
					<span>Parish Priest/ Team Moderator/ Parochial Vicar/ Team Minister/ Priest in Charge of St.Philip Benizi Parish, do hereby respectfully request Your Excellency to issue a written decree authorizing me to effect in accordance with the affidavit hereto attached the necessary changes or correction in the record of Baptism of </span>	
					<div class="input-group mb-3">
					<div class="input-group-prepend">
					<button type="button" class="form-control btn bg-gradient-maroon btn-sm" data-toggle="modal" data-target=".REQUEST_FOR_PARTIAL_">
					<i class="fa fa-plus fa-fade"></i> PICK A NAME
					</button>
					</div>
					<input type="text" class="form-control text-capitalize PICK_NAME_OF" name="NAME_OF" value="<?=$NAME_OF;?>" required>
					</div>
					</div>
					<!-- <div class="col-sm-11">
          		  		<div class="form-group">
							<span>Parish Priest/ Team Moderator/ Parochial Vicar/ Team Minister/ Priest in Charge of St.Philip Benizi Parish, do hereby respectfully request Your Excellency to issue a written decree authorizing me to effect in accordance with the affidavit hereto attached the necessary changes or correction in the record of Baptism of </span>
                    		<input type="text" class="form-control text-capitalize PICK_NAME_OF" name="NAME_OF" value="<?=$NAME_OF;?>" required>
                  		</div>
                	</div>
					<div class="col-sm-1">
						<div class="form-group">
							<span class="text-white">HE</span>
							<button type="button" class="form-control btn bg-gradient-maroon btn-sm" data-toggle="modal" data-target=".REQUEST_FOR_PARTIAL_">
								<i class="fa fa-magnifying-glass fa-fade"></i> NAME
							</button>
						</div>
					</div> -->
					
					<div class="col-sm-12">
						<div class="form-group">
							<span>The changes to be made are as follows: </span>
						</div>
					</div>
					
					<div class="col-sm-6">
                      <div class="form-group">
                          <input type="checkbox" name="CNAME" value="YES" <?=$CNAME_checked;?>> <label>Name</label><br>
                          <input type="checkbox" name="CFNAME" value="YES" <?=$CFNAME_checked;?>> <label>Father’s Name</label><br>
                          <input type="checkbox" name="CMNAME" value="YES" <?=$CMNAME_checked;?>> <label>Mother’s Name </label><br>	
                      </div>
                    </div>
					<div class="col-sm-6">
                      <div class="form-group">
                          <input type="checkbox" name="CPOB" value="YES" <?=$CPOB_checked;?>> <label>Place of Birth</label><br>
                          <input type="checkbox" name="CDOB" value="YES" <?=$CDOB_checked;?>> <label>Date of Birth</label><br>
                          <input type="checkbox" name="CSPONSORS" value="YES" <?=$CSPONSORS_checked;?>> <label>Sponsors</label><br>		
                      </div>
                    </div>
					
						<div class="col-sm-12">
						<div class="form-group">
							<span>
							Sincerely imploring your favorable response to this request, ever willing to abide Your Excellency pastoral decision and seeking for your blessing.
							</span>
						</div>
					</div>
					</div>
					
                      </div>
					  <div class="card-footer">
					  <button type="submit" name="submit" class="btn bg-gradient-primary btn-sm">SUBMIT</button>
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

