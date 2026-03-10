<?php @include "includes/header.php";
if(isset($_GET['q'])){
  $q =base64_decode(urldecode($_GET['q']));
  $sql = "SELECT * FROM tbl_marriage WHERE ID = '$q'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$row = $query->fetch_assoc();
        $ID             =$row['ID'];
        $RECORD_NO    	=$row['RECORD_NO'];
        $LICENSE_NO     	=$row['LICENSE_NO'];
        $NAME_MALE  	=$row['NAME_MALE'];
        $NAME_FEMALE   	=$row['NAME_FEMALE'];
        $LEGAL_STATUS_MALE		=$row['LEGAL_STATUS_MALE'];
        $LEGAL_STATUS_FEMALE    	=$row['LEGAL_STATUS_FEMALE'];
        $ACTUAL_ADDRESS_MALE      =$row['ACTUAL_ADDRESS_MALE'];
        $ACTUAL_ADDRESS_FEMALE      =$row['ACTUAL_ADDRESS_FEMALE'];
        $DATE_OF_BIRTH_MALE   =$row['DATE_OF_BIRTH_MALE'];
        $DATE_OF_BIRTH_FEMALE    =$row['DATE_OF_BIRTH_FEMALE'];
        $POB_MALE   			 =$row['POB_MALE'];
        $POB_FEMALE    =$row['POB_FEMALE'];
        $DATE_BAPTISM_MALE    =$row['DATE_BAPTISM_MALE'];
        $DATE_BAPTISM_FEMALE    	=$row['DATE_BAPTISM_FEMALE'];
        $PLACE_BAPTISM_MALE      =$row['PLACE_BAPTISM_MALE'];
        $PLACE_BAPTISM_FEMALE      =$row['PLACE_BAPTISM_FEMALE'];
        $PARENTS_MALE   =$row['PARENTS_MALE'];
        $PARENTS_FEMALE    =$row['PARENTS_FEMALE'];
        $SPONSORS_MALE   			 =$row['SPONSORS_MALE'];
        $SPONSORS_FEMALE    =$row['SPONSORS_FEMALE'];
        $MARRIAGE_MINISTER    =$row['MARRIAGE_MINISTER'];
        $DATE_OF_MARRIAGE    =$row['DATE_OF_MARRIAGE'];
        $BOOK_NO    		    =$row['BOOK_NO'];
        $PAGE_NO    		    =$row['PAGE_NO'];
        $REG_NO    			    =$row['REG_NO'];
        $SERIES_NO    		  =$row['SERIES_NO'];
        $NOTATIONS    		  =$row['NOTATIONS'];

	}else{
	  header("location:marriage.php");
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
            <h1>Edit Marriage Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Marriage Information</li>
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
              <span class="fa fa-info-circle"></span> Update information
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
               
              <form class="form-horizontal" method="POST" action="marriage_edit.php?year=<?=$_GET['year'];?>" enctype="multipart/form-data">
          		  <div class="row">
                <input type="hidden" class="form-control" name="ID" value="<?=$ID;?>" required> 
                <div class="col-sm-2">  	
                <div class="form-group">
                  	<label for="firstname" class="control-label">SERIES/YEAR NO.</label>
                    	<input type="text" class="form-control" value="<?=$SERIES_NO;?>" name="SERIES_NO" placeholder="Series/Year No.">
                  	</div>
                </div>
                <div class="col-sm-2">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">RECORD NO.</label>
                    <input type="text" class="form-control" name="RECORD_NO" value="<?=$RECORD_NO;?>" required>
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

			      	<div class="col-sm-2">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">LICENSE NO.</label>
                    	<input type="text" class="form-control" value="<?=$LICENSE_NO;?>" name="LICENSE_NO">
                  	</div>
                </div>
                <div class="col-sm-12">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">CONTRACTING PARTIES </label>
                  	</div>
                </div>

                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">NAME OF GROOM</label>
                    	<input type="text"  class="form-control" value="<?=$NAME_MALE;?>" name="NAME_MALE">  
                  	</div>
                </div>
                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">NAME OF BRIDE</label>
                    	<input type="text" class="form-control"  value="<?=$NAME_FEMALE;?>" name="NAME_FEMALE">
                  	</div>
                </div>
                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">LEGAL STATUS</label>
                    	<input type="text" class="form-control" value="<?=$LEGAL_STATUS_MALE;?>" name="LEGAL_STATUS_MALE">
                  	</div>
                </div>
                <div class="col-sm-6">
          		  <div class="form-group">

                  	<label for="firstname" class="control-label">LEGAL STATUS</label>
                    	<input type="text" class="form-control"  value="<?=$LEGAL_STATUS_FEMALE;?>" name="LEGAL_STATUS_FEMALE">
                  	</div>
                </div>
				<div class="col-sm-6">
                <div class="form-group">
                  	<label for="lastname" class="control-label">ACTUAL ADDRESS</label>
					  <input type="text" class="form-control" value="<?=$ACTUAL_ADDRESS_MALE;?>" name="ACTUAL_ADDRESS_MALE">
                  	</div>
                </div>
                <div class="col-sm-6">
                <div class="form-group">
                  	<label for="address" class="control-label">ACTUAL ADDRESS</label>
                      <input type="text" class="form-control " value="<?=$ACTUAL_ADDRESS_FEMALE;?>" name="ACTUAL_ADDRESS_FEMALE">
                  	</div>
                </div>

                <div class="col-sm-6">
                <div class="form-group">
                  	<label for="address" class="control-label">DATE OF BIRTH</label>
                      <input type="date" class="form-control " value="<?=$DATE_OF_BIRTH_MALE;?>" name="DATE_OF_BIRTH_MALE">
                  	</div>
                </div>
				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF BIRTH</label>
                    	<input type="date"  class="form-control" value="<?=$DATE_OF_BIRTH_FEMALE;?>" name="DATE_OF_BIRTH_FEMALE">
                      
                  	</div>
                </div>

				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">PLACE OF BIRTH</label>
                    	<input type="text" class="form-control " value="<?=$POB_MALE;?>" name="POB_MALE">
                  	</div>
                </div>	
				
				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">PLACE OF BIRTH</label>
                    	<input type="text" class="form-control " value="<?=$POB_FEMALE;?>" name="POB_FEMALE">
                  	</div>
                </div>		

                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF BAPTISM</label>
                    	<input type="date" class="form-control" value="<?=$DATE_BAPTISM_MALE;?>" name="DATE_BAPTISM_MALE">
                  	</div>
                </div>	
				
				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF BAPTISM</label>
                    	<input type="date" class="form-control" value="<?=$DATE_BAPTISM_FEMALE;?>" name="DATE_BAPTISM_FEMALE">
                  	</div>
                </div>		


				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">PLACE OF BAPTISM</label>
                    	<input type="text" class="form-control" value="<?=$PLACE_BAPTISM_MALE;?>" name="PLACE_BAPTISM_MALE">
                  	</div>
                </div>	
				
				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">PLACE OF BAPTISM</label>
                    	<input type="text" class="form-control" value="<?=$PLACE_BAPTISM_FEMALE;?>" name="PLACE_BAPTISM_FEMALE">
                  	</div>
                </div>	
			    
				<div class="col-sm-6">
                <div class="form-group">
                  	<label for="address" class="control-label">PARENTS</label>
                      <textarea rows="8" class="form-control" name="PARENTS_MALE"><?=strip_tags($PARENTS_MALE);?></textarea>
                  	</div>
                </div>
				
				<div class="col-sm-6">
                <div class="form-group">
                  	<label for="address" class="control-label">PARENTS</label>
                      <textarea rows="8" class="form-control" name="PARENTS_FEMALE"><?=strip_tags($PARENTS_FEMALE);?></textarea>
                  	</div>
                </div>

				<div class="col-sm-6">
                <div class="form-group">
                  	<label for="address" class="control-label">SPONSORS</label>
                      <textarea rows="8" class="form-control" name="SPONSORS_MALE"><?=strip_tags($SPONSORS_MALE);?></textarea>
                  	</div>
                </div>

				<div class="col-sm-6">
                <div class="form-group">
                  	<label for="address" class="control-label">SPONSORS</label>
                      <textarea rows="8" class="form-control" name="SPONSORS_FEMALE"><?=strip_tags($SPONSORS_FEMALE);?></textarea>
                  	</div>
                </div>

				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">NAME OF MINISTER</label>
                    	<input type="text" class="form-control" value="<?=$MARRIAGE_MINISTER;?>" name="MARRIAGE_MINISTER">
                  	</div>
                </div>	
			    <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF MARRIAGE</label>
                    	<input type="date" class="form-control" value="<?=$DATE_OF_MARRIAGE;?>" name="DATE_OF_MARRIAGE">
                  	</div>
                </div>	
				
				<div class="col-sm-12">
                <div class="form-group">
                  	<label for="address" class="control-label">NOTATIONS</label>
                      <textarea rows="8" class="form-control" name="NOTATIONS"><?=strip_tags($NOTATIONS);?></textarea>
                  	</div>
                </div>
				
                </div><!----row-->
          	</div>
          	<div class="card-footer text-muted ">
              <div class="float-right">
              <a href="marriage_view.php?year=<?=$_GET['year'];?>" class="btn bg-gradient-maroon btn-sm"><i class="fa fa-arrow-left"></i> BACK</a>
            	<button type="submit" class="btn bg-gradient-maroon btn-sm" name="submit"><i class="fa fa-save"></i> SUBMIT</button>
            	
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

