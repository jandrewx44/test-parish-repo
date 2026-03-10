<?php @include "includes/header.php";
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
            <h4> Generated Bapstism <a href="baptismal-changes-own-record.php" class="btn bg-maroon btn-xs"><i class="fa fa-sharp fa-solid fa-left"></i> Back</a></h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active"> Details</li>
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
		      <div class="card card-default">
             <div class="embed-responsive embed-responsive-16by9">
                  <?php if(isset($_POST['submit'])){
                      $ID = $_POST['ID'];
                  
                  ?>
                  <iframe class="embed-responsive-item" src="baptismal-nocorrection-form-pdf.php?ID=<?=$_POST['ID'];?>" allowfullscreen></iframe>
                  <?php } ?>
                </div>
          </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php @include "includes/footer.php";?>

</body>
</html>

