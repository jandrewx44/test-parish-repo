<script>
$(document).ready(function () {     
$('select[name="UNDERSIGNED"]').change(function(){
	
   var REG_NO = $('option:selected', this).attr('REG_NO');
   $(".REG_NO").val(REG_NO);
   
   var PAGE_NO = $('option:selected', this).attr('PAGE_NO');
   $(".PAGE_NO").val(PAGE_NO);
   
   var RESIDING = $('option:selected', this).attr('RESIDING');
   $(".RESIDING").val(RESIDING);
   
   var SERIES_OF = $('option:selected', this).attr('SERIES_OF');
   $(".SERIES_OF").val(SERIES_OF);
   
   var CHILD_NAME = $('option:selected', this).attr('CHILD_NAME');
   $(".CHILD_NAME").val(CHILD_NAME);
   
   var PLACE_OF_BIRTH = $('option:selected', this).attr('PLACE_OF_BIRTH');
   $(".PLACE_OF_BIRTH").val(PLACE_OF_BIRTH);
   
   var DATE_OF_BIRTH = $('option:selected', this).attr('DATE_OF_BIRTH');
   $(".DATE_OF_BIRTH").val(DATE_OF_BIRTH);
   
   var FATHER_NAME = $('option:selected', this).attr('FATHER_NAME');
   $(".FATHER_NAME").val(FATHER_NAME);
   
   var MOTHER_NAME = $('option:selected', this).attr('MOTHER_NAME');
   $(".MOTHER_NAME").val(MOTHER_NAME);
   
   var LIST_OF_SPONSORS = $('option:selected', this).attr('LIST_OF_SPONSORS');
   $(".LIST_OF_SPONSORS").val(LIST_OF_SPONSORS);
  
});
});
</script>

<script>
$(document).ready(function () {     
$('select[name="UNDERSIGNEDD"]').change(function(){
	
   var REG_NO = $('option:selected', this).attr('REG_NOD');
   $(".REG_NOD").val(REG_NO);
   
   var PAGE_NO = $('option:selected', this).attr('PAGE_NOD');
   $(".PAGE_NOD").val(PAGE_NO);
   
   var RESIDING = $('option:selected', this).attr('RESIDINGD');
   $(".RESIDINGD").val(RESIDING);
   
   var SERIES_OF = $('option:selected', this).attr('SERIES_OFD');
   $(".SERIES_OFD").val(SERIES_OF);
   
   var CHILD_NAME = $('option:selected', this).attr('CHILD_NAMED');
   $(".CHILD_NAMED").val(CHILD_NAME);
   
   var PLACE_OF_BIRTH = $('option:selected', this).attr('PLACE_OF_BIRTHD');
   $(".PLACE_OF_BIRTHD").val(PLACE_OF_BIRTH);
   
   var DATE_OF_BIRTH = $('option:selected', this).attr('DATE_OF_BIRTHD');
   $(".DATE_OF_BIRTHD").val(DATE_OF_BIRTH);
   
   var FATHER_NAME = $('option:selected', this).attr('FATHER_NAMED');
   $(".FATHER_NAMED").val(FATHER_NAME);
   
   var MOTHER_NAME = $('option:selected', this).attr('MOTHER_NAMED');
   $(".MOTHER_NAMED").val(MOTHER_NAME);
   
   var LIST_OF_SPONSORS = $('option:selected', this).attr('LIST_OF_SPONSORSD');
   $(".LIST_OF_SPONSORSD").val(LIST_OF_SPONSORS);
  
});
});
</script>

<script>
$(document).ready(function () {     
$('select[name="GET_GROOM"]').change(function(){
	
   var GROOM_ADDRESS = $('option:selected', this).attr('GROOM_ADDRESS');
   $(".GROOM_ADDRESS").val(GROOM_ADDRESS);
   
   var GROOM= $('option:selected', this).attr('GROOM');
   $(".GROOM").val(GROOM);
   $(".find_groom").modal("hide");
});
});
</script>

<script>
$(document).ready(function () {     
$('select[name="GET_BRIDE"]').change(function(){
	
   var BRIDE_ADDRESS = $('option:selected', this).attr('BRIDE_ADDRESS');
   $(".BRIDE_ADDRESS").val(BRIDE_ADDRESS);
   
   var BRIDE= $('option:selected', this).attr('BRIDE');
   $(".BRIDE").val(BRIDE);
   $(".find_bride").modal("hide");
});
});
</script>

<script>
$(document).ready(function () {     
$('select[name="PICK_NAME"]').change(function(){
	
   var PICK_NAME= $('option:selected', this).attr('PICK_NAME');
   $(".PICK_NAME").val(PICK_NAME);
   $(".REQUEST_FOR_PARTIAL").modal("hide");
});
});
</script>

<script>
$(document).ready(function () {     
$('select[name="PICK_NAME_OF"]').change(function(){
	
   var PICK_NAME_OF= $('option:selected', this).attr('PICK_NAME_OF');
   $(".PICK_NAME_OF").val(PICK_NAME_OF);
   $(".REQUEST_FOR_PARTIAL_").modal("hide");
});
});
</script>

