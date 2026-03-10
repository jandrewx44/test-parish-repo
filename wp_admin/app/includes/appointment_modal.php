<!---FOR ADD---->
<div class="modal fade" id="approved_modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><span class="fa fa-thumbs-up"></span> PLEASE CONFIRM</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
            <form autocomplete="off" class="form-horizontal needs-validation" method="POST" action="appointment_approved.php" enctype="multipart/form-data" novalidate>
          	<div class="modal-body">
            	<input type="text" id="approved_appid" name="APP_ID" required hidden>
              <input type="text" id="approved_return" name="return" hidden>
				<input type="text" id="sms_date" name="sms_date" required hidden>
				<input type="text" id="sms_time" name="sms_time" required hidden>
				<input type="text" id="sms_number" name="sms_number" required hidden>
				<input type="text" id="sms_name" name="sms_name" required hidden>
				<input type="text" id="sms_mobile" name="sms_mobile" required hidden>
				
                  <div class="row">
					 <div class="col-md-12">
						 <div class="form-group">
								<label for="">STATUS</label>
								<select class="form-control select2s" name="APP_STATUS" required>
									<option class="edit_type" value="" selected disabled>- Select Status -</option>
									<option>Approved</option>
									<option>Rejected</option>
								</select>
						 </div>
					 </div>
					 <div class="col-md-12">
						 <div class="form-group">
								<label for="">STATUS</label>
								<textarea rows="8" class="form-control remarks"  name="REMARKS" required></textarea>
						 </div>
					 </div>
				  </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> CLOSE</button>
            	<button type="submit" class="btn btn-primary btn-sm" name="submit"><i class="fa fa-save"></i> SUBMIT</button>
          	</div>
			  </form>
        </div>
    </div>
</div>

<script>
$(function(){
  $('#approved_modal form').on('submit', function(e){
    var form = this;
    if (form.checkValidity() === false) {
      e.preventDefault();
      e.stopPropagation();
      return false;
    }
    e.preventDefault();
    var fd = new FormData(form);
    fd.append('submit','1');
    $.ajax({
      url: form.action,
      type: 'POST',
      dataType: 'json',
      data: fd,
      contentType: false,
      cache: false,
      processData: false,
      success: function(data){
        $('#approved_modal').modal('hide');
        if(data && data.status==='success'){
          Swal.fire({
            title: "SUCCESS!",
            text: "Appointment status updated successfully.",
            icon: "success",
            showConfirmButton: false,
            timer: 1200
          }).then(function(){
            var ret = $('#approved_return').val();
            if (ret && ret.length) {
              window.location.href = ret;
            } else {
              location.reload();
            }
          });
        } else {
          Swal.fire({
            title: "ERROR!",
            text: (data && data.message) ? data.message : "Unable to update appointment.",
            icon: "error",
            showConfirmButton: false,
            timer: 1500
          });
        }
      },
      error: function(){
        Swal.fire({
          title: "ERROR!",
          text: "Unable to update appointment.",
          icon: "error",
          showConfirmButton: false,
          timer: 1500
        });
      }
    });
    return false;
  });
});
</script>

<!---FOR ADD---->
<div class="modal fade" id="delete_modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><span class="fa fa-thumbs-up"></span> PLEASE CONFIRM</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
            <form autocomplete="off" class="form-horizontal needs-validation" method="POST" action="appointment_delete.php" enctype="multipart/form-data" novalidate>
          	<div class="modal-body">
                    <input type="text" id="delete_appid" name="APP_ID" required hidden>
                    <p>Are you sure you want to delete this appointment?</p>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> CLOSE</button>
            	<button type="submit" class="btn btn-primary btn-sm" name="submit"><i class="fa fa-save"></i> SUBMIT</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!---FOR ADD---->
<div class="modal fade" id="rejected_modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><span class="fa fa-thumbs-down"></span> PLEASE CONFIRM</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
            <form autocomplete="off" class="form-horizontal needs-validation" method="POST" action="appointment_reject.php" enctype="multipart/form-data" novalidate>
          	<div class="modal-body">
                    <input type="text" id="appreject_appid" name="APP_ID" required hidden>
                    
                    <div class="col-md-12">
                    <p>Are you sure you want to reject this appointment?</p>
                        <div class="form-group">
                            <label for="">PLEASE ENTER REMARKS </label>
                            <textarea name="REMARKS" class="form-control" rows="8" required></textarea>
                        </div>
                    </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> CLOSE</button>
            	<button type="submit" class="btn btn-primary btn-sm" name="submit"><i class="fa fa-save"></i> SUBMIT</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


<div class="modal fade" id="complete_modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><span class="fa fa-check"></span> MARKED AS COMPLETED</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
            <form autocomplete="off" class="form-horizontal needs-validation" method="POST" action="appointment_complete.php" enctype="multipart/form-data" novalidate>
          	<div class="modal-body">
                    <input type="text" id="appcompleted_appid" name="APP_ID" required hidden>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">PLEASE ENTER REMARKS </label>
                            <textarea name="REMARKS" class="form-control" rows="8" required></textarea>
                        </div>
                    </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> CLOSE</button>
            	<button type="submit" class="btn btn-primary btn-sm" name="submit"><i class="fa fa-save"></i> SUBMIT</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
