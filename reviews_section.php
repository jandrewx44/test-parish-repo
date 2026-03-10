<?php require_once "header.php";?>
<style>
  .block_btn {
  display: block;
  width: 100%;
  border: none;
  /* background-color: #04AA6D; */
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}
* {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

      

        .progress-label-left {
            float: left;
            margin-right: 0.5em;
            line-height: 1em;
        }
        .progress-label-right {
            float: right;
            margin-left: 0.3em;
            line-height: 1em;
        }
        .star-light {
            color:#e9ecef;
        }

        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
</style>

<body class="starter-page-page">
<?php require_once "header_menu.php";?>
  <main class="main">
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
            <div class="section-title" data-aos="fade-up">
              <h2 class="text-center">Reviews</h2>
              <p class="mb-0 text-center">Sign in to unlock your personalized experience, connect with your community, and access everything that matters most to you—your next great adventure is just a click away!</p>
             </div>
              <div class="col-lg-12">
              <div class="row">
                <div class="col-sm-3 text-center">
                <?php 
                if($SYS_LOGO==""){
                ?>
                  <img class="hidden-xs d-none d-sm-block" src="dist/img/LOGO DESIGN.png" width="230">
                <?php }else{ ?>
                  <img class="hidden-xs d-none d-sm-block" width="230" src="data:image/jpg;charset=utf8;base64,<?=base64_encode($SYS_LOGO); ?>">
                <?php }?>
    					
    				  </div>
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
                <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Feedback</h3>
						<button type="button" name="add_review" id="add_review" class="btn btn-primary rounded-pill text-white py-3 px-5">Write Feedback</button>
    				</div>
    				<div class="col-sm-4">
    					  <p>
                  <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>
                  <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                  <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                  </div>
                </p>
    					  <p>
                  <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                  <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                  <div class="progress">
                      <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                  </div>               
                </p>
    					  <p>
                  <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                  <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                  <div class="progress">
                      <div class="progress-bar bg-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                  </div>               
                </p>
    					<p>
                <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                <div class="progress">
                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                </div>               
              </p>
    					<p>
                  <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                  <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                  <div class="progress">
                      <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                  </div>               
              </p>
    				</div>
					
    			</div>
          <i class="mt-3">Recent Feedback</i>
          <div class="mt-3" id="review_content"></div>
              </div><!-- End Contact Form -->   
            
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Page Title -->
  </main>
  
  <?php include "footer.php";?>
  <div id="review_modal" class="modal fade" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Feedback</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1" style="cursor: pointer;"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2" style="cursor: pointer;"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3" style="cursor: pointer;"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4" style="cursor: pointer;"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5" style="cursor: pointer;"></i>
	        	</h4>
	        	<div class="form-group">
                    <label for="">Your Name:</label>
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
	        	<div class="form-group">
                    <label for="">Comment:</label>
	        		<textarea rows="8" name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group mt-4">
	        		<button type="button" class="btn btn-primary btn-block" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>

