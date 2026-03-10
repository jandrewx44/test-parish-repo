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
            <h4>List of Users</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Records List</li>
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

    <section class="content">
      <div class="container-fluid">
			<div class="card">
            <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-th-list"></i>
                  List Users
                </h3>

                <div class="card-tools">
                  <div class="btn-group" id="realtime" data-toggle="btn-toggle">
					        <a type="button" href="members_add.php" class="btn bg-maroon btn-sm"> <span class="fa fa-plus"></span> New User</a>
                  </div>
                </div>
              </div>
            <!-- /.card-header -->
            <div class="card-body">
			
              <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr class="text-uppercase">
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                  <th>Password </th>
                  <th>Status</th>
                  <th>Role</th>
                  <th>created_on</th>
                  <th>Tools</th>
                </tr>
                </thead>
                <tbody>
				        <?php
                    $sql = "SELECT * FROM tbl_users ORDER BY CREATED_ON DESC";
                    $query = $conn->query($sql);
                    $cnt=1;
                    while($row = $query->fetch_assoc()){
                      ?>
                        <tr>
                          <td><?=$cnt; ?></td>
                          <td><?=$row['FIRSTNAME']; ?></td>
                          <td><?=$row['LASTNAME']; ?></td>
                          <td><?=$row['USERNAME']; ?></td>
						              <td><?=$row['PASSWORD']; ?>
                           <a href="members_reset_password.php?resetpass=<?=$row['ID'];?>" style="float:right" class="btn bg-gradient-maroon btn-xs">
                           <span class="fa fa-recycle" aria-hidden="true"></span> reset</a>
                          </td>
                         
                          <td>
                          <?php 
                            if ($row['STATUS'] ==0){
                              echo '<a href="members_confirmed.php?confirmed='.$row['ID'].'">
                            <i class="fa fa-check-circle text-danger" aria-hidden="true"></i> Disabled</a>
                              ';
                            }elseif($row['STATUS']==1){
                                echo '<a href="members_disabled.php?confpending='.$row['ID'].'"><i class="fa fa-check-circle text-success"></i> Enabled</a>';
                            }
                            ?>
                            
                          </td>
                          <td><?=$row['ROLE']; ?></td>
                          <td><?=$row['CREATED_ON']; ?></td>
                          <td>
						              	<a href='<?php echo 'members_update.php?update='.urlencode(base64_encode($row['ID']));?>' class="btn bg-gradient-success btn-sm"><span class="fa fa-edit"></span> </a>
                          </td>
                        </tr>
                      <?php
                      $cnt++;
                    }
                  ?>
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
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
$(document).ready(function(){
  $(".get_id").click(function(){
	  var ids = $(this).data('id');
	   $.ajax({
		   url:"members_info.php",
		   method:'POST',
		   data:{id:ids},
		   success:function(data){
			   
			   $('#load_data').html(data);
		   
		   }
		   
	   })
  })
  
})
</script>
</body>
</html>
