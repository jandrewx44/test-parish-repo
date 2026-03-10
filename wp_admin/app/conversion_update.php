<?php @include "includes/header.php";
if(isset($_GET['q'])){
  $q =base64_decode(urldecode($_GET['q']));
  $sql = "SELECT * FROM tbl_conversion WHERE ID = '$q'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$row = $query->fetch_assoc();
        $ID                       =$row['ID'];
        $RECORD_NO    	          =$row['RECORD_NO'];
        $CHILD_NAME     	        =$row['CHILD_NAME'];
        $DATE_OF_RITE             =$row['DATE_OF_RITE'];
        $PLACE_OF_RECEPTION       =$row['PLACE_OF_RECEPTION'];
        $DATE_OF_BIRTH		        =$row['DATE_OF_BIRTH'];
        $PLACE_OF_BIRTH    	      =$row['PLACE_OF_BIRTH'];
        $FATHER_NAME  	          =$row['FATHER_NAME'];
        $MOTHER_NAME   	          =$row['MOTHER_NAME'];
        $MINISTER                 =$row['MINISTER'];
        $DATE_OF_BAPTISM      		=$row['DATE_OF_BAPTISM'];
        $PLACE_OF_BAPTISM      		=$row['PLACE_OF_BAPTISM'];
        $DENOMINATION      		    =$row['DENOMINATION'];
        $NOTATIONS      		      =$row['NOTATIONS'];
        $LIST_OF_SPONSORS      		=$row['LIST_OF_SPONSORS'];
        $SERIES_NO      		      =$row['SERIES_NO'];
        $BOOK_NO      		        =$row['BOOK_NO'];
        $PAGE_NO      		        =$row['PAGE_NO'];
        $REG_NO      		          =$row['REG_NO'];
	}else{
	  header("location:conversion.php");
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
              <li class="breadcrumb-item active">Conversion</li>
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
              <span class="fa fa-info-circle"></span> Conversion information
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
               
              <form class="form-horizontal" method="POST" action="conversion_edit.php?year=<?=$_GET['year'];?>" enctype="multipart/form-data">
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

				<div class="col-sm-8">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">NAME</label>
                    	<input type="text" class="form-control" name="CHILD_NAME" value="<?=$CHILD_NAME;?>" placeholder="Name">
                  	</div>
                </div>

				<div class="col-sm-4">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF RITE</label>
                    	<input type="date" class="form-control" name="DATE_OF_RITE" value="<?=$DATE_OF_RITE;?>" placeholder="Date of Rite">
                  	</div>
                </div>

				<div class="col-sm-8">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">PLACE OF RECEPTION</label>
                    	<input type="text" class="form-control" name="PLACE_OF_RECEPTION" value="<?=$PLACE_OF_RECEPTION;?>" placeholder="Place of Reception">
                  	</div>
                </div>

				<div class="col-sm-4">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF BIRTH</label>
                    	<input type="date" class="form-control" name="DATE_OF_BIRTH" value="<?=$DATE_OF_BIRTH;?>" placeholder="Date of Birth">
                  	</div>
                </div>

				<div class="col-sm-8">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">PLACE OF BIRTH</label>
                    	<input type="text" class="form-control" name="PLACE_OF_BIRTH" value="<?=$PLACE_OF_BIRTH;?>" placeholder="Place of Birth">
                  	</div>
                </div>
                
				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">NAME OF FATHER</label>
                    	<input type="text" class="form-control" name="FATHER_NAME" value="<?=$FATHER_NAME;?>" placeholder="Father Name">
                  	</div>
                </div>
                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">MAIDEN NAME OF MOTHER</label>
                    	<input type="text" class="form-control" name="MOTHER_NAME" value="<?=$MOTHER_NAME;?>" placeholder="Mother Name">
                  	</div>
                </div>
				<div class="col-sm-12">
                <div class="form-group">
                  	<label for="address" class="control-label">RECEIVING MINISTER</label>
                      <input type="text" class="form-control " name="MINISTER" value="<?=$MINISTER;?>" placeholder="Priest Name">
                  	</div>
                </div>
                <div class="col-sm-4">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF BAPTISM</label>
                    	<input type="date"  class="form-control" name="DATE_OF_BAPTISM" value="<?=$DATE_OF_BAPTISM;?>" placeholder="Date of Baptism">
                      
                  	</div>
                </div>
                <div class="col-sm-8">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">PLACE OF BAPTISM</label>
                    	<input type="text" class="form-control" name="PLACE_OF_BAPTISM" value="<?=$PLACE_OF_BAPTISM;?>" placeholder="Place of Baptism">
                  	</div>
                </div>		
                
				<div class="col-sm-12">
                <div class="form-group">
                  	<label for="lastname" class="control-label">DENOMINATION</label>
					  <input type="text" class="form-control" name="DENOMINATION" value="<?=$DENOMINATION;?>" placeholder="Denomination">
                  	</div>
                </div>
				<div class="col-sm-12">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">SPONSORS</label>
						<textarea rows="8" class="form-control" name="LIST_OF_SPONSORS" placeholder="Sponsors"><?=strip_tags($LIST_OF_SPONSORS);?></textarea>
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
              <a href="conversion_view.php?year=<?=$_GET['year'];?>" class="btn bg-gradient-maroon btn-sm"><i class="fa fa-arrow-left"></i> BACK</a>
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

