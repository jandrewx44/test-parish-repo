<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-2 bg-navy">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <?php 
        if($SYS_LOGO==""){
        ?>
          <img src="../dist/img/avatar4.png" class="brand-image img-circle" alt="User Image">
        <?php }else{ ?>
          <img src="data:image/jpg;charset=utf8;base64,<?=base64_encode($SYS_LOGO); ?>" class="brand-image img-circle">
        <?php }?>
      <span class="brand-text font-weight-light"><?=$SYS_SHORTNAME;?><b> SYSTEM</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item ">
            <a href="#" class="nav-link">
              <p>DASHBOARD</p>
            </a>
          </li> -->
		    <li class="nav-item">
            <a href="home.php?home=home" class="nav-link">
              <i class="nav-icon fa fa-desktop"></i>
              <p>DASHBOARD</p>
            </a>
          </li>
		  
          <li class="nav-item">
            <a href="donations.php?home=donations" class="nav-link">
              <i class="nav-icon fas fa-solid fa-hands-holding-diamond"></i> 
              <p>DONATIONS</p>
            </a>
          </li>
        <li class="nav-item">
            <a href="baptismal.php?home=baptismal" class="nav-link">
              <i class="nav-icon fas fa-solid fa-folder-open"></i>
              <p>RECORD</p>
            </a>
        </li>
          
		  <li class="nav-item">
            <a href="certificates_form.php?home=certificates_form" class="nav-link">
              <i class="nav-icon fa-solid fas fa-solid fa-medal"></i> 
              <p>CERTIFICATION</p>
            </a>
          </li>
          <li class="nav-header">MANAGE</li>
          <li class="nav-item">
            <a href="appointment_pending.php?home=appointment_pending" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>APPOINTMENT</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="events.php?home=events" class="nav-link">
              <i class="nav-icon fas fa-calendar-check"></i>
              <p>EVENTS</p>
            </a>
          </li>
       <li class="nav-item">
          <a href="holiday.php?home=manage_holiday" class="nav-link">
          <i class="nav-icon fas fa-cogs"></i>
            <p class="">SETTINGS</p>
          </a>
        </li>
          <li class="nav-header">MAINTENANCE</li>
		    <li class="nav-item">
            <a href="reports.php?home=reports" class="nav-link">
              <i class="nav-icon fas fa-solid fa-chart-line"></i>
              <p>REPORTS</p>
            </a>
          </li>
		      <li class="nav-item">
            <a href="members.php?home=members" class="nav-link">
              <i class="nav-icon fas fa-solid fa-users"></i>
              <p>USERS</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="setting.php?home=setting" class="nav-link">
              <i class="nav-icon fas fa-solid fa-gear"></i>
              <p>WEBSITE SETTINGS</p> 
            </a>
          </li>
          <!---<li class="nav-item">
            <a href="history.php?home=history" class="nav-link">
              <i class="nav-icon fas fa-solid fa-users"></i>
              <p>HISTORY LOGS</p> 
            </a>
          </li>---->
		  
          <li class="nav-item">
            <a href="history.php?home=history" class="nav-link">
              <i class="nav-icon fas fa-history"></i>
              <p>ACTIVITY LOG</p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  </aside>
  </aside>
