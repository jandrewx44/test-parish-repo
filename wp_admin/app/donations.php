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
            <h4>DONATIONS</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">HOME</a></li>
              <li class="breadcrumb-item active">DONATIONS</li>
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
                  <a href="#add" data-toggle="modal" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> NEW</a>
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
                <table id="example1" class="table table-bordered table-striped table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>DONOR NAME</th>
                    <th>AMOUNT </th>
                    <th>DONATION TYPE</th>
                    <th>DONATED ON </th>
                    <th>DESCRIPTION</th>
                    <th>ACTIONS</th>
                  </tr>
                  </thead>
                  <tbody>
				        	<?php
                    $sql = "SELECT * FROM tbl_donations ORDER BY DONATED_ON DESC";
                    $query = $conn->query($sql);
				        	$cnt=1;
                    while($row = $query->fetch_assoc()){
                        $ammount=$row['AMOUNT'];
                        $donationType = '';
                        if(isset($row['DESCRIPTION'])){
                          if(preg_match('/TYPE:\s*([A-Z]+)/', $row['DESCRIPTION'], $m)){
                            $donationType = $m[1];
                          }
                        }
                      ?>
                        <tr>
                          <td><?=$cnt; ?></td>
                          <td style="text-transform: uppercase;"><?=$row['DONATOR']; ?></td>
                          <td><?= number_format($ammount,2);?></td>
                          <td style="text-transform: uppercase;"><?=$donationType; ?></td>
                          <td><?= date('l dS \o\f F Y h:i:s A',strtotime($row['DONATED_ON']));?></td>
                          <td style="text-transform: uppercase;"><?=$row['DESCRIPTION']; ?></td>
                          <td align="right">
                            <div class="btn-group">
                            <button data-id="<?=htmlentities($row['ID']);?>"  class="btn btn-success btn-sm edit"><i class="fa-solid fa fa-edit"></i> </button>
                            </div>
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
  <?php include "includes/donations_modal.php";?>
 <?php include "includes/footer.php";?>

 <script>
$(function(){
  $('body').on('click','.edit',function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('body').on('click','.info',function(e){
    e.preventDefault();
    $('#infoarticle').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
  
 
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'donations_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.ID);
      $('.del_name').html(response.DONATOR);
      $('.del_date').html(response.DONATED_ON);
      $('.del_amount').html(response.AMOUNT);

      $('#edit_name').val(response.DONATOR);
      var donatedOn = response.DONATED_ON || '';
      if (donatedOn.length >= 10) {
        donatedOn = donatedOn.substring(0,10);
      }
      $('#edit_date').val(donatedOn);
      $('#edit_amount').val(response.AMOUNT);
      $('#edit_description').val(response.DESCRIPTION);
      $('#edit_donation_type').val(response.DONATION_TYPE);

    }
  });
}
</script> 
</body>
</html>