<script>
$(document).ready(function () {     
$('select[name="PICK_JORDAN"]').change(function(){
	
   var PICK_JORDAN= $('option:selected', this).attr('PICK_JORDAN');
   $(".PICK_JORDAN").val(PICK_JORDAN);
   $(".select_jordan").modal("hide");
});
});
</script>

<script>
$(document).ready(function () {     
$('select[name="PICK_JORDAN"]').change(function(){
	
   var PICK_JORDAN= $('option:selected', this).attr('PICK_JORDAN');
   $(".PICK_JORDAN").val(PICK_JORDAN);
   $(".select_jordan").modal("hide");
});
});
</script>

<script>
$(document).ready(function () {     
$('select[name="PICK_BAPTISM_NAME"]').change(function(){
	
   var PICK_BAPTISM_NAME= $('option:selected', this).attr('PICK_BAPTISM_NAME');
   $(".PICK_BAPTISM_NAME").val(PICK_BAPTISM_NAME);
   var PICK_BAPTISM_DOB= $('option:selected', this).attr('PICK_BAPTISM_DOB');
   $(".PICK_BAPTISM_DOB").val(PICK_BAPTISM_DOB);
   var PICK_BAPTISM_POB= $('option:selected', this).attr('PICK_BAPTISM_POB');
   $(".PICK_BAPTISM_POB").val(PICK_BAPTISM_POB);
   var PICK_BAPTISM_FATHER= $('option:selected', this).attr('PICK_BAPTISM_FATHER');
   $(".PICK_BAPTISM_FATHER").val(PICK_BAPTISM_FATHER);
   var PICK_BAPTISM_MOTHER= $('option:selected', this).attr('PICK_BAPTISM_MOTHER');
   $(".PICK_BAPTISM_MOTHER").val(PICK_BAPTISM_MOTHER);
   var PICK_BAPTISM_PARENTS_ADDRESS= $('option:selected', this).attr('PICK_BAPTISM_PARENTS_ADDRESS');
   $(".PICK_BAPTISM_PARENTS_ADDRESS").val(PICK_BAPTISM_PARENTS_ADDRESS);
   var PICK_BAPTISM_CHURCH_NAME= $('option:selected', this).attr('PICK_BAPTISM_CHURCH_NAME');
   $(".PICK_BAPTISM_CHURCH_NAME").val(PICK_BAPTISM_CHURCH_NAME);
   var PICK_BAPTISM_CHURCH_ADDRESS= $('option:selected', this).attr('PICK_BAPTISM_CHURCH_ADDRESS');
   $(".PICK_BAPTISM_CHURCH_ADDRESS").val(PICK_BAPTISM_CHURCH_ADDRESS);
   var PICK_BAPTISM_DOB_BAPTISM= $('option:selected', this).attr('PICK_BAPTISM_DOB_BAPTISM');
   $(".PICK_BAPTISM_DOB_BAPTISM").val(PICK_BAPTISM_DOB_BAPTISM);
   var PICK_BAPTISM_BAPTIZED_BY= $('option:selected', this).attr('PICK_BAPTISM_BAPTIZED_BY');
   $(".PICK_BAPTISM_BAPTIZED_BY").val(PICK_BAPTISM_BAPTIZED_BY);
   var PICK_BAPTISM_SPONSORS= $('option:selected', this).attr('PICK_BAPTISM_SPONSORS');
   $(".PICK_BAPTISM_SPONSORS").val(PICK_BAPTISM_SPONSORS);
   var PICK_BAPTISM_NOTATIONS= $('option:selected', this).attr('PICK_BAPTISM_NOTATIONS');
   $(".PICK_BAPTISM_NOTATIONS").val(PICK_BAPTISM_NOTATIONS);
   var PICK_BAPTISM_BOOK_NO= $('option:selected', this).attr('PICK_BAPTISM_BOOK_NO');
   $(".PICK_BAPTISM_BOOK_NO").val(PICK_BAPTISM_BOOK_NO);
   var PICK_BAPTISM_PAGE_NO= $('option:selected', this).attr('PICK_BAPTISM_PAGE_NO');
   $(".PICK_BAPTISM_PAGE_NO").val(PICK_BAPTISM_PAGE_NO);
   var PICK_BAPTISM_REG_NO= $('option:selected', this).attr('PICK_BAPTISM_REG_NO');
   $(".PICK_BAPTISM_REG_NO").val(PICK_BAPTISM_REG_NO);
   $(".select_name_baptism").modal("hide");
});
});
</script>

