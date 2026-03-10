<?php @include "includes/header.php";
if(isset($_GET['q'])){
  $q =base64_decode(urldecode($_GET['q']));
  $year =$_GET['year'];
  $sql = "SELECT * FROM tbl_confirmation WHERE ID = '$q'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$row = $query->fetch_assoc();
        $ID                 =$row['ID'];
		    $CHILD_NAME     	  =$row['CHILD_NAME'];
        $DATE_OF_BAPTISM  	=$row['DATE_OF_BAPTISM'];
        $PLACE_OF_BAPTISM   =$row['PLACE_OF_BAPTISM'];
		    $FATHER_NAME		    =$row['FATHER_NAME'];
        $MOTHER_NAME    	  =$row['MOTHER_NAME'];
        $NAME_OF_PRIEST     =$row['NAME_OF_PRIEST'];
        $LIST_OF_SPONSORS   =$row['LIST_OF_SPONSORS'];
        $GENDER             =$row['GENDER'];
        $DATE_CONFIRMED     =$row['DATE_CONFIRMED'];
        $RESIDENT_OF        =$row['RESIDENT_OF'];
        $BOOK_NO    		    =$row['BOOK_NO'];
		    $PAGE_NO    		    =$row['PAGE_NO'];
		    $REG_NO    			    =$row['REG_NO'];
		    $SERIES_NO    		  =$row['SERIES_NO'];
		    $NOTATIONS    		  =$row['NOTATIONS'];

	}else{
	  header("location:confirmation.php");
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
              <li class="breadcrumb-item active"> Information</li>
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
               
              <form class="form-horizontal" method="POST" action="confirmation_edit.php?year=<?=$year;?>" enctype="multipart/form-data">
          		  <div class="row">
                <input type="hidden" class="form-control" value="<?=$ID;?>" name="ID" required>
                <div class="col-sm-4">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">SERIES/YEAR NO.</label>
                    	<input type="text" class="form-control" value="<?=$SERIES_NO;?>" name="SERIES_NO" placeholder="Series/Year No.">
                  	</div>
                </div>
                <div class="col-sm-2">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">RECORD NO.</label>
                    	<input type="text" class="form-control" value="<?=$CHILD_NAME;?>" name="RECORD_NUMBER" placeholder="Record No." required>
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
                    	<input type="text" class="form-control" value="<?=$CHILD_NAME;?>" name="CHILD_NAME" placeholder="Child Name" required>
                  	</div>
                </div>
                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">GENDER </label>
                      <select class="form-control select2" name="GENDER">
                        <option selected><?=$GENDER;?></option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                  	</div>
                </div>
                
                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF BAPTISM</label>
                    	<input type="date"  class="form-control "  value="<?=$DATE_OF_BAPTISM;?>" name="DATE_OF_BAPTISM" placeholder="Date of Baptism">
                      
                  	</div>
                </div>
                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">PLACE OF BAPTISM</label>
                    	<input type="text" class="form-control "  value="<?=$PLACE_OF_BAPTISM;?>" name="PLACE_OF_BAPTISM" placeholder="Place of Baptism">
                  	</div>
                </div>
                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">NAME OF FATHER</label>
                    	<input type="text" class="form-control "  value="<?=$FATHER_NAME;?>" name="FATHER_NAME" placeholder="Father Name">
                  	</div>
                </div>
                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">MAIDEN NAME OF MOTHER</label>
                    	<input type="text" class="form-control "  value="<?=$MOTHER_NAME;?>" name="MOTHER_NAME" placeholder="Mother Name">
                  	</div>
                </div>

                <div class="col-sm-6">
                <div class="form-group">
                  	<label for="address" class="control-label">NAME OF MINISTER</label>
                      <input type="text" class="form-control " value="<?=$NAME_OF_PRIEST;?>" name="NAME_OF_PRIEST" placeholder="Priest Name">
                  	</div>
                </div>

                <div class="col-sm-6">
                <div class="form-group">
                  	<label for="address" class="control-label">DATE CONFIRMED</label>
                      <input type="date" class="form-control" value="<?=$DATE_CONFIRMED;?>" name="DATE_CONFIRMED" placeholder="Date Cofirmed" >
                  	</div>
                </div>

				<div class="col-sm-12">
                <div class="form-group">
                  	<label for="address" class="control-label">RESIDENT ADDRESS</label>
                      <input type="text" class="form-control" value="<?=$RESIDENT_OF;?>" name="RESIDENT_OF" placeholder="Resident Address">
                  	</div>
                </div>		
				
				<div class="col-sm-12">
                <div class="form-group">
                  	<label for="address" class="control-label">LIST OF SPONSORS</label>
                      <textarea rows="8" class="form-control" name="LIST_OF_SPONSORS" placeholder="SPONSORS"><?=strip_tags($LIST_OF_SPONSORS);?></textarea>
                  	</div>
                </div>
				<div class="col-sm-12">
                <div class="form-group">
                  	<label for="address" class="control-label">NOTATIONS</label>
                      <textarea rows="8" class="form-control" name="NOTATIONS" placeholder="NOTATIONS"><?=strip_tags($NOTATIONS);?></textarea>
                  	</div>
                </div>
				
                </div><!----row-->
          	</div>
          	<div class="card-footer text-muted ">
              <div class="float-right">
              <a href="confirmation.php" class="btn bg-gradient-maroon btn-sm"><i class="fa fa-arrow-left"></i> BACK</a>
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
 <?php @include "includes/accounting_record_modal.php";?>
 <?php @include "includes/footer.php";?>


</body>
</html>

