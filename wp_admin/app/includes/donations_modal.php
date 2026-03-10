<!---FOR ADD---->
<div class="modal fade" id="add" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><span class="fa fa-plus"></span> New Donations</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="donations_add.php" enctype="multipart/form-data">
          		  <div class="row">
                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">DONOR</label>
                            <input type="text" class="form-control"  name="DONATOR" style="text-transform: uppercase;" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">AMOUNT</label>
                            <input type="text" class="form-control"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" name="AMOUNT" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">DONATED ON</label>
                            <input type="date" class="form-control"  name="DONATED_ON" required>
                        </div>
                    </div>

                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="donation_type" class="control-label">DONATION TYPE</label>
                             <select class="form-control" name="DONATION_TYPE" id="donation_type">
                                <option value="CASH">CASH</option>
                                <option value="SUPPLIES">SUPPLIES</option>
                                <option value="MATERIALS">MATERIALS</option>
                                <option value="SPONSORSHIP">SPONSORSHIP</option>
                             </select>
                        </div>
                    </div>

                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">DESCRIPTION</label>
                             <input type="text" class="form-control" name="DESCRIPTION" style="text-transform: uppercase;" required>
                        </div>
                    </div>
                </div><!----row-->
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> CLOSE</button>
            	<button type="submit" class="btn bg-gradient-maroon btn-sm" name="submit"><i class="fa fa-save"></i> SUBMIT</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
<!---FOR EDIT---->
<div class="modal fade" id="edit" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><span class="fa fa-edit"></span> Edit </h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="donations_edit.php" enctype="multipart/form-data">
          		  <div class="row">
                     <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">DONOR</label>
                             <input type="hidden" class="form-control id" name="ID" required readonly>
                            <input type="text" class="form-control" id="edit_name" name="DONATOR" style="text-transform: uppercase;" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">AMOUNT</label>
                            <input type="text" class="form-control" id="edit_amount" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" name="AMOUNT" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">DONATED ON</label>
                            <input type="date" class="form-control" id="edit_date" name="DONATED_ON" required>
                        </div>
                    </div>

                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="edit_donation_type" class="control-label">DONATION TYPE</label>
                             <select class="form-control" name="DONATION_TYPE" id="edit_donation_type">
                                <option value="CASH">CASH</option>
                                <option value="SUPPLIES">SUPPLIES</option>
                                <option value="MATERIALS">MATERIALS</option>
                                <option value="SPONSORSHIP">SPONSORSHIP</option>
                             </select>
                        </div>
                    </div>

                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">DESCRIPTION</label>
                             <input type="text" class="form-control" id="edit_description" name="DESCRIPTION" style="text-transform: uppercase;" required>
                        </div>
                    </div>

                </div><!----row-->
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> CLOSE</button>
            	<button type="submit" class="btn bg-gradient-maroon btn-sm" name="submit"><i class="fa fa-save"></i> SUBMIT</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
<!-- delete functionality removed by request -->


