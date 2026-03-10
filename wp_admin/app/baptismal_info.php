<?php @include "includes/header.php";
 
if(isset($_GET['q'])){
  $q =base64_decode(urldecode($_GET['q']));
  $year = $_GET['year'];

  $sql = "SELECT * FROM tbl_baptismal WHERE ID = '$q'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$row = $query->fetch_assoc();
    $ID=$row['ID'];
    $RECORD_NUMBER    	=$row['RECORD_NUMBER'];
    $BOOK_NO    		=$row['BOOK_NO'];
    $PAGE_NO    		=$row['PAGE_NO'];
    $REG_NO    			=$row['REG_NO'];
    $SERIES_NO    		=$row['SERIES_NO'];
    $CHILD_NAME     	=$row['CHILD_NAME'];
    $DATE_OF_BIRTH  	=$row['DATE_OF_BIRTH'];
    $PLACE_OF_BIRTH   	=$row['PLACE_OF_BIRTH'];
    $FATHER_NAME		=$row['FATHER_NAME'];
    $MOTHER_NAME    	=$row['MOTHER_NAME'];
    $NAME_OF_PRIEST      =$row['NAME_OF_PRIEST'];
    $NAME_OF_CHURCH      =$row['NAME_OF_CHURCH'];
    $PERMANENT_ADDRESS   =$row['PERMANENT_ADDRESS'];
    $LIST_OF_SPONSORS    =$row['LIST_OF_SPONSORS'];
    $DATE_CREATED = $row['DATE_CREATED'];
    $GENDER = $row['GENDER'];
    $DATE_OF_BAPTISM = $row['DATE_OF_BAPTISM'];
    $PLACE_OF_BAPTISM = $row['PLACE_OF_BAPTISM'];
    $NOTATIONS = $row['NOTATIONS'];
	
	}else{
	  header("location:baptismal.php");
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
            <h1>Baptised Information</h1>
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
                    <td>Date of Birth</td>
                    <td><?= date('l dS \o\f F Y',strtotime($DATE_OF_BIRTH));?></td>
                    <td>Mother Name </td>
                    <td><?=$MOTHER_NAME;?></td>
                  </tr>

                  <tr>
                    <td>Place of Birth</td>
                    <td><?=$PLACE_OF_BIRTH;?></td>
                    <th colspan="2"> SPONSORS</th>
                  </tr>
                  <tr>
                    <td>Address</td>
                    <td><?=$PERMANENT_ADDRESS;?></td>
                    <td colspan="2" rowspan="6"><?=$LIST_OF_SPONSORS;?></td>
                  </tr>
                  <tr>
                    <td>Name of Church</td>
                    <td><?=$NAME_OF_CHURCH;?></td>
                  </tr>

                  <tr>
                    <td> Name of Minister</td>
                    <td><?=$NAME_OF_PRIEST;?></td>
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
                    <td> Date Recorded</td>
                    <td><?=$DATE_CREATED;?></td>
                  </tr>
				  <tr>
                    <td> Notations</td>
                    <td colspan="3"><?=$NOTATIONS;?></td>
                  </tr>
                </table>
              </div><!-- /.card-body -->
              <div class="card-footer text-muted">
              <div class="float-right">
				    <a href="baptismal_acView.php?year=<?=$year;?>" class="btn bg-maroon btn-sm"><i class="fa-solid fa fa-arrow-left"></i> BACK</a>
            <!---<a target="_blank" href="<?='baptism_print.php?q='.urlencode(base64_encode($row['ID']));?>" class="btn bg-gradient-primary btn-sm"><i class="fa-solid fa fa-print text-white"></i> Print Baptismal</a>
			--->

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
  <div class="modal fade" id="baptised">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
			<h4 class="modal-title"> <span class="fa-solid fa fa-user"></span> Change Photo</h4>
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="baptised_profile_update.php" enctype="multipart/form-data">
				<div class="row">
				<div class="col-md-12">
                <div class="form-group">
                <input type="hidden" class="form-control" value="<?=$ID;?>" name="ID">
                    <label for="photo" class="control-label">Photo:</label>
                    <input class="form-control" name="image" type="file" id="formFileBaptised" onchange="previeww()"><br>
                   <img id="frameBaptised" src="" class="img-fluid " style="border-radius:10px">
                </div>
                </div>
               
               </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn bg-primary btn-sm" name="upload"><i class="fa fa-check-square-o"></i> Submit</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
 <?php @include "includes/footer.php";?>
<script>
      function previeww() {
        frameBaptised.src = URL.createObjectURL(event.target.files[0]);
      }
      function clearImagee() {
          document.getElementById('formFileBaptised').value = null;
          frameBaptised.src = "";
      }
  </script>

</body>
</html>

