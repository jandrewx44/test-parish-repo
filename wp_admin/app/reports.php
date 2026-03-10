<?php include "includes/header.php";?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- .navbar -->
  <?php include "includes/navbar.php";?>
  <!-- /.navbar -->
  <?php include "includes/sidebar.php";?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">REPORTS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-lg-4 col-6">
            <div class="small-box bg-maroon">
              <div class="inner">
                <h3>EXPORT</h3>
                <p>List of Baptized</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-export"></i>
              </div>
              <a href="export/ListofBaptism_export.php" class="small-box-footer download-report">Download Report <i class="fas fa-download"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>EXPORT</h3>
                <p>List of Confirmed</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-export"></i>
              </div>
              <a href="export/ListofConfirm_export.php" class="small-box-footer download-report">Download Report <i class="fas fa-download"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>EXPORT</h3>
                <p>List of Marriage</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-export"></i>
              </div>
              <a href="export/ListofMarriage_Export.php" class="small-box-footer download-report">Download Report <i class="fas fa-download"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>EXPORT</h3>
                <p>List of Communion</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-export"></i>
              </div>
              <a href="export/ListofCommunion_export.php" class="small-box-footer download-report">Download Report <i class="fas fa-download"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>EXPORT</h3>
                <p>List of Conversion</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-export"></i>
              </div>
              <a href="export/ListofConversion_Export.php" class="small-box-footer download-report">Download Report <i class="fas fa-download"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>EXPORT</h3>
                <p>List of Death</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-export"></i>
              </div>
              <a href="export/ListofDeath_Export.php" class="small-box-footer download-report">Download Report <i class="fas fa-download"></i></a>
            </div>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "includes/footer.php";?>
  <script>
    $(document).ready(function() {
      $('.download-report').on('click', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        
        Swal.fire({
          title: 'ARE YOU SURE?',
          text: "DO YOU WANT TO DOWNLOAD THIS REPORT?",
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'YES, DOWNLOAD IT!',
          cancelButtonText: 'CANCEL'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = url;
          }
        });
      });
    });
  </script>
</div>
<!-- ./wrapper -->
</body>
</html>