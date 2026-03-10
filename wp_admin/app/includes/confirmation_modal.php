
<!-- Add -->
<div class="modal fade " id="add" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><span class="fa fa-plus"></span> CONFIRMATION REGISTER</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="confirmation_add.php" enctype="multipart/form-data">
          		  <div class="row">
					<div class="col-sm-4">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">SERIES/YEAR NO.</label>
                    	<input type="text" class="form-control" name="SERIES_NO" value="<?=date('Y');?>" readonly>
                  	</div>
                </div>
                <div class="col-sm-2">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">RECORD NO.</label>
                    	<input type="text" class="form-control" name="RECORD_NUMBER" placeholder="Record No." required>
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
                  	<label for="firstname" class="control-label">NAME OF CHILD</label>
                    	<input type="text" class="form-control "  name="CHILD_NAME" placeholder="Child Name">
                  	</div>
                </div>
                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">GENDER </label>
                      <select class="form-control select2" name="GENDER">
                        <option value="" selected>- Select -</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                  	</div>
                </div>

                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">DATE OF BAPTISM</label>
                    	<input type="date"  class="form-control " name="DATE_OF_BAPTISM" placeholder="Date of Baptism">
                      
                  	</div>
                </div>
                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">PLACE OF BAPTISM</label>
                    	<input type="text" class="form-control "  name="PLACE_OF_BAPTISM" placeholder="Place of Baptism">
                  	</div>
                </div>
                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">NAME OF FATHER</label>
                    	<input type="text" class="form-control "  name="FATHER_NAME" placeholder="Father Name">
                  	</div>
                </div>
                <div class="col-sm-6">
          		  <div class="form-group">
                  	<label for="firstname" class="control-label">MAIDEN NAME OF MOTHER</label>
                    	<input type="text" class="form-control "  name="MOTHER_NAME" placeholder="Mother Name">
                  	</div>
                </div>

                <div class="col-sm-6">
                <div class="form-group">
                  	<label for="address" class="control-label">NAME OF MINISTER</label>
                      <input type="text" class="form-control" name="NAME_OF_PRIEST" placeholder="Priest Name">
                  	</div>
                </div>

                <div class="col-sm-6">
                <div class="form-group">
                  	<label for="address" class="control-label">DATE CONFIRMED</label>
                      <input type="date" class="form-control" name="DATE_CONFIRMED" placeholder="Date Cofirmed">
                  	</div>
                </div>

				<div class="col-sm-12">
                <div class="form-group">
                  	<label for="address" class="control-label">RESIDENT ADDRESS</label>
                      <input type="text" class="form-control" name="RESIDENT_OF" placeholder="Resident Address">
                  	</div>
                </div>		
				
				<div class="col-sm-12">
                <div class="form-group">
                  	<label for="address" class="control-label">LIST OF SPONSORS</label>
                      <textarea rows="8" class="form-control" name="LIST_OF_SPONSORS" placeholder="SPONSORS"></textarea>
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


<div class="modal fade" id="search_confirmation_name" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-magnifying-glass"></i> SEARCH</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="GET" action="confirmation_info_search_result.php" enctype="multipart/form-data">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
					  <select name="ID" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2" required>
								<option selected value="">-SEARCH NAME-</option>
								<?php
									$sql ="SELECT * FROM tbl_confirmation ORDER BY CHILD_NAME ASC";
									$smt = $conn->query($sql);
									if($smt->num_rows >0){
										while($smt_row =$smt->fetch_assoc()){
											$child =ucwords(strtoupper($smt_row['CHILD_NAME']));
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

<div class="modal fade" id="delete_all_confirmation" data-backdrop="static" data-keyboard="false">
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
                  <p>ARE YOU SURE YOU WANT TO DELETE ALL CONFIRMATION RECORDS?</p>
                  <h4 class="text-danger"><i class="fas fa-exclamation-triangle"></i> This action cannot be undone!</h4>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal"><i class="fa fa-times"></i> CANCEL</button>
              <form action="confirmation_delete_all.php" method="POST">
                  <button type="submit" class="btn btn-danger btn-sm" name="submit"><i class="fa fa-trash"></i> DELETE ALL</button>
              </form>
            </div>
        </div>
    </div>
</div>
