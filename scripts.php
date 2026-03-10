  <br><br>
  <footer class="footer mt-auto py-3">
    <div class="container">
    <div class="float-right d-none d-sm-block" >
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2024 <a href="https://www.facebook.com/profile.php?id=61574859879807">St.Philip Benizi and Students</a>.</strong> All rights reserved.
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="wp_admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="wp_admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>


<!-- Bootstrap 4 -->
<script src="wp_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="wp_admin/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<script src="wp_admin/plugins/select2/js/select2.full.min.js"></script>
<!-- ChartJS -->
<script src="wp_admin/plugins/chart.js/Chart.min.js"></script>
<script src="wp_admin/plugins/sweetalert2/sweetalert2.min.js"></script>

<script src="wp_admin/plugins/toastr/toastr.min.js"></script>
<!-- Sparkline -->
<script src="wp_admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="wp_admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="wp_admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="wp_admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="wp_admin/plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="wp_admin/plugins/moment/moment.min.js"></script>
<script src="wp_admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="wp_admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="wp_admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="wp_admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="wp_admin/plugins/fullcalendar/lib/main.min.js"></script>
<!-- AdminLTE App -->
<script src="wp_admin/dist/js/adminlte.js"></script>

<script src="wp_admin/dist/js/pages/dashboard.js"></script>
<script src="wp_admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<script>
  $(function () {
  $('[data-jario="tooltip"]').tooltip()
})
</script>
  <script type="text/javascript">  
        $.ajax({
            url:"calendar.php",
            type:"POST",
            data: { 'month':'<?=date('m');?>','year':'<?=date('Y');?>'},
            success:function(data){
                $("#calendar").html(data);
            }
        });
        $(document).on('click','.changemonth',function(){
            $.ajax({
                url:"calendar.php",
                type:"POST",
                data: {'month':$(this).data('month'),'year':$(this).data('year')},
                success:function(data){
                    $("#calendar").html(data);
                }
            });
        });
        $(document).on('change','#office_select',function(){
            $.ajax({
                url:"calendar.php",
                type:"POST",
                data: { 'month':$('#current_month').data('month'),'year':$('#current_month').data('year')},
                success:function(data){
                    $("#calendar").html(data);
                }
            });
        });
    </script>
  <script type="text/javascript">  
   function bookDate(self) {
      var sdate = self.getAttribute("data-sdate");
	  var dataddd = self.getAttribute("data-ddd");
      document.getElementById("sdate").value = sdate;
	  document.getElementById("dataddd").innerHTML = dataddd;
        $.ajax({
            url:"calendar_slots.php",
            type:"POST",
            data: "sdate=" + $('#sdate').val(),
            success:function(data){
                $(".list_time").html(data);
                $(".select_time_now").hide();
                $("#dataddd").show();
                $(".list_time").fadeIn();
				$("#registerform").fadeOut();
            },
            error: function() {
                alert('Error occurs!');
            }
        });
  }
</script>

<script type="text/javascript">   
    $("#link2").click(function(){
    if( $("#termsCheckbox").is(':checked') ){
      
    }else {
      event.preventDefault();
    }
    console.log("link2");

  });

  $("#next").click(function(){

    if (!$("input[name='SELECTED_TIME']:checked").val()) {
         $(function() {
        $(document).Toasts('create', {
        class: 'bg-danger',
        title: 'Warning',
        autohide: true,
        delay: 3000,
        body: 'Please select available time to proceed appointment'
      })
      });
        return false;
    }else {
      event.preventDefault();
        $("#registerform").slideToggle();
		
		
    }

  });
</script>
<script>
   function getTime(self) {
      var stime=self.getAttribute("data-stime");
      document.getElementById("stime").value = stime;
	  $("#registerform").fadeIn();
  }
</script>
<script type="text/javascript">
 // Bootstrap 4 Validation
 $(".needs-validation").submit(function () {
    var form = $(this);
    if (form[0].checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }else{
      //$("#LoadingImage").show();
            $.ajax({
                url:"calendar_process.php",
                type:"POST",
                data:  new FormData(this),
        contentType: false,
        	    cache: false,
    			processData: false,
          beforeSend : function(){
            //$('#LoadingImage').show();
          },
                success:function(data){
                    $("#success_message").html(data);
                    $('input[type="text"], input[type="file"], input[type="date"], input[type="email"], input[type="radio"], select').val('');
                    $(".list_time").fadeOut();
                    $("#dataddd").fadeOut();
                    $("#registerform").fadeOut();
                    $(".select_time_now").fadeIn(300);
                  },
                error: function(data){
                    console.log("error");
                    console.log(data);
                  }
            });
			// to prevent refreshing the whole page page
			return false;
        
    }
    form.addClass("was-validated");
  });
</script>
<script>
    function disableButton() {
         $('#disabled').prop('disabled', true);
 setTimeout(function() {
       $('#disabled').prop('disabled', false);
         
 }, 5000);
    }
</script>

<script>
  $('.select2').select2({
      theme: 'bootstrap4'
    })
</script>
<script type="text/javascript">   
  $("#link").click(function(){
      Swal.fire({
        icon: "info",
        title:"TERMS AND CONDITIONS",
        text: "By continuing this application, I agree that my personal info can be used for the NORSU Bais Campus Appointment Scheduling System. I understand that this means I'm giving up some privacy rights regarding how my info is used, based on the rules in the NORSU Bais Appointment and Scheduling System Website and other relevant regulations.",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Agree"
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "register_form.php?register_form";
        }
      });
    console.log("link2");

  });
</script>


<script type="text/javascript">
 // Bootstrap 4 Validation
 $(".view_form").submit(function () {
    var form = $(this);
    if (form[0].checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }else{
            $.ajax({
                url:"view_form_process.php",
                type:"POST",
                data:  new FormData(this),
        contentType: false,
        	    cache: false,
    			processData: false,
                success:function(data){
                    $("#view_form").html(data);
                    //$("#view_form_modal").modal("show");
                },
                error: function(data){
                    console.log("error");
                    console.log(data);
                  }
            });
			// to prevent refreshing the whole page page
			return false;
        
    }
    form.addClass("was-validated");
  });
</script>

<script type="text/javascript">
    $(document).ready(function()
    {
        $('#DATE_OF_BIRTH').change(function()
        {
            console.log("change");
            var dob = new Date(document.getElementById('DATE_OF_BIRTH').value);
            var today = new Date();
            var age = Math.floor((today-dob)/(365.25*24*60*60*1000));
            document.getElementById('AGE').value = age;
        });
    });
</script>
