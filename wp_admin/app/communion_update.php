<?php @include "includes/header.php";
if(isset($_GET['q'])){
  $q =base64_decode(urldecode($_GET['q']));
  $sql = "SELECT * FROM tbl_communion WHERE ID = '$q'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$row = $query->fetch_assoc();
        $ID                 =$row['ID'];
        $RECORD_NO    	    =$row['RECORD_NO'];
		    $CHILD_NAME     	  =$row['CHILD_NAME'];
		    $DATE_OF_BAPTISM    =$row['DATE_OF_BAPTISM'];
		    $PLACE_OF_BAPTISM   =$row['PLACE_OF_BAPTISM'];
		    $FATHER_NAME		    =$row['FATHER_NAME'];
        $MOTHER_NAME    	  =$row['MOTHER_NAME'];
        $DATE_OF_COMMUNION  =$row['DATE_OF_COMMUNION'];
        $PLACE_OF_COMMUNION =$row['PLACE_OF_COMMUNION'];
        $NAME_OF_MINISTER   =$row['NAME_OF_MINISTER'];
        $NOTATIONS      		=$row['NOTATIONS'];
        $SERIES_NO      		=$row['SERIES_NO'];
        $BOOK_NO      		  =$row['BOOK_NO'];
        $PAGE_NO      		  =$row['PAGE_NO'];
        $REG_NO      		    =$row['REG_NO'];
	}else{
	  header("location:communion.php");
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
              <li class="breadcrumb-item active">Communion Information</li>
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
              <span class="fa fa-info-circle"></span> Communion information
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
               
              <form class="form-horizontal" method="POST" action="communion_edit.php?year=<?=$_GET['year'];?>" enctype="multipart/form-data">
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
                  	<label for="firstname" class="control-label">CHILD NAME</label>
                    	<input type="text" class="form-control" name="CHILD_NAME" value="<?=$CHILD_NAME;?>" placeholder="Child Name">
                  	</div>
                </div>
                

                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF BAPTISM</label>
                    	<input type="date"  class="form-control "  name="DATE_OF_BAPTISM" value="<?=$DATE_OF_BAPTISM;?>" placeholder="Date of Baptism">
                      
                  	</div>
                </div>
                <div class="col-sm-12">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">PLACE OF BAPTISM</label>
                    	<input type="text" class="form-control"  name="PLACE_OF_BAPTISM" value="<?=$PLACE_OF_BAPTISM;?>" placeholder="Place of Baptism">
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
                  	<label for="lastname" class="control-label">DATE OF COMMUNION</label>
					  <input type="date" class="form-control" name="DATE_OF_COMMUNION" value="<?=$DATE_OF_COMMUNION;?>" placeholder="Date of Communion">
                  	</div>
                </div>
				<div class="col-sm-12">
                <div class="form-group">
                  	<label for="lastname" class="control-label">PLACE OF COMMUNION</label>
					  <input type="text" class="form-control" name="PLACE_OF_COMMUNION" value="<?=$PLACE_OF_COMMUNION;?>" placeholder="Place of Communion">
                  	</div>
                </div>

                <div class="col-sm-12">
                <div class="form-group">
                  	<label for="address" class="control-label">NAME OF MINISTER</label>
                      <input type="text" class="form-control " name="NAME_OF_MINISTER" value="<?=$NAME_OF_MINISTER;?>" placeholder="Priest Name">
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
              <a href="communion_view.php?year=<?=$_GET['year'];?>" class="btn bg-gradient-maroon btn-sm"><i class="fa fa-arrow-left"></i> BACK</a>
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

