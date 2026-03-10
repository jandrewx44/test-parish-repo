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
            <h1>Conmmunion Information</h1>
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
          <!-----
          <div class="col-md-3">
            <!-- Profile Image 
            <div class="card card-maroon card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                <?php 
                  if($row['PROFILE']==""){
                  ?>
                    <img class="profile-user-img img-fluid img-circle" src="../images/profile.jpg" alt="User profile picture">
                  <?php }else{ ?>
                    <img src="data:image/jpg;charset=utf8;base64,<?=base64_encode($row['PROFILE']); ?>" width="60" height="60" class="profile-user-img img-fluid img-circle">
                  <?php }?>
                  <a href="#baptised" data-toggle="modal" class="editphoto" data-id="<?=$ID;?>"><span class="fa fa-camera"></span></a>
                </div>
                <h3 class="profile-username text-center"><?=$CHILD_NAME;?></h3>
                <p class="text-muted text-center">Record #: <?=$ID;?></p>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                 Registered Number<a class="float-right"><?=$RECORD_NUMBER;?></a>
                  </li>
                </ul>
              </div>
              /.card-body 
            </div>
           
          </div>---->
          <!-- /.col -->
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
                <table id="customers" class="table table-bordered table-striped table-hover">
                  <tr>
                  <th colspan="2">BOOK_NO: <?=$BOOK_NO;?> / PAGE_NO: <?=$PAGE_NO;?> / REG_NO: <?=$REG_NO;?> / SERIES_NO: <?=$SERIES_NO;?></th>
                    <th colspan="2">PARENTS</th>
                  </tr>
                  <tr>
                    <td width="180">Name</td>
                    <td width="400"><?=$CHILD_NAME;?></td>
                    <td width="150">Father Name </td>
                    <td><?=$FATHER_NAME;?></td>
                  </tr>
                  <tr>
                  <td> Date of Baptism</td>
                    <td>
                      <?php 
                        if($DATE_OF_BAPTISM==""){
                          echo "N/A";
                        }else{
                          echo date('l dS \o\f F Y',strtotime($DATE_OF_BAPTISM));
                        }
                      ?>
                    </td>
                    <td>Mother Name </td>
                    <td><?=$MOTHER_NAME;?></td>
                  </tr>

                  <tr>
                  <td> Place of Baptism</td>
                    <td><?=$PLACE_OF_BAPTISM;?></td>
                    <th colspan="2" > NOTATIONS</th>
                  </tr>
                  <tr>
                    <td> Date of Communion</td>
                    <td><?=$DATE_OF_COMMUNION;?></td>
                    <td colspan="2" rowspan="4"><?=$NOTATIONS;?></td>
                  </tr>
                  <tr>
                    <td> Place of Communion</td>
                    <td>
                      <?php 
                        if($PLACE_OF_COMMUNION==""){
                          echo "N/A";
                        }else{
                          echo date('l dS \o\f F Y',strtotime($PLACE_OF_COMMUNION));
                        }
                      ?>
                    </td>
                  </tr>

                  <tr>
                    <td> Name of Minister</td>
                    <td><?=$NAME_OF_MINISTER;?></td>
                  </tr>
                </table>
              </div><!-- /.card-body -->
              <div class="card-footer text-muted">
              <div class="float-right">
				      <a href="communion_view.php?year=<?=$_GET['year'];?>" class="btn bg-gradient-maroon btn-sm"><i class="fa-solid fa fa-arrow-left text-white"></i> BACK</a>
            </div>
          	</div>
            </div>
            <!-- /.card -->
            
          </div>
		  
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
	
  </div>
  <!-- /.content-wrapper -->
  
 <?php @include "includes/footer.php";?>
</body>
</html>

