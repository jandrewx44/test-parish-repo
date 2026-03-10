<?php @include "includes/header.php";?>
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
            <h1> Own Request</h1>
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
              <div class="card-header">
                <h3 class="card-title">Search Affidavit for Partial Changes in the Baptismal</h3>
              </div>
              <form role="form" method="POST" action="baptismal-changes-own-form.php?AUTONUM=<?=basename($_SERVER['PHP_SELF']); ?>">
                <div class="card-body">
                  <div class="form-group">
                   <select class="form-control select2" onChange="this.form.submit();" method="POST" name="AUTONUM" required>
                      <option selected>-SELECT-</option>
                      <?php
                            $sql ="SELECT * FROM tbl_baptismal_changes bcp INNER JOIN tbl_baptismal bp ON bcp.UNDERSIGNED=bp.ID";
                            $query = $conn->query($sql);
                            while($row =$query->fetch_assoc()){
								 $num = $_POST['AUTONUM'];
								  $number = $num;
								  if(!isset($num)){
										
									} else{
										print $number;
									}
                          ?>
                        	<option value="<?=$row['AUTONUM'];?>" <?php echo ($row['AUTONUM'] ==  $number) ? ' selected="selected"' : '';?>><?=$row['CHILD_NAME'];?></option>
                        <?php } ?> 
                  </select>
                  </div>
                </div>
              </form>
            </div>
             <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="baptismal-changes-own-pdf.php?AUTONUM=<?=$_POST['AUTONUM'];?>" allowfullscreen></iframe>
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

