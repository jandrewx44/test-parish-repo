<section id="services" class="services section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Services</h2>
        <p>Empowering churches to streamline operations, enhance communication, and foster deeper connections within their community.</p>
      </div><!-- End Section Title -->

      <div class="container">	
        <div class="row gy-12">
          <div class="col-lg-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-itesm position-relative">
              <ul style="list-style:none">
			   <li>
                <div>
                  <h5 class="text-primary">DOCUMENTS</h5>
                </div>
              </li>
				<?php
                    $sql = "SELECT * FROM tbl_services";
                    $query=$conn->prepare($sql);
                    if($query->execute()){
                      $result=$query->get_result();
					if($result->num_rows >0){
					   
                      ?>
					  <?php while($rows_a = $result->fetch_assoc()){?>
					<li>
						<p class="mb-0"><i class="fa fa-solid fa-check text-primary"></i> <?=$rows_a['SERVICES'];?></p>
					</li>
					  <?php } ?>
					<?php }}else{ ?>
					
					<?php } ?>
				</ul>
            </div>
          </div>
        </div>
		<div class="row gy-12">
          <div class="col-lg-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-itesm position-relative">
				
              <ul style="list-style:none">
			   <li>
                <div>
                  <h5 class="text-primary">REQUIREMENTS</h5>
                </div>
              </li>
				<?php
                    $sql = "SELECT * FROM tbl_requirements";
                    $query=$conn->prepare($sql);
                    if($query->execute()){
                      $result=$query->get_result();
					if($result->num_rows >0){
					   
                      ?>
					  <?php while($rows_a = $result->fetch_assoc()){?>
					<li>
						<p class="mb-0"><i class="fa fa-solid fa-check text-primary"></i> <?=$rows_a['REQ_NAME'];?></p>
					</li>
					  <?php } ?>
					<?php }}else{ ?>
					
					<?php } ?>
				</ul>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	