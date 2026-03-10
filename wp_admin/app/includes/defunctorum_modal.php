
<!-- Add -->
<div class="modal fade " id="add" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><span class="fa fa-plus"></span> DEATH REGISTER</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="defunctorum_add.php" enctype="multipart/form-data">
          		  <div class="row">
					<div class="col-sm-4">
          		  		<div class="form-group">
                  			<label for="firstname" class="control-label">SERIES/YEAR.</label>
                    		<input type="text" class="form-control" name="SERIES_NO" value="<?=date('Y');?>" readonly>
                  		</div>
                	</div>
                <div class="col-sm-2">
          		  <div class="form-group">
                  		<label for="firstname" class="control-label">RECORD NO.</label>
                    	<input type="text" class="form-control" name="RECORD_NO" placeholder="Record No." required>
                  	</div>
                </div>
				
                <div class="col-sm-2">
          		  	<div class="form-group">
                  		<label for="firstname" class="control-label">BOOK NO.</label>
                    	<input type="text" class="form-control" name="BOOK_NO" placeholder="Book No.">
                  	</div>
                </div>
				
                <div class="col-sm-2">
          		  <div class="form-group">
                  		<label for="firstname" class="control-label">PAGE NO.</label>
                    	<input type="text" class="form-control" name="PAGE_NO" placeholder="Page No.">
                  	</div>
                </div>
				
                <div class="col-sm-2">
          		  <div class="form-group">
                  		<label for="firstname" class="control-label">REGISTER NO.</label>
                    	<input type="text" class="form-control" name="REG_NO" placeholder="Reg. No.">
                  	</div>
                </div>

				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">NAME OF DECEASED</label>
                    	<input type="text" class="form-control" name="NAME_OF_DECEASED" placeholder="Name of Deceased" required>
                  	</div>
                </div>
				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">AGE </label>
                    	<select class="form-control" name="AGE"  required>
							<option selected disabled>-Select Age-</option>
						<?php 
						for($value = 1; $value <= 100; $value++){ 
							echo('<option value="' . $value . '">' . $value . '</option>');
						}
						?>
						</select>
                  	</div>
                </div>
				<div class="col-sm-12">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">NAME OF PARENTS, WIFE OR HUSBAND</label>
                    	<input type="text" class="form-control" name="PARENTS_WIFE_HUSBAND" placeholder="Name of Parents, Wife or Husband" >
                  	</div>
                </div>
				<div class="col-sm-12">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">RESIDENCE</label>
                    	<input type="text" class="form-control" name="RESIDENCE" placeholder="Residence">
                  	</div>
                </div>

				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF DEATH</label>
                    	<input type="date" class="form-control" name="DATE_OF_DEATH" placeholder="Date of Death">
                  	</div>
                </div>
				
				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF BURIAL</label>
                    	<input type="date" class="form-control" name="DATE_OF_BURIAL" placeholder="Date of Burial">
                  	</div>
                </div>

				<div class="col-sm-12">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">PLACE OF BURIAL</label>
                    	<input type="text" class="form-control" name="PLACE_OF_BURIAL" placeholder="Place of Burial">
                  	</div>
                </div>

				

				<div class="col-sm-12">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">SACRAMENTS</label>
                    	<input type="text" class="form-control" name="SACRAMENTS" placeholder="Place of Sacraments">
                  	</div>
                </div>
                
				<div class="col-sm-12">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">NAME OF PRIEST</label>
                    	<input type="text" class="form-control" name="PRIEST" placeholder="Name of Priest">
                  	</div>
                </div>
                <div class="col-sm-12">
                <div class="form-group">
                  	<label for="address" class="control-label">NOTATIONS</label>
                      <textarea rows="8" class="form-control" name="NOTATIONS" placeholder="NOTATIONS"></textarea>
                  	</div>
                </div>
				
                </div><!----row-->
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal"><i class="fa fa-times"></i> CLOSE</button>
            	<button type="submit" class="btn bg-gradient-maroon btn-sm " name="submit"><i class="fa fa-save"></i> SUBMIT</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete_all_death" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-trash"></i> DELETE ALL RECORDS</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="text-center">
                  <p>ARE YOU SURE YOU WANT TO DELETE ALL DEATH RECORDS?</p>
                  <h4 class="text-danger"><i class="fas fa-exclamation-triangle"></i> This action cannot be undone!</h4>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal"><i class="fa fa-times"></i> CANCEL</button>
              <form action="defunctorum_delete_all.php" method="POST">
                  <button type="submit" class="btn btn-danger btn-sm" name="submit"><i class="fa fa-trash"></i> DELETE ALL</button>
              </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="search_death" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-magnifying-glass"></i> SEARCH</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="GET" action="defunctorum_info_search_result.php" enctype="multipart/form-data">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
					  <select name="search" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2" required>
								<option selected value="">-SEARCH NAME-</option>
								<?php
									$sql ="SELECT * FROM tbl_death ORDER BY NAME_OF_DECEASED ASC";
									$smt = $conn->query($sql);
									if($smt->num_rows >0){
										while($smt_row =$smt->fetch_assoc()){
											$child =ucwords(strtoupper($smt_row['NAME_OF_DECEASED']));
									?>
									 <option value="<?=$smt_row['ID'];?>"><?=$child;?></option>
										<?php } }else{ ?>
									<option>No record </option>
									<?php } ?>
							</select>
                  	</div>
                </div>
                </div><!----row-->
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal"><i class="fa fa-times"></i> CANCEL</button>
            	<button type="submit" class="btn bg-gradient-maroon btn-sm" name="submit"><i class="fa fa-solid fa-magnifying-glass"></i> SEARCH</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


