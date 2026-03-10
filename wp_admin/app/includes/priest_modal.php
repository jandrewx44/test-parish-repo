<!---FOR ADD---->
<div class="modal fade" id="add_priest" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><span class="fa fa-plus"></span> PRIEST</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
      <form class="form-horizontal needs-validation" method="POST" action="priest_add.php" novalidate>
          	<div class="modal-body text-uppercase">
          		  <div class="row">

                    <div class="col-lg-12">
                    <div class="form-group">
                      <label for="" class="control-label font-weight-normal">NAME</label>
                      <input type="text"  class="form-control text-uppercase" name="PRIEST_NAME" placeholder="" required>
                    </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="form-group">
                      <label for="" class="control-label font-weight-normal">DEFAULT</label>
                        <select style="width:100%" class="form-control" name="PRIEST_DEFAULT" required>
                          <option value=""></option>
                          <option>YES</option>
                          <option>NO</option>
                        </select>
                    </div>
                    </div>

                  <br>
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
<div class="modal fade" id="editPriest" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><span class="fa fa-plus"></span> PRIEST</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
      <form class="form-horizontal needs-validation" method="POST" action="priest_edit.php" novalidate>
          	<div class="modal-body text-uppercase">
          		  <div class="row">

                <div class="col-lg-12">
                    <div class="form-group">
                      <label for="" class="control-label font-weight-normal">NAME</label>
                      <input type="hidden"  class="form-control edit_pid" name="PRIEST_ID" placeholder="" required>
                      <input type="text"  class="form-control edit_pname text-uppercase" name="PRIEST_NAME" placeholder="" required>
                    </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="form-group">
                      <label for="" class="control-label font-weight-normal">DEFAULT</label>
                        <select style="width:100%" class="form-control" name="PRIEST_DEFAULT" required>
                          <option class="edit_pdefault"></option>
                          <option>YES</option>
                          <option>NO</option>
                        </select>
                    </div>
                    </div>

                  <br>

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
<!---FOR DELETE---->
<div class="modal fade" id="del_modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><span class="fa fa-trash-alt"></span> PLEASE CONFIRM</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="priest_delete.php" method="POST">
            <div class="modal-body text-center">
               
                 <input type="hidden" id="del_pid" name="PRIEST_ID">
                 <strong> Are you sure you want to delete this record?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> CANCEL</button>
                <button type="submit" name="submit" class="btn btn-danger btn-sm"> <span class="fa fa-trash"></span>  SUBMIT</button>
            </div>
            </form>
        </div>
    </div>
</div>