<script>
$(document).ready(function () {     
$('select[name="SELECT_CONFIRM_NAME"]').change(function(){
	
   var PICK_CONFIRM_NAME= $('option:selected', this).attr('PICK_CONFIRM_NAME');
   $(".PICK_CONFIRM_NAME").val(PICK_CONFIRM_NAME);

   var PICK_CONFIRM_DOB_BAPTISM= $('option:selected', this).attr('PICK_CONFIRM_DOB_BAPTISM');
   $(".PICK_CONFIRM_DOB_BAPTISM").val(PICK_CONFIRM_DOB_BAPTISM);

   var PICK_CONFIRM_PLACE_OF_BAPTISM= $('option:selected', this).attr('PICK_CONFIRM_PLACE_OF_BAPTISM');
   $(".PICK_CONFIRM_PLACE_OF_BAPTISM").val(PICK_CONFIRM_PLACE_OF_BAPTISM);

   var PICK_CONFIRM_FATHER= $('option:selected', this).attr('PICK_CONFIRM_FATHER');
   $(".PICK_CONFIRM_FATHER").val(PICK_CONFIRM_FATHER);

   var PICK_CONFIRM_MOTHER= $('option:selected', this).attr('PICK_CONFIRM_MOTHER');
   $(".PICK_CONFIRM_MOTHER").val(PICK_CONFIRM_MOTHER);

   var PICK_CONFIRM_PARENTS_ADDRESS= $('option:selected', this).attr('PICK_CONFIRM_PARENTS_ADDRESS');
   $(".PICK_CONFIRM_PARENTS_ADDRESS").val(PICK_CONFIRM_PARENTS_ADDRESS);

   var PICK_CONFIRM_CONFIRMED_DATE= $('option:selected', this).attr('PICK_CONFIRM_CONFIRMED_DATE');
   $(".PICK_CONFIRM_CONFIRMED_DATE").val(PICK_CONFIRM_CONFIRMED_DATE);

   var PICK_CONFIRM_CONFIRMED_BY= $('option:selected', this).attr('PICK_CONFIRM_CONFIRMED_BY');
   $(".PICK_CONFIRM_CONFIRMED_BY").val(PICK_CONFIRM_CONFIRMED_BY);

   var PICK_CONFIRM_SPONSORS= $('option:selected', this).attr('PICK_CONFIRM_SPONSORS');
   $(".PICK_CONFIRM_SPONSORS").val(PICK_CONFIRM_SPONSORS);

   var PICK_CONFIRM_NOTATIONS= $('option:selected', this).attr('PICK_CONFIRM_NOTATIONS');
   $(".PICK_CONFIRM_NOTATIONS").val(PICK_CONFIRM_NOTATIONS);

   var PICK_CONFIRM_BOOK_NO= $('option:selected', this).attr('PICK_CONFIRM_BOOK_NO');
   $(".PICK_CONFIRM_BOOK_NO").val(PICK_CONFIRM_BOOK_NO);

   var PICK_CONFIRM_PAGE_NO= $('option:selected', this).attr('PICK_CONFIRM_PAGE_NO');
   $(".PICK_CONFIRM_PAGE_NO").val(PICK_CONFIRM_PAGE_NO);

   var PICK_CONFIRM_REG_NO= $('option:selected', this).attr('PICK_CONFIRM_REG_NO');
   $(".PICK_CONFIRM_REG_NO").val(PICK_CONFIRM_REG_NO);
   $(".select_name_confirm").modal("hide");
});
});
</script>


<script>
$(document).ready(function () {     
$('select[name="MARRIAGE_GET_GROOM"]').change(function(){
	
   var GROOM_NAME= $('option:selected', this).attr('GROOM_NAME');
   $(".GROOM_NAME").val(GROOM_NAME);

   var GROOM_RESIDENCE= $('option:selected', this).attr('GROOM_RESIDENCE');
   $(".GROOM_RESIDENCE").val(GROOM_RESIDENCE);

   var GROOM_FATHER= $('option:selected', this).attr('GROOM_FATHER');
   $(".GROOM_FATHER").val(GROOM_FATHER);

   var GROOM_MOTHER= $('option:selected', this).attr('GROOM_MOTHER');
   $(".GROOM_MOTHER").val(GROOM_MOTHER);

   $(".find_groom_marriage").modal("hide");
});
});
</script>

<script>
$(document).ready(function () {     
$('select[name="MARRIAGE_GET_BRIDE"]').change(function(){
	
   var BRIDE_NAME= $('option:selected', this).attr('BRIDE_NAME');
   $(".BRIDE_NAME").val(BRIDE_NAME);

   var BRIDE_RESIDENCE= $('option:selected', this).attr('BRIDE_RESIDENCE');
   $(".BRIDE_RESIDENCE").val(BRIDE_RESIDENCE);

   var BRIDE_FATHER= $('option:selected', this).attr('BRIDE_FATHER');
   $(".BRIDE_FATHER").val(BRIDE_FATHER);

   var BRIDE_MOTHER= $('option:selected', this).attr('BRIDE_MOTHER');
   $(".BRIDE_MOTHER").val(BRIDE_MOTHER);

   $(".find_bride_marriage").modal("hide");
});
});
</script>