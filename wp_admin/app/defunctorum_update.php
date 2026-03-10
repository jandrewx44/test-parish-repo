<?php @include "includes/header.php";
if(isset($_GET['q'])){
  $q =base64_decode(urldecode($_GET['q']));
  $sql = "SELECT * FROM tbl_death WHERE ID = '$q'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$row = $query->fetch_assoc();
    $ID             		  =$row['ID'];
    $RECORD_NO    			  =$row['RECORD_NO'];
    $NAME_OF_DECEASED     =$row['NAME_OF_DECEASED'];
    $RESIDENCE    			  =$row['RESIDENCE'];
    $AGE 					        =$row['AGE'];
    $PARENTS_WIFE_HUSBAND	=$row['PARENTS_WIFE_HUSBAND'];
    $DATE_OF_DEATH    		=$row['DATE_OF_DEATH'];
    $PLACE_OF_BURIAL  		=$row['PLACE_OF_BURIAL'];
    $DATE_OF_BURIAL   		=$row['DATE_OF_BURIAL'];
    $SACRAMENTS      		  =$row['SACRAMENTS'];
    $PRIEST    				    =$row['PRIEST'];	
    $SERIES_NO      		  =$row['SERIES_NO'];
    $BOOK_NO      		    =$row['BOOK_NO'];
    $PAGE_NO      		    =$row['PAGE_NO'];
    $REG_NO      		      =$row['REG_NO'];
    $NOTATIONS      		      =$row['NOTATIONS'];
	}else{
	  header("location:defunctorum.php");
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
            <h1>Edit Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Death</li>
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
            <div class="card">
              <div class="card-header">
               <h3 class="card-title"> 
              <span class="fa fa-info-circle"></span> Death information
              </h3>
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
              <div class="card-body">
               
              <form class="form-horizontal" method="POST" action="defunctorum_edit.php" enctype="multipart/form-data">
          		  <div class="row">
                <input type="hidden" class="form-control" name="ID" value="<?=$ID;?>" required>
                <div class="col-sm-4">
          		  		<div class="form-group">
                  			<label for="firstname" class="control-label">SERIES/YEAR.</label>
                    		<input type="text" class="form-control" value="<?=$SERIES_NO;?>" name="SERIES_NO" placeholder="Series/Year No.">
                  		</div>
                	</div>
                <div class="col-sm-2">
          		  <div class="form-group">
                  		<label for="firstname" class="control-label">RECORD NO.</label>
                    	<input type="text" class="form-control" value="<?=$RECORD_NO;?>" name="RECORD_NO" placeholder="Record No." required>
                  	</div>
                </div>
				
                <div class="col-sm-2">
          		  	<div class="form-group">
                  		<label for="firstname" class="control-label">BOOK NO.</label>
                    	<input type="text" class="form-control" value="<?=$BOOK_NO;?>" name="BOOK_NO" placeholder="Book No.">
                  	</div>
                </div>
				
                <div class="col-sm-2">
          		  <div class="form-group">
                  		<label for="firstname" class="control-label">PAGE NO.</label>
                    	<input type="text" class="form-control" value="<?=$PAGE_NO;?>" name="PAGE_NO" placeholder="Page No.">
                  	</div>
                </div>
				
                <div class="col-sm-2">
          		  <div class="form-group">
                  		<label for="firstname" class="control-label">REGISTER NO.</label>
                    	<input type="text" class="form-control" value="<?=$REG_NO;?>" name="REG_NO" placeholder="Reg. No.">
                  	</div>
                </div>

				      <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">NAME OF DECEASED</label>
                    	<input type="text" class="form-control" name="NAME_OF_DECEASED" value="<?=$NAME_OF_DECEASED?>" placeholder="Name of Deceased" required>
                  	</div>
                </div>
				    <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">AGE </label>
                    	<select class="form-control" name="AGE" >
              <option selected><?=$AGE;?></option>
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
                  	<label for="firstname" class="control-label">NAME OF PARENTS, WIFE OR HUSBAND</label>
                    	<input type="text" class="form-control" name="PARENTS_WIFE_HUSBAND" value="<?=$PARENTS_WIFE_HUSBAND?>" placeholder="Name of Parents, Wife or Husband">
                  	</div>
                </div>
				      <div class="col-sm-12">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">RESIDENCE</label>
                    	<input type="text" class="form-control" name="RESIDENCE" value="<?=$RESIDENCE?>" placeholder="Residence">
                  	</div>
                </div>

				      <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF DEATH</label>
                    	<input type="date" class="form-control" name="DATE_OF_DEATH" value="<?=$DATE_OF_DEATH?>" placeholder="Date of Death">
                  	</div>
                </div>
				
				      <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF BURIAL</label>
                    	<input type="date" class="form-control" name="DATE_OF_BURIAL" value="<?=$DATE_OF_BURIAL?>" placeholder="Date of Burial">
                  	</div>
                </div>

			      	<div class="col-sm-12">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">PLACE OF BURIAL</label>
                    	<input type="text" class="form-control" name="PLACE_OF_BURIAL" value="<?=$PLACE_OF_BURIAL?>" placeholder="Place of Burial">
                  	</div>
                </div>

				

				      <div class="col-sm-12">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">SACRAMENTS</label>
                    	<input type="text" class="form-control" name="SACRAMENTS" value="<?=$SACRAMENTS?>" placeholder="Place of Sacraments">
                  	</div>
                </div>
                
				      <div class="col-sm-12">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">NAME OF PRIEST</label>
                    	<input type="text" class="form-control" name="PRIEST" value="<?=$PRIEST?>" placeholder="Name of Priest">
                  	</div>
                </div>
				<div class="col-sm-12">
                <div class="form-group">
                  	<label for="address" class="control-label">NOTATIONS</label>
                      <textarea rows="8" class="form-control" name="NOTATIONS" placeholder="Notations"><?=strip_tags($NOTATIONS);?></textarea>
                  	</div>
                </div>
				
                </div><!----row-->
          	</div>
          	<div class="card-footer text-muted ">
              <div class="float-right">
              <a href="defunctorum.php" class="btn btn-success btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
            	<button type="submit" class="btn bg-gradient-indigo btn-sm" name="submit"><i class="fa fa-save"></i> Submit</button>
            	
            </div>
          	</div>
            </form>
              </div>
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

 <?php @include "includes/footer.php";?>

<script>
  $(function (){
    // Summernote
    $('.summernote').summernote();
  })
</script>
</body>
</html>

