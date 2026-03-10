<?php @include "includes/header.php";
if(isset($_GET['search'])){
  $q =intval($_GET['search']);


  $sql = "SELECT * FROM tbl_death WHERE ID = '$q'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$row = $query->fetch_assoc();
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
    $BOOK_NO    		          =$row['BOOK_NO'];
    $PAGE_NO    		          =$row['PAGE_NO'];
    $REG_NO    			          =$row['REG_NO'];
    $SERIES_NO    		        =$row['SERIES_NO'];
    $NOTATIONS                  =$row['NOTATIONS'];
	
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
            <h1>Death Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Information</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

     <!-- Main content -->
	 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              <h3 class="card-title"><i class="fa fa-info-circle"></i> Personal Information</h3>
              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4">
                        <label>SERIES/YEAR NO:</label>
                        <p class="text-muted"><?=$SERIES_NO;?></p>
                    </div>
                    <div class="col-sm-2">
                        <label>RECORD NO:</label>
                        <p class="text-muted"><?=$RECORD_NO;?></p>
                    </div>
                    <div class="col-sm-2">
                        <label>BOOK NO:</label>
                        <p class="text-muted"><?=$BOOK_NO;?></p>
                    </div>
                    <div class="col-sm-2">
                        <label>PAGE NO:</label>
                        <p class="text-muted"><?=$PAGE_NO;?></p>
                    </div>
                    <div class="col-sm-2">
                        <label>REG NO:</label>
                        <p class="text-muted"><?=$REG_NO;?></p>
                    </div>
                    <div class="col-sm-6">
                        <label>NAME OF DECEASED:</label>
                        <p class="text-muted"><?=ucwords(strtoupper($NAME_OF_DECEASED));?></p>
                    </div>
                    <div class="col-sm-6">
                        <label>AGE:</label>
                        <p class="text-muted"><?=$AGE;?></p>
                    </div>
                    <div class="col-sm-12">
                        <label>NAME OF PARENTS, WIFE OR HUSBAND:</label>
                        <p class="text-muted"><?=ucwords(strtoupper($PARENTS_WIFE_HUSBAND));?></p>
                    </div>
                    <div class="col-sm-12">
                        <label>RESIDENCE:</label>
                        <p class="text-muted"><?=ucwords(strtoupper($RESIDENCE));?></p>
                    </div>
                    <div class="col-sm-6">
                        <label>DATE OF DEATH:</label>
                        <p class="text-muted"><?=$DATE_OF_DEATH;?></p>
                    </div>
                    <div class="col-sm-6">
                        <label>DATE OF BURIAL:</label>
                        <p class="text-muted"><?=$DATE_OF_BURIAL;?></p>
                    </div>
                    <div class="col-sm-12">
                        <label>PLACE OF BURIAL:</label>
                        <p class="text-muted"><?=ucwords(strtoupper($PLACE_OF_BURIAL));?></p>
                    </div>
                    <div class="col-sm-12">
                        <label>SACRAMENTS:</label>
                        <p class="text-muted"><?=ucwords(strtoupper($SACRAMENTS));?></p>
                    </div>
                    <div class="col-sm-12">
                        <label>NAME OF PRIEST:</label>
                        <p class="text-muted"><?=ucwords(strtoupper($PRIEST));?></p>
                    </div>
                    <div class="col-sm-12">
                        <label>NOTATIONS:</label>
                        <p class="text-muted"><?=$NOTATIONS;?></p>
                    </div>
                  </div>
              </div>
              <div class="card-footer">
                  <a href="defunctorum.php" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> BACK</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php @include "includes/footer.php";?>
</div>
</body>
</html>
