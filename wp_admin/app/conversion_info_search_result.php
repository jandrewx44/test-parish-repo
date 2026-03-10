<?php @include "includes/header.php";
if(isset($_GET['search'])){
  $q =intval($_GET['search']);


  $sql = "SELECT * FROM tbl_conversion WHERE ID = '$q'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$row = $query->fetch_assoc();
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
    $DATE_CREATED      		    =$row['DATE_CREATED'];
    $BOOK_NO    		          =$row['BOOK_NO'];
    $PAGE_NO    		          =$row['PAGE_NO'];
    $REG_NO    			          =$row['REG_NO'];
    $SERIES_NO    		        =$row['SERIES_NO'];
	
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
                  <td> Date of Rite</td>
                    <td>
                      <?php 
                        if($DATE_OF_RITE==""){
                          echo "N/A";
                        }else{
                          echo date('l dS \o\f F Y',strtotime($DATE_OF_RITE));
                        }
                      ?>
                    </td>
                    <td>Mother Name </td>
                    <td><?=$MOTHER_NAME;?></td>
                  </tr>

                  <tr>
                  <td> Place of Reception</td>
                    <td><?=$PLACE_OF_RECEPTION;?></td>
                    <th colspan="2" > SPONSORS</th>
                  </tr>
                  <tr>
                    <td> Date of Birth</td>
                    <td><?=$DATE_OF_BIRTH;?></td>
                    <td colspan="2" rowspan="6"><?=$LIST_OF_SPONSORS;?></td>
                  </tr>
                  <tr>
                    <td> Place of Birth</td>
                    <td>
                      <?php 
                        if($PLACE_OF_BIRTH==""){
                          echo "N/A";
                        }else{
                          echo date('l dS \o\f F Y',strtotime($PLACE_OF_BIRTH));
                        }
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td> Recieving Minister</td>
                    <td><?=$MINISTER;?></td>
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
                  </tr>
                  <tr>
                    <td> Place of Baptism</td>
                    <td><?=$PLACE_OF_BAPTISM;?></td>
                  </tr>
                  <tr>
                    <td>Denomination</td>
                    <td><?=$DENOMINATION;?></td>
                  </tr>
                  <tr>
                    <td>Date Created</td>
                    <td><?=$DATE_CREATED;?></td>
                    <th>NOTATIONS</th>
                    <td><?=$NOTATIONS;?></td>
                  </tr>

                </table>
              </div><!-- /.card-body -->
              <div class="card-footer text-muted">
              <div class="float-right">
				      <a href="conversion.php" class="btn bg-gradient-maroon btn-sm"><i class="fa-solid fa fa-arrow-left text-white"></i> BACK</a>
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

