<?php include "includes/header.php";?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
	<?php include "includes/navbar.php";?>
  <!-- /.navbar -->

<!-- Main Sidebar Container -->
	<?php include "includes/sidebar.php";?>
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Users</li>
            </ol>
          </div>
        </div>
			<?php
        if(isset($_SESSION['error'])){
          echo "
            <div id='alert' class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div id='alert' class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      </div><!-- /.container-fluid -->
    </section>

     <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
		      <form role="form" id="quickForm" method="POST" action="members_save.php" autocomplete="off">
				<div class="card card-default">
				<div class="card-header">
                <h3 class="card-title">
                  <h3 class="card-title"><span class="fa fa-info-circle"></span> Enter Information</small> </h3>
                </h3>
			        <div class="card-tools">
					  <div class="btn-group" id="realtime" data-toggle="btn-toggle">
					  <a href="members.php" class="btn bg-info btn-sm"> <span class="fa fa-arrow-left"></span> Return</a>
            </div>
          </div>
        </div>
          <div class="card-body">
          <div class="row">
            <div class="col-md-5">
            <div class="form-group">
              <label for="firstname" class="control-label">FIRST NAME</label>
              <input type="text" class="form-control" name="FIRSTNAME" placeholder="First Name" required>
             </div>
          </div><!--col-md---->

          <div class="col-md-2">
            <div class="form-group">
            <label for="firstname" class="control-label">MI</label>
            <input type="text" class="form-control" name="MI" placeholder="Middle Name" required>
          </div>
          </div><!--col-md---->


        <div class="col-md-5">
	    	<div class="form-group">
        <label for="firstname" class="control-label">LAST NAME</label>
          <input type="text" class="form-control" name="LASTNAME" placeholder="Last Name" required>
        </div>
        </div><!--col-md---->

        <div class="col-md-6">
	    <div class="form-group">
      <label for="firstname" class="control-label">ROLE</label>
			<select class="form-control select2" name="ROLE" placeholder="" required>
				<option disabled selected>Select Role</option>
				<option>ADMIN</option>
				<option>USER</option>
                <option>DEMO</option>
			  </select>
        </div>
        </div><!--col-md---->
		
        <div class="col-md-12">
	    	<div class="form-group">
        <label for="firstname" class="control-label">USERNAME</label>
          <input type="text" class="form-control" name="USERNAME" placeholder="Username" required>
          
        </div>
        </div><!--col-md---->
        <div class="col-md-12">
        <div class="form-group">
        <label for="firstname" class="control-label">PASSWORD</label>
          <input type="password" class="form-control" name="PASSWORD" placeholder="Password" required>
        </div>
        </div><!--col-md---->
          </div><!--end row-md---->
          </div>
				  <div class="card-footer">
            <button type="submit" name="btnsubmit" class="btn bg-maroon btn-sm"><span class="fa fa-check"></span> Submit</button>
          </div>
				</div>
			  </form>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include "includes/footer.php";?>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
</body>
</html>
