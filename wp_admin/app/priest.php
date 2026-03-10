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
        <div class="row mb-1">
          <div class="col-sm-6">
            <h1 class="m-0">PRIEST</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div>
        <div class="row mb-2">
          <div class="col-12">
            <div class="btn-group btn-group-sm" role="group" aria-label="Manage filters">
              <a href="holiday.php?home=manage_holiday" class="btn btn-outline-light text-dark bg-white">Holiday</a>
              <a href="schedule.php?home=manage_slots" class="btn btn-outline-light text-dark bg-white">Schedule</a>
              <a href="sms.php?home=sms" class="btn btn-outline-light text-dark bg-white">SMS</a>
              <a href="requirements.php?home=requirements" class="btn btn-outline-light text-dark bg-white">Requirements</a>
              <a href="services.php?home=services" class="btn btn-outline-light text-dark bg-white">Services</a>
              <a href="contact_us.php?home=contactus" class="btn btn-outline-light text-dark bg-white">Inquiries</a>
              <a href="reviews.php" class="btn btn-outline-light text-dark bg-white">Reviews</a>
              <a href="priest.php?=priest" class="btn btn-primary text-white">Priest</a>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
		  
            <?php
              if(isset($_SESSION['error'])){
                echo "
                <div id='alert' class='alert alert-danger' id='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h4><i class='icon fa fa-warning'></i> ERROR!</h4>
                  ".$_SESSION['error']."
                </div>
                ";
                unset($_SESSION['error']);
              }
              if(isset($_SESSION['success'])){
                echo "
                <div id='alert' class='alert alert-success' id='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h4><i class='icon fa fa-check'></i> SUCCESS!</h4>
                  ".$_SESSION['success']."
                </div>
                ";
                unset($_SESSION['success']);
              }
              ?>
		  
            <div class="card">
              <div class="card-header">
                      <h3 class="card-title"> 
              <button href="#add_priest" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> PRIEST</button>
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
                <table id="example1" class="table table-bordered table-striped table-sm text-sm">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>PRIEST</th>
                    <th>DEFAULT</th>
                    <th>ACTIONS</th>
                  </tr>
                  </thead>
                  <tbody>
				        	<?php
                    $sql = "SELECT * FROM tbl_priest ORDER BY PRIEST_NAME ASC";
                    $sql=$conn->prepare($sql);
                    if($sql->execute()){
                      $result=$sql->get_result();
				        	  $cnt=1;
                    while($row = $result->fetch_assoc()){
                      ?>
                        <tr>
                          <td><?=$cnt++; ?></td>
                          <td><?=$row['PRIEST_NAME']; ?></td>
                          <td><?=$row['PRIEST_DEFAULT']; ?></td>
                          <td align="right">
							            <div class="btn-group">
                            <button class="btn btn-primary btn-sm"
                            data-id="<?=$row['PRIEST_ID'];?>" 
                            data-name="<?=$row['PRIEST_NAME'];?>"
                            data-default="<?=$row['PRIEST_DEFAULT'];?>"
                            onclick="editPriest(this);" data-jario="tooltip" data-placement="top" title="EDIT"><i class="fa-solid fa fa-edit"></i> </button>
                            <button class="btn btn-danger btn-sm" 
                            data-id="<?=$row['PRIEST_ID'];?>" 
                            onclick="deletePriest(this);" data-jario="tooltip" data-placement="top" title="DELETE"><i class="fa-solid fa fa-trash"></i> </button>
							            </div>
                          </td>
                        </tr>
                      <?php
                    }
                  }
                  ?>
                  </tbody>
                </table>
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
  <?php include "includes/priest_modal.php";?>
 <?php include "includes/footer.php";?>

 <script type="text/javascript">
 function editPriest(self) {
      const pid = self.getAttribute("data-id");
      const pname = self.getAttribute("data-name");
      const pdefault = self.getAttribute("data-default");
      document.getElementsByClassName("edit_pid")[0].value = pid;
      document.getElementsByClassName("edit_pname")[0].value = pname;
      document.getElementsByClassName("edit_pdefault")[0].innerHTML = pdefault;
      $("#editPriest").modal("show");
    }

    function deletePriest(self) {
      var pid = self.getAttribute("data-id");
      document.getElementById("del_pid").value = pid;
      $("#del_modal").modal("show");
    }
</script> 

</body>
</html>

