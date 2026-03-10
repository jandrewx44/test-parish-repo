
<!-- Add -->
<div class="modal fade " id="add" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><span class="fa fa-plus"></span> MARRIAGE REGISTER</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="marriage_add.php" enctype="multipart/form-data">
          		  <div class="row">
					<div class="col-sm-2">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">SERIES/YEAR NO.</label>
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

				<div class="col-sm-2">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">LICENSE NO.</label>
                    	<input type="text" class="form-control" name="LICENSE_NO" placeholder="License No." required>
                  	</div>
                </div>
                <div class="col-sm-12">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">CONTRACTING PARTIES </label>
                  	</div>
                </div>

                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">NAME OF GROOM </label>
                    	<input type="text"  class="form-control" name="NAME_MALE" placeholder="Groom">  
                  	</div>
                </div>
                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">NAME OF BRIDE</label>
                    	<input type="text" class="form-control"  name="NAME_FEMALE" placeholder="Bride">
                  	</div>
                </div>
                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">LEGAL STATUS</label>
                    	<input type="text" class="form-control" name="LEGAL_STATUS_MALE" placeholder="Legal Status">
                  	</div>
                </div>
                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">LEGAL STATUS</label>
                    	<input type="text" class="form-control"  name="LEGAL_STATUS_FEMALE" placeholder="Legal Status">
                  	</div>
                </div>
				<div class="col-sm-6">
                <div class="form-group">
                  	<label for="lastname" class="control-label">ACTUAL ADDRESS</label>
					  <input type="text" class="form-control" name="ACTUAL_ADDRESS_MALE" placeholder="Actual Address">
                  	</div>
                </div>
                <div class="col-sm-6">
                <div class="form-group">
                  	<label for="address" class="control-label">ACTUAL ADDRESS</label>
                      <input type="text" class="form-control " name="ACTUAL_ADDRESS_FEMALE" placeholder="Actual Address">
                  	</div>
                </div>

                <div class="col-sm-6">
                <div class="form-group">
                  	<label for="address" class="control-label">DATE OF BIRTH</label>
                      <input type="date" class="form-control " name="DATE_OF_BIRTH_MALE" placeholder="Date of Birth" >
                  	</div>
                </div>
				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF BIRTH</label>
                    	<input type="date"  class="form-control"  name="DATE_OF_BIRTH_FEMALE" placeholder="Date of Birth">
                      
                  	</div>
                </div>

				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">PLACE OF BIRTH</label>
                    	<input type="text" class="form-control "  name="POB_MALE" placeholder="Place of Birth">
                  	</div>
                </div>	
				
				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">PLACE OF BIRTH</label>
                    	<input type="text" class="form-control "  name="POB_FEMALE"  placeholder="Place of Birth">
                  	</div>
                </div>		

                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF BAPTISM</label>
                    	<input type="date" class="form-control"  name="DATE_BAPTISM_MALE"  placeholder="Date of Baptism">
                  	</div>
                </div>	
				
				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF BAPTISM</label>
                    	<input type="date" class="form-control"  name="DATE_BAPTISM_FEMALE" placeholder="Date of Baptism">
                  	</div>
                </div>		


				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">PLACE OF BAPTISM</label>
                    	<input type="text" class="form-control "  name="PLACE_BAPTISM_MALE" placeholder="Place of Baptism">
                  	</div>
                </div>	
				
				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">PLACE OF BAPTISM</label>
                    	<input type="text" class="form-control "  name="PLACE_BAPTISM_FEMALE" placeholder="Place of Baptism">
                  	</div>
                </div>	
			    
				<div class="col-sm-6">
                <div class="form-group">
                  	<label for="address" class="control-label">PARENTS</label>
                      <textarea rows="8" class="form-control" name="PARENTS_MALE"></textarea>
                  	</div>
                </div>
				
				<div class="col-sm-6">
                <div class="form-group">
                  	<label for="address" class="control-label">PARENTS</label>
                      <textarea rows="8" class="form-control" name="PARENTS_FEMALE"></textarea>
                  	</div>
                </div>

				<div class="col-sm-6">
                <div class="form-group">
                  	<label for="address" class="control-label">SPONSORS</label>
                      <textarea rows="8" class="form-control" name="SPONSORS_MALE"></textarea>
                  	</div>
                </div>

				<div class="col-sm-6">
                <div class="form-group">
                  	<label for="address" class="control-label">SPONSORS</label>
                      <textarea rows="8" class="form-control" name="SPONSORS_FEMALE"></textarea>
                  	</div>
                </div>

				<div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">NAME OF MINISTER</label>
                    	<input type="text" class="form-control"  name="MARRIAGE_MINISTER" placeholder="Name of Minister">
                  	</div>
                </div>	
			    <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF MARRIAGE</label>
                    	<input type="date" class="form-control"  name="DATE_OF_MARRIAGE" placeholder="Date of Marriage">
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
            	<button type="submit" class="btn bg-gradient-maroon btn-sm" name="submit"><i class="fa fa-save"></i> SUBMIT</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<div class="modal fade" id="search_marriage" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-magnifying-glass"></i> SEARCH</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="GET" action="marriage_info_search_result.php" enctype="multipart/form-data">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
					  <select name="q" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2" required>
								<option selected value="">-SEARCH NAME-</option>
								<?php
									$sql ="SELECT * FROM tbl_marriage ORDER BY DATE_OF_MARRIAGE ASC";
									$smt = $conn->query($sql);
									if($smt->num_rows >0){
										while($smt_row =$smt->fetch_assoc()){
											$child ='[GROOM-'.ucwords(strtoupper($smt_row['NAME_MALE'])).'] & [BRIDE-'.ucwords(strtoupper($smt_row['NAME_FEMALE'])).']';
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
            	<button type="submit" class="btn bg-gradient-maroon btn-sm"><i class="fa fa-solid fa-magnifying-glass"></i> SEARCH</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete_all_marriage" data-backdrop="static" data-keyboard="false">
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
                  <p>ARE YOU SURE YOU WANT TO DELETE ALL MARRIAGE RECORDS?</p>
                  <h4 class="text-danger"><i class="fas fa-exclamation-triangle"></i> This action cannot be undone!</h4>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal"><i class="fa fa-times"></i> CANCEL</button>
              <form action="marriage_delete_all.php" method="POST">
                  <button type="submit" class="btn btn-danger btn-sm" name="submit"><i class="fa fa-trash"></i> DELETE ALL</button>
              </form>
            </div>
        </div>
    </div>
</div>
