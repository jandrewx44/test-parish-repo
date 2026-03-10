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
            <h1 class="m-0"></h1>
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
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
                $sql = "SELECT * FROM tbl_baptismal";
                $query = $conn->query($sql);
                echo "<h3>".$query->num_rows."</h3>";
              ?>
                <p>Total Baptism</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="baptismal.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
                $sql = "SELECT * FROM tbl_confirmation";
                $query = $conn->query($sql);
                echo "<h3>".$query->num_rows."</h3>";
              ?>
                <p>Total Confirmation</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="confirmation.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-maroon">
              <div class="inner">
              <?php
                $sql = "SELECT * FROM tbl_events";
                $query = $conn->query($sql);
                echo "<h3>".$query->num_rows."</h3>";
              ?>
                <p>Total Events</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="events.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
                $sql = "SELECT * FROM tbl_users";
                $query = $conn->query($sql);
                echo "<h3>".$query->num_rows."</h3>";
              ?>
                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="members.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
		  
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
		
          <section class="col-lg-8 connectedSortable">
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
			 <!-- Default box -->
			  <div class="card">
				<div class="card-header">
				  <h3 class="card-title">EVENT CALENDAR</h3>

				  <div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
					  <i class="fas fa-minus"></i>
					</button>
					<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
					  <i class="fas fa-times"></i>
					</button>
				  </div>
				</div>
				<div class="card-body">
                <div id="calendar"></div>
        
			<?php 
			$schedules = $conn->query("SELECT * FROM `schedule_list` ");
			$sched_res = [];
			foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
				$row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
				$row['edate'] = date("F d, Y",strtotime($row['end_datetime']));
				$sched_res[$row['id']] = $row;
			}
			?>
				  
				  
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
				  
				</div>
				<!-- /.card-footer-->
			  </div>
      <!-- /.card -->
          </section>
          <section class="col-lg-4 connectedSortable" id="schedule-card">
			 <!-- Default box -->
			  <div class="card">
				<div class="card-header">
				  <h3 class="card-title">ADD NEW EVENT</h3>

				  <div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
					  <i class="fas fa-minus"></i>
					</button>
					<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
					  <i class="fas fa-times"></i>
					</button>
				  </div>
				</div>
				<div class="card-body">
					<form action="save_schedule.php" method="post" id="schedule-form">
					<input type="hidden" name="id" value="">
					<div class="form-group">
						<label for="title" class="control-label">Title</label>
						<select class="form-control" name="title" id="title" required>
							<option value="" disabled selected>SELECT EVENT TYPE</option>
							<option value="WEDDING">WEDDING</option>
							<option value="BAPTISM">BAPTISM</option>
							<option value="MASS">MASS</option>
							<option value="MEETING">MEETING</option>
							<option value="OTHERS">OTHERS</option>
						</select>
					</div>
					<div class="form-group">
						<label for="description" class="control-label">Description</label>
						<textarea rows="3" class="form-control" name="description" id="description" required></textarea>
					</div>
					<div class="form-group">
						<label for="start_datetime" class="control-label">Start Date</label>
						<input type="date" class="form-control" name="start_datetime" id="start_datetime" required>
					</div>
					<div class="form-group">
						<label for="end_datetime" class="control-label">End Date</label>
						<input type="date" class="form-control" name="end_datetime" id="end_datetime" required>
					</div>
				</form>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
        <button class="btn bg-gradient-maroon btn-sm" type="reset" form="schedule-form"><i class="fa fa-reset"></i> CANCEL</button>
				  <button class="btn bg-gradient-maroon btn-sm" type="submit" form="schedule-form"><i class="fa fa-save"></i> SUBMIT</button>
                   
				</div>
				<!-- /.card-footer-->
			  </div>
      <!-- /.card -->
        
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->

        <!-- Bottom Schedule List -->
        <div class="row" id="bottom-schedule-list">
          <div class="col-12">
            <div class="card card-outline card-maroon">
              <div class="card-header">
                <h3 class="card-title text-bold text-maroon"><i class="fa fa-list"></i> SCHEDULED EVENTS</h3>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped mb-0">
                    <thead>
                      <tr class="bg-maroon text-center">
                        <th width="5%">#</th>
                        <th width="20%">TITLE</th>
                        <th width="15%">START TIME</th>
                        <th width="15%">END DATE</th>
                        <th width="35%">DESCRIPTION</th>
                        <th width="10%">ACTION</th>
                      </tr>
                    </thead>
                    <tbody id="bottom-list-container">
                      <!-- Populated dynamically when a pin is clicked -->
                      <?php 
                      $i = 1;
                      $all_sched = $conn->query("SELECT * FROM `schedule_list` ORDER BY start_datetime DESC LIMIT 10");
                      while($row = $all_sched->fetch_assoc()):
                      ?>
                      <tr class="text-center">
                        <td><?php echo $i++; ?></td>
                        <td class="font-weight-bold text-maroon text-left"><?php echo $row['title']; ?></td>
                        <td><small><?php echo date("M d, Y h:i A", strtotime($row['start_datetime'])); ?></small></td>
                        <td><small><?php echo date("M d, Y", strtotime($row['end_datetime'])); ?></small></td>
                        <td class="text-left"><small><?php echo $row['description']; ?></small></td>
                        <td>
                          <button type="button" class="btn btn-xs btn-info edit-event" data-id="<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></button>
                        </td>
                      </tr>
                      <?php endwhile; ?>
                      <?php for($j = $i; $j <= 10; $j++): ?>
                      <tr style="height: 45px;">
                        <td class="text-center text-muted"><?php echo $j; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <?php endfor; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-2">
                  <button type="button" class="btn btn-sm btn-outline-maroon" id="bottom-all">All Events</button>
                  <span id="bottom-page-info" class="text-muted small ml-2">Page 1/1</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "includes/footer.php";?>
  <style>
    .small-box {
      padding: 4px 6px 2px;
      min-height: 64px;
    }
    .small-box .inner {
      padding-bottom: 2px;
    }
    .small-box .inner h3 {
      font-size: 18px;
      margin-bottom: 1px;
    }
    .small-box .inner p {
      font-size: 11px;
      margin-bottom: 1px;
    }
    .small-box .icon {
      font-size: 26px;
      top: 4px;
    }
    .small-box .small-box-footer {
      padding: 2px 6px;
      font-size: 10px;
    }
    .content-header h1 {
      font-size: 24px;
      margin-bottom: 0;
    }
    .content-header .row.mb-2 {
      margin-bottom: 0.25rem !important;
    }
    .card .card-header {
      padding: 6px 10px;
    }
    .card .card-body {
      padding: 8px;
    }
    #calendar .fc {
      font-size: 0.85rem;
    }
    #calendar .fc-toolbar-title {
      font-size: 1.1rem;
    }
    #calendar .fc-button {
      padding: 0.25rem 0.6rem;
      font-size: 0.8rem;
    }
    #calendar .fc-daygrid-day-number {
      padding: 2px 4px;
      font-size: 0.75rem;
    }
    @media (max-width: 991.98px) {
      .content .col-lg-8,
      .content .col-lg-4 {
        flex: 0 0 100%;
        max-width: 100%;
      }
      .card .card-body {
        padding: 8px;
      }
    }
    .fc-daygrid-day.fc-day-has-sched {
      position: relative;
      cursor: pointer !important;
    }
    .fc-daygrid-day.fc-day-has-sched:hover {
      background-color: #fff3f3 !important;
    }
    .fc-daygrid-day.fc-day-has-sched::before {
      content: '';
      position: absolute;
      top: 4px;
      left: 6px;
      width: 24px;
      height: 24px;
      background-image: url('../plugins/fullcalendar/js/pin.png');
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      pointer-events: none;
      z-index: 5;
      transition: all 0.2s ease-in-out;
    }
    .fc-daygrid-day.fc-day-has-sched:hover::before {
      transform: scale(1.3) rotate(-10deg);
      top: 2px;
    }
    .fc-daygrid-day-events {
      display: none;
    }
    .fc .fc-scheduleList-button { display: none !important; }
    .fc-timeGridWeek-button,
    .fc-dayGridWeek-button,
    .fc-listWeek-button,
    .fc-listMonth-button {
      display: none !important;
    }
    #bottom-schedule-list .delete-event,
    #bottom-schedule-list .btn-danger {
      display: none !important;
    }
  </style>
  <script>
    var scheds = <?= json_encode($sched_res) ?>;
	</script>
	<script src="../plugins/fullcalendar/js/script.js"></script>
</body>
</html>


 
