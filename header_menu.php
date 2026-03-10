  <header id="header" class="header sticky-top">
    <?php if (empty($HIDE_TOPBAR)) { ?>
    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:<?php print $SYS_EMAIL;?>"><?php print $SYS_EMAIL;?></a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span><?php print $SYS_NUMBER;?></span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->
    <?php } ?>

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename"><?php print $SYS_NAME;?></h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php#hero" class="active">Home<br></a></li>
            <li><a href="index.php#about">About</a></li>
            <li><a href="index.php#services">Services</a></li>
            <li><a href="reviews_section.php#reviews">Reviews</a></li>
            <li><a href="index.php#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn d-none d-sm-block" href="check_appointment.php?check_appointment">Check Appointment</a>
        <a class="cta-btn d-none d-sm-block" href="calendar_appointment.php?appointment">Make an Appointment</a>

      </div>

    </div>
  </header>
