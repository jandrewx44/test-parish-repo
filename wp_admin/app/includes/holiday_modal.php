<!---FOR ADD---->
<div class="modal fade" id="add" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><span class="fa fa-plus"></span> ADD HOLIDAY</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
            	<form class="form-horizontal needs-validation" method="POST" action="holiday_add.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" novalidate>
          		  <div class="row">
                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">DATE <i>Format mm-dd</i></label>
                            <input type="text" class="form-control" placeholder="mm-dd" name="blocked_date" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">DESCRIPTION</label>
                             <select class="form-control" name="blocked_name" required>
                               <option value="" selected disabled>Select holiday</option>
                               <option value="New Years Day">New Years Day</option>
                               <option value="Maundy Thursday">Maundy Thursday</option>
                               <option value="Good Friday">Good Friday</option>
                               <option value="Black Saturday">Black Saturday</option>
                               <option value="Easter Sunday">Easter Sunday</option>
                               <option value="Labor Day">Labor Day</option>
                               <option value="Independence Day">Independence Day</option>
                               <option value="All Saints Day">All Saints Day</option>
                               <option value="All Souls Day">All Souls Day</option>
                               <option value="Immaculate Conception">Immaculate Conception</option>
                               <option value="Christmas Eve">Christmas Eve</option>
                               <option value="Christmas Day">Christmas Day</option>
                               <option value="New Years Eve">New Years Eve</option>
                             </select>
                        </div>
                    </div>
                </div><!----row-->
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> CLOSE</button>
            	<button type="submit" class="btn btn-primary btn-sm" name="submit"><i class="fa fa-save"></i> SUBMIT</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
<!---FOR EDIT---->
<div class="modal fade" id="edit_holiday" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><span class="fa fa-edit"></span> EDIT HOLIDAY </h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
            	<form class="form-horizontal needs-validation" method="POST" action="holiday_edit.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" novalidate>
          		  <div class="row">
                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">DATE <i>Format mm-dd</i></label>
                             <input type="hidden" class="form-control" id="edit_holid" name="id" required>
                            <input type="text" class="form-control" id="edit_blocked_date" placeholder="mm-dd" name="blocked_date" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                       <div class="form-group">
                             <label for="lastname" class="control-label">DESCRIPTION</label>
                             <select class="form-control" id="edit_description" name="blocked_name" required>
                               <option value="" disabled>Select holiday</option>
                               <option value="New Years Day">New Years Day</option>
                               <option value="Maundy Thursday">Maundy Thursday</option>
                               <option value="Good Friday">Good Friday</option>
                               <option value="Black Saturday">Black Saturday</option>
                               <option value="Easter Sunday">Easter Sunday</option>
                               <option value="Labor Day">Labor Day</option>
                               <option value="Independence Day">Independence Day</option>
                               <option value="All Saints Day">All Saints Day</option>
                               <option value="All Souls Day">All Souls Day</option>
                               <option value="Immaculate Conception">Immaculate Conception</option>
                               <option value="Christmas Eve">Christmas Eve</option>
                               <option value="Christmas Day">Christmas Day</option>
                               <option value="New Years Eve">New Years Eve</option>
                             </select>
                        </div>
                    </div>
                    
                </div><!----row-->
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> CLOSE</button>
            	<button type="submit" class="btn btn-primary btn-sm" name="submit"><i class="fa fa-save"></i> SUBMIT</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
<!-- delete functionality removed by request -->


