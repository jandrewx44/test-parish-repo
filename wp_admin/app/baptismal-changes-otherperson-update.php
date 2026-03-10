<?php @include "includes/header.php";
 $EDIT=intval($_GET['edit']);
if(isset($EDIT)){
    $sql = "SELECT * FROM tbl_baptismal_otherperson WHERE ID= '".$EDIT."'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$smtrow = $query->fetch_assoc();
		$UNDERSIGNED   	=$smtrow['UNDERSIGNED'];
        $RESIDING   	=ucwords(strtolower($smtrow['RESIDING']));
        $REG_NO   		=$smtrow['REGNO'];
        $PAGE_NO   		=$smtrow['PAGENO'];
        $SERIES_OF   	=$smtrow['SERIESNO'];
        $NAME_NOWBE   	=ucwords(strtolower($smtrow['NAME_NOWBE']));
        $NOT_ONE   		=ucwords(strtolower($smtrow['NOT_ONE']));
        $POB   			=ucwords(strtolower($smtrow['POB']));
        $NOT_TWO   		=ucwords(strtolower($smtrow['NOT_TWO']));
        $DOB   			=$smtrow['DOB'];
        $NOT_THREE   	=ucwords(strtolower($smtrow['NOT_THREE']));
        $FATHER_NAME   	=ucwords(strtolower($smtrow['FATHERNAME']));
        $NOT_FOUR   	=ucwords(strtolower($smtrow['NOT_FOUR']));
        $MOTHER_NAME   	=ucwords(strtolower($smtrow['MOTHERNAME']));
        $NOT_FIVE   	=ucwords(strtolower($smtrow['NOT_FIVE']));
        $SPONSOR   		=ucwords(strtolower($smtrow['SPONSOR']));
        $NOT_SIX   		=ucwords(strtolower($smtrow['NOT_SIX']));
        $OTHERS   		=ucwords(strtolower($smtrow['OTHERS']));
        $THIS   		=$smtrow['THIS'];
        $OF   			=$smtrow['OF'];
        $YEAR   		=$smtrow['YEAR'];
        $PETITIONER   	=ucwords(strtolower($smtrow['PETITIONER']));
		
		if($smtrow['BIRTH_CERT']=='YES'){
			$BIRTH_CERT_check = 'checked';
		}else{
			$BIRTH_CERT_check = '';
		}
		if($smtrow['JOINT_AFFIDAVIT']=="YES"){
			$JOINT_AFFIDAVIT_check = 'checked';
		}else{
			$JOINT_AFFIDAVIT_check = '';
		}
		if($smtrow['MARRIAGE_CONTRACT_PARENTS']=="YES"){
			$MARRIAGE_CONTRACT_PARENTS_check = 'checked';
		}else{
			$MARRIAGE_CONTRACT_PARENTS_check = '';
		}
		if($smtrow['CERT_OF_BAPTISM']=="YES"){
			$CERT_OF_BAPTISM_check = 'checked';
		}else{
			$CERT_OF_BAPTISM_check = '';
		}
		
		$smtb = "SELECT * FROM tbl_baptismal WHERE ID='".$UNDERSIGNED."'";
		$smtb_query = $conn->query($smtb);
		if($smtb_query->num_rows >0){
			foreach($smtb_query as $value){
				$CHILD_NAME =ucwords(strtolower($value['CHILD_NAME']));
				$PERMANENT_ADDRESS =ucwords(strtolower($value['PERMANENT_ADDRESS']));
				$PAGE_NO =$value['PAGE_NO'];
				$REG_NO =$value['REG_NO'];
				$SERIES_NO =$value['SERIES_NO'];
			}
		}else{
			
		}
    
	}else{
	  
	}
}
?>
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
            <h4>Edit Request <a href="baptismal-changes-otherperson-record.php" class="btn bg-maroon btn-xs"><i class="fa fa-sharp fa-solid fa-left"></i> Back</a></h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Certificates</li>
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
		  
           
			  
			 
			  <div class="card card-default">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100 text-uppercase" data-toggle="collapse" href="#collapseOne">
                          <i class="fa fa-edit"></i> Edit Changes in the Baptismal
                        </a>
                      </h4>
                    </div>
            
                      <div class="card-body">
					  <form class="form-horizontal" method="POST" action="baptismal-changes-otherperson-update-save.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
          		  <div class="row">
                         <div class="col-sm-6">
          		  		<div class="form-group">
							<span>I, the undersigned</span>
							<input type="text" class="form-control text-capitalize" value="<?=$CHILD_NAME;?>" readonly>
							<input type="hidden" class="form-control text-capitalize" name="EDIT" value="<?=$EDIT;?>" readonly>
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
						<span>, of legal age, residing in </span>
                    		<input type="text" class="form-control text-capitalize" value="<?=$PERMANENT_ADDRESS;?>" readonly>
                  		</div>
                	</div> 
					<div class="col-sm-12">
          		  		<div class="form-group">
						<span>do hereby declare under oath that:</span>
                  		</div>
                	</div> 
					<div class="col-sm-12">
          		  		<div class="form-group">
						<span>The following changes be done and not as it appears in the Baptism </span>
                  		</div>
                	</div> 
					
				  <div class="col-sm-4">
          		  		<div class="form-group">
							<span>Register No.,</span>
                    		<input type="text" class="form-control text-capitalize" value="<?=$REG_NO;?>" readonly>
                  		</div>
                	</div>
					
					<div class="col-sm-4">
          		  		<div class="form-group">
						<span>Page No.</span>
                    		<input type="text" class="form-control text-capitalize" value="<?=$PAGE_NO;?>" readonly>
                  		</div>
                	</div>
					<div class="col-sm-4">
          		  		<div class="form-group">
						<span>, Series of </span>
                    		<input type="text" class="form-control text-capitalize" value="<?=$SERIES_NO;?>" readonly>
                  		</div>
                	</div>
					
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>His/her Name shall now be </span>
                    		<input type="text" class="form-control text-capitalize" name="NAME_NOWBE" value="<?=$NAME_NOWBE;?>">
                  		</div>
                	</div>
					
					<div class="col-sm-6">
          		  		<div class="form-group">
						<span>and not</span>
                    		<input type="text" class="form-control text-capitalize" name="NOT_ONE" value="<?=$NOT_ONE;?>" readonly>
                  		</div>
                	</div>
					
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>His/her Place of Birth shall now be  </span>
                    		<input type="text" class="form-control text-capitalize" name="POB" value="<?=$POB;?>">
                  		</div>
                	</div>
					
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>and not </span>
                    		<input type="text" class="form-control text-capitalize" name="NOT_TWO" value="<?=$NOT_TWO;?>" readonly>
                  		</div>
                	</div>
					
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>His/her Date of Birth shall now be </span>
                    		<input type="date" class="form-control text-capitalize" name="DOB" value="<?=$DOB;?>">
                  		</div>
                	</div> 
					
					
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>and not </span>
                    		<input type="date" class="form-control text-capitalize" name="NOT_THREE" value="<?=$NOT_THREE;?>" readonly>
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>His/her Father’s Name shall now be  </span>
                    		<input type="text" class="form-control text-capitalize" name="FATHER_NAME" value="<?=$FATHER_NAME;?>">
                  		</div>
                	</div> 
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>and not </span>
                    		<input type="text" class="form-control text-capitalize" name="NOT_FOUR" value="<?=$NOT_FOUR;?>" readonly>
                  		</div>
                	</div>
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>His/her Mother’s Name shall now be  </span>
                    		<input type="text" class="form-control text-capitalize" name="MOTHER_NAME" value="<?=$MOTHER_NAME;?>">
                  		</div>
                	</div> 
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>and not </span>
                    		<input type="text" class="form-control text-capitalize" name="NOT_FIVE" value="<?=$NOT_FIVE;?>" readonly>
                  		</div>
                	</div>
					
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>My Sponsors shall now be  </span>
                    		<input type="text" class="form-control text-capitalize" name="SPONSOR" value="<?=$SPONSOR;?>">
                  		</div>
                	</div>
					
					<div class="col-sm-6">
          		  		<div class="form-group">
							<span>and not </span>
                    		<input type="text" class="form-control text-capitalize" name="NOT_SIX" value="<?=$NOT_SIX;?>" readonly>
                  		</div>
                	</div>

					<div class="col-sm-12">
						<div class="form-group">
							<span>I have attached herewith the following documents: </span>
						</div>
					</div>
					<div class="col-sm-6">
                      <div class="form-group">
                          <input type="checkbox" name="BIRTH_CERT" value="YES" <?=$BIRTH_CERT_check;?>/> <label>Birth Certificate</label><br>
                          <input type="checkbox" name="JOINT_AFFIDAVIT" value="YES" <?=$JOINT_AFFIDAVIT_check;?>/> <label>Joint Affidavit</label><br>
                      </div>
                    </div>
					<div class="col-sm-6">
                      <div class="form-group">
                          <input type="checkbox" name="MARRIAGE_CONTRACT_PARENTS" value="YES" <?=$MARRIAGE_CONTRACT_PARENTS_check;?>/> <label>Marriage Contract of my Parents</label><br>
                          <input type="checkbox" name="CERT_OF_BAPTISM" value="YES" <?=$CERT_OF_BAPTISM_check;?>/> <label>Certificate of Baptism</label><br>	
                      </div>
                    </div>
					<!---<div class="col-sm-12">
						<div class="form-group">
							<span>
							( ) Birth Certificate				
							( ) Joint Affidavit
							( ) Marriage Contract of my Parents		
							( ) Certificate of Baptism
							</span>
						</div>
					</div>
					--->
					<div class="col-sm-12">
						<div class="form-group">
							<span>( ) Others, pls. specify 	</span>
							<input type="text" class="form-control text-capitalize" name="OTHERS" value="<?=$OTHERS;?>">
						</div>
					</div>

						<div class="col-sm-12">
						<div class="form-group">
							<span>
							Negligence on the pleasantries and transcription of the Parish Secretary’s recording was perhaps the reason for this error.

							I certify that the foregoing statement is the truth and not being made for the purpose of fraud or committing any crime and that I hold myself solely liable for any consequence that may arise from any correction of the entry in the Register of Baptism. I hereunto sign this AFFIDAVIT at the Office of St.Philip Benizi Parish, Osmeña, Dipolog City, Philippines 
							</span>
						</div>
					</div>
					<div class="col-sm-4">
          		  		<div class="form-group">
							<span>this</span>
                    		<input type="text" class="form-control" name="THIS" value="<?= $THIS;?>">
                  		</div>
                	</div> 
					<div class="col-sm-4">
          		  		<div class="form-group">
							<span>of </span>
                    		<input type="text" class="form-control" name="OF" value="<?= $OF;?>">
                  		</div>
                	</div>
					<div class="col-sm-4">
          		  		<div class="form-group">
							<span>Year</span>
                    		<input type="text" class="form-control" name="YEAR" value="<?=$YEAR;?>">
                  		</div>
                	</div>.
					
					<div class="col-sm-12">
          		  		<div class="form-group">
							<span>Name of Petitioner</span>
                    		<input type="text" class="form-control text-capitalize" name="PETITIONER" value="<?=$PETITIONER;?>" required>
                  		</div>
                	</div>									
			
					</div>
					
                      </div>
					  <div class="card-footer">
					  <button type="submit" name="submit" class="btn btn-primary btn-sm">SUBMIT</button>
					</div>
					</form>
                    
                  </div>
				

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
 <?php @include "includes/footer.php";?>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
</script>
<script>
	  $(function () {
		$('.summernote').summernote()
	  })
	</script>
</body>
</html>

