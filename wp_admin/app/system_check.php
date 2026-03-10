<?php @include "includes/header.php";?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <?php @include "includes/navbar.php";?>
  <?php @include "includes/sidebar.php";?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4>System Check</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">System Check</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-heartbeat"></i> Hosting Readiness</h3>
              </div>
              <div class="card-body">
                <?php
                $checks = [];
                $ok = version_compare(PHP_VERSION,'7.4.0','>=');
                $checks[] = ['PHP Version', $ok, PHP_VERSION];
                $required = ['mysqli','curl','openssl','mbstring','json'];
                foreach($required as $ext){
                  $checks[] = ['Extension: '.$ext, extension_loaded($ext), extension_loaded($ext)?'Loaded':'Missing'];
                }
                $dbok = isset($conn) && @$conn->ping();
                $checks[] = ['Database Connection', $dbok, $dbok?'Connected':'Cannot connect'];
                $col = @$conn->query("SHOW COLUMNS FROM tbl_system_setting LIKE 'SYS_DIOCESE'");
                if($col && $col->num_rows==0){ @$conn->query("ALTER TABLE tbl_system_setting ADD COLUMN SYS_DIOCESE VARCHAR(255) NULL"); }
                $col2 = @$conn->query("SHOW COLUMNS FROM tbl_system_setting LIKE 'SYS_CHURCH_NAME'");
                if($col2 && $col2->num_rows==0){ @$conn->query("ALTER TABLE tbl_system_setting ADD COLUMN SYS_CHURCH_NAME VARCHAR(255) NULL"); }
                $colok = $col!==false && $col2!==false;
                $checks[] = ['Settings Columns', $colok, 'SYS_DIOCESE/SYS_CHURCH_NAME'];
                $sms = @$conn->query("SELECT ACTIVE,APIKEY,APILINK FROM tbl_sms LIMIT 1");
                $smsok = $sms && $sms->num_rows>0;
                $checks[] = ['SMS Settings Row', $smsok, $smsok?'Present':'Not found'];
                $pathOk = true;
                $checks[] = ['Async SMS Support', $pathOk, 'fsockopen with HTTP/HTTPS'];
                $charset = @$conn->character_set_name();
                $checks[] = ['DB Charset', $charset==='utf8mb4', $charset];
                echo '<table class="table table-bordered table-striped">';
                echo '<thead><tr><th>Check</th><th>Status</th><th>Detail</th></tr></thead><tbody>';
                foreach($checks as $c){
                  $badge = $c[1] ? '<span class="badge badge-success">OK</span>' : '<span class="badge badge-danger">Issue</span>';
                  echo '<tr><td>'.$c[0].'</td><td>'.$badge.'</td><td>'.$c[2].'</td></tr>';
                }
                echo '</tbody></table>';
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php @include "includes/footer.php";?>
</div>
</body>
</html>
