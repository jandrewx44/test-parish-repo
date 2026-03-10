
<div class="modal fade" id="baptism_no_correction" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-print-magnifying-glass"></i></span>WITHOUT CORRECTIONS</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="baptismal-nocorrection-form.php" enctype="multipart/form-data">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
					  <select name="ID" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2" required>
								<option selected value="">-SELECT NAME-</option>
								<?php
									$sql ="SELECT * FROM tbl_baptismal ORDER BY CHILD_NAME ASC";
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
            	<button type="submit" class="btn bg-gradient-maroon btn-sm" name="submit"><i class="fa fa-solid fa-magnifying-glass"></i> SEARCH</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


<div class="modal fade" id="baptism_has_correction" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-print-magnifying-glass"></i></span>WITH CORRECTIONS</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="baptismal-hascorrection-form.php" enctype="multipart/form-data">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
					  <select name="AUTONUM" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2" required>
								<option selected value="">-SELECT NAME-</option>
								<?php
									$sql ="SELECT * FROM tbl_baptismal_changes bcp INNER JOIN tbl_baptismal bp ON bcp.UNDERSIGNED=bp.ID ORDER BY bp.CHILD_NAME ASC";
									$smt = $conn->query($sql);
									if($smt->num_rows >0){
										while($smt_row =$smt->fetch_assoc()){
											$child =ucwords(strtoupper($smt_row['CHILD_NAME']));
									?>
									 <option value="<?=$smt_row['AUTONUM'];?>"><?=$child;?></option>
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


<div class="modal fade" id="baptism_correction" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-print-magnifying-glass"></i></span>LIST OF CORRECTIONS</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="GET" action="baptismal-changes-own-pdf-print.php" enctype="multipart/form-data">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
						<select name="AUTONUM" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2" required>
								<option selected value="">-SELECT NAME-</option>
								<?php
									$sql ="SELECT * FROM tbl_baptismal_changes bcp INNER JOIN tbl_baptismal bp ON bcp.UNDERSIGNED=bp.ID ORDER BY bp.CHILD_NAME ASC";
									$smt = $conn->query($sql);
									if($smt->num_rows >0){
										while($smt_row =$smt->fetch_assoc()){
											$child =ucwords(strtoupper($smt_row['CHILD_NAME']));
									?>
									 <option value="<?=$smt_row['AUTONUM'];?>"><?=$child;?></option>
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

<!------ AFFIDAVIT FOR PARTIAL CHANGES IN THE BAPTISMAL----------->

<div class="modal fade" id="baptism_other_person_correction" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-print-magnifying-glass"></i></span>LIST OF CORRECTIONS</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="GET" action="baptismal-changes-otherperson-pdf-print.php" enctype="multipart/form-data">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
					<select name="AUTONUM" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2" required>
						<option selected value="">-SELECT NAME-</option>
						<?php
                            $sql ="SELECT * FROM tbl_baptismal_otherperson bcp INNER JOIN tbl_baptismal bp ON bcp.UNDERSIGNED=bp.ID";
                            $query = $conn->query($sql);
                            while($row =$query->fetch_assoc()){
                          ?>
                        	<option value="<?=$row['AUTONUM'];?>"><?=$row['CHILD_NAME'];?></option>
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

<div class="modal fade" id="baptism_hasother_correction" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-print-magnifying-glass"></i></span>WITH CORRECTIONS OF THER PERSON</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="GET" action="baptismal-changes-otherperson-pdf-corrected.php" enctype="multipart/form-data">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
					<select name="AUTONUM" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2" required>
						<option selected value="">-SELECT NAME-</option>
						<?php
                            $sql ="SELECT * FROM tbl_baptismal_otherperson bcp INNER JOIN tbl_baptismal bp ON bcp.UNDERSIGNED=bp.ID";
                            $query = $conn->query($sql);
                            while($row =$query->fetch_assoc()){
                          ?>
                        	<option value="<?=$row['AUTONUM'];?>"><?=$row['CHILD_NAME'];?></option>
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


<!------SEARCH REQUEST------->

<div class="modal fade" id="find_request" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-print-magnifying-glass"></i></span>SEARCH REQUEST</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="GET" action="baptism_letter_of_request-pdf-print.php" enctype="multipart/form-data">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
					<select name="AUTONUM" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2" required>
						<option selected value="">-SELECT NAME-</option>
						<?php
                            $sql ="SELECT * FROM tbl_baptismal_letter_request";
                            $query = $conn->query($sql);
                            while($row =$query->fetch_assoc()){
                          ?>
                        	<option value="<?=$row['AUTONUM'];?>"><?=ucwords(strtoupper($row['MY_NAME']));?></option>
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


<!------SEARCH GROOM BRIDE------->

<div class="modal fade find_groom" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-magnifying-glass"></i></span>SEARCH GROOM </h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
						<select name="GET_GROOM" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2">
								<option selected>-select name-</option>
								<?php
									$groom ="SELECT * FROM tbl_baptismal WHERE `GENDER`='Male' ORDER BY CHILD_NAME ASC";
									$groom_run = $conn->query($groom);
									if($groom_run->num_rows >0){
										while($groom_row =$groom_run->fetch_assoc()){
											$GROOM =ucwords(strtolower($groom_row['CHILD_NAME']));

									?>
									 
									 <option 
										 GROOM_ADDRESS="<?=ucwords(strtolower($groom_row['PERMANENT_ADDRESS'])); ?>"
										 GROOM="<?=ucwords(strtolower($groom_row['CHILD_NAME'])); ?>"
									 value="<?=$GROOM;?>"><?=$GROOM;?></option>
										<?php } }else{ ?>
									<option>No record </option>
									<?php } ?>
							</select>
                  	</div>
                </div>
                </div><!----row-->
          	</div>
          	<div class="modal-footer">
            	
          	</div>
        </div>
    </div>
</div>


<div class="modal fade find_bride" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-magnifying-glass"></i></span>SEARCH BRIDE </h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
						<select name="GET_BRIDE" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2">
								<option selected>-select name-</option>
								<?php
									$bride ="SELECT * FROM tbl_baptismal WHERE `GENDER`='FeMale' ORDER BY CHILD_NAME ASC";
									$bride_run = $conn->query($bride);
									if($bride_run->num_rows >0){
										while($bride_row =$bride_run->fetch_assoc()){
											$BRIDE =ucwords(strtolower($bride_row['CHILD_NAME']));

									?>
									 
									 <option 
										 BRIDE_ADDRESS="<?=ucwords(strtolower($bride_row['PERMANENT_ADDRESS'])); ?>"
										 BRIDE="<?=ucwords(strtolower($bride_row['CHILD_NAME'])); ?>"
									 value="<?=$BRIDE;?>"><?=$BRIDE;?></option>
										<?php } }else{ ?>
									<option>No record </option>
									<?php } ?>
							</select>
                  	</div>
                </div>
                </div><!----row-->
          	</div>
          	<div class="modal-footer">
            	
          	</div>
        </div>
    </div>
</div>


<!-------AFFIDAVIT LETTER OF REQUEST FOR PARTIAL CHANGES------------>

<div class="modal fade REQUEST_FOR_PARTIAL" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-magnifying-glass"></i></span> PICK A NAME</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
						<select name="PICK_NAME" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2">
								<option selected>-select name-</option>
								<?php
									$bride ="SELECT * FROM tbl_baptismal ORDER BY CHILD_NAME ASC";
									$bride_run = $conn->query($bride);
									if($bride_run->num_rows >0){
										while($bride_row =$bride_run->fetch_assoc()){
											$PICK_NAME =ucwords(strtolower($bride_row['CHILD_NAME']));

									?>
									 
									 <option 
									 	PICK_NAME="<?=ucwords(strtolower($bride_row['CHILD_NAME'])); ?>"
									 	value="<?=$PICK_NAME;?>"><?=$PICK_NAME;?></option>
										<?php } }else{ ?>
									<option>No record </option>
									<?php } ?>
							</select>
                  	</div>
                </div>
                </div><!----row-->
          	</div>
          	<div class="modal-footer">
            	
          	</div>
        </div>
    </div>
</div>

<div class="modal fade REQUEST_FOR_PARTIAL_" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-magnifying-glass"></i></span> PICK A NAME</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
						<select name="PICK_NAME_OF" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2">
								<option selected>-select name-</option>
								<?php
									$bride ="SELECT * FROM tbl_baptismal ORDER BY CHILD_NAME ASC";
									$bride_run = $conn->query($bride);
									if($bride_run->num_rows >0){
										while($bride_row =$bride_run->fetch_assoc()){
											$PICK_NAME_OF =ucwords(strtolower($bride_row['CHILD_NAME']));

									?>
									 
									 <option 
									 PICK_NAME_OF="<?=ucwords(strtolower($bride_row['CHILD_NAME'])); ?>"
									 	value="<?=$PICK_NAME_OF;?>"><?=$PICK_NAME_OF;?></option>
										<?php } }else{ ?>
									<option>No record </option>
									<?php } ?>
							</select>
                  	</div>
                </div>
                </div><!----row-->
          	</div>
          	<div class="modal-footer">
            	
          	</div>
        </div>
    </div>
</div>

<!-------------JORDAN------->


<div class="modal fade select_jordan" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-magnifying-glass"></i></span> PICK A NAME</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
						<select name="PICK_JORDAN" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2">
								<option selected>-select name-</option>
								<?php
									$bride ="SELECT * FROM tbl_baptismal ORDER BY CHILD_NAME ASC";
									$bride_run = $conn->query($bride);
									if($bride_run->num_rows >0){
										while($bride_row =$bride_run->fetch_assoc()){
											$PICK_JORDAN =ucwords(strtolower($bride_row['CHILD_NAME']));

									?>
									 
									 <option 
									 	PICK_JORDAN="<?=ucwords(strtolower($bride_row['CHILD_NAME'])); ?>"
									 	value="<?=$PICK_JORDAN;?>"><?=$PICK_JORDAN;?></option>
										<?php } }else{ ?>
									<option>No record </option>
									<?php } ?>
							</select>
                  	</div>
                </div>
                </div><!----row-->
          	</div>
          	<div class="modal-footer">
            	
          	</div>
        </div>
    </div>
</div>

<!-------------BAPTISM CERTIFICATION------->


<div class="modal fade select_name_baptism" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-magnifying-glass"></i></span> PICK A NAME</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
						<select name="PICK_BAPTISM_NAME" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2">
								<option selected>-select name-</option>
								<?php
									$bride ="SELECT * FROM tbl_baptismal ORDER BY CHILD_NAME ASC";
									$bride_run = $conn->query($bride);
									if($bride_run->num_rows >0){
										while($baptism_row =$bride_run->fetch_assoc()){
											$PICK_BAPTISM_NAME =ucwords(strtolower($baptism_row['CHILD_NAME']));
									?>
									 <option 
									 PICK_BAPTISM_NAME="<?=ucwords(strtolower($baptism_row['CHILD_NAME'])); ?>"
									 PICK_BAPTISM_DOB="<?=ucwords(strtolower($baptism_row['DATE_OF_BIRTH'])); ?>"
									 PICK_BAPTISM_POB="<?=strip_tags(ucwords(strtolower($baptism_row['PLACE_OF_BIRTH']))); ?>"
									 PICK_BAPTISM_FATHER="<?=ucwords(strtolower($baptism_row['FATHER_NAME'])); ?>"
									 PICK_BAPTISM_MOTHER="<?=ucwords(strtolower($baptism_row['MOTHER_NAME'])); ?>"
									 PICK_BAPTISM_PARENTS_ADDRESS="<?=strip_tags(ucwords(strtolower($baptism_row['PERMANENT_ADDRESS']))); ?>"
									 PICK_BAPTISM_CHURCH_NAME="<?=ucwords(strtolower($baptism_row['NAME_OF_CHURCH'])); ?>"
									 PICK_BAPTISM_CHURCH_ADDRESS="<?=strip_tags(ucwords(strtolower($baptism_row['PLACE_OF_BAPTISM']))); ?>"
									 PICK_BAPTISM_DOB_BAPTISM="<?=ucwords(strtolower($baptism_row['DATE_OF_BAPTISM'])); ?>"
									 PICK_BAPTISM_BAPTIZED_BY="<?=ucwords(strtolower($baptism_row['NAME_OF_PRIEST'])); ?>"
									 PICK_BAPTISM_SPONSORS="<?=strip_tags(ucwords(strtolower($baptism_row['LIST_OF_SPONSORS']))); ?>"
									 PICK_BAPTISM_NOTATIONS="<?=strip_tags(ucwords(strtolower($baptism_row['NOTATIONS']))); ?>"
									 PICK_BAPTISM_BOOK_NO="<?=ucwords(strtolower($baptism_row['BOOK_NO'])); ?>"
									 PICK_BAPTISM_PAGE_NO="<?=ucwords(strtolower($baptism_row['PAGE_NO'])); ?>"
									 PICK_BAPTISM_REG_NO="<?=ucwords(strtolower($baptism_row['REG_NO'])); ?>"
									 	value="<?=$PICK_BAPTISM_NAME;?>"><?=$PICK_BAPTISM_NAME;?></option>
										<?php } }else{ ?>
									<option>No record </option>
									<?php } ?>
							</select>
                  	</div>
                </div>
                </div><!----row-->
          	</div>
          	<div class="modal-footer">
            	
          	</div>
        </div>
    </div>
</div>


<!-------------CONFIRMATION CERTIFICATION------->


<div class="modal fade select_name_confirm" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-magnifying-glass"></i></span> PICK A NAME</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
						<select name="SELECT_CONFIRM_NAME" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2">
								<option selected>-select name-</option>
								<?php
									$bride ="SELECT * FROM tbl_confirmation ORDER BY CHILD_NAME ASC";
									$bride_run = $conn->query($bride);
									if($bride_run->num_rows >0){
										while($con_row =$bride_run->fetch_assoc()){
											$PICK_CONFIRM_NAME =ucwords(strtolower($con_row['CHILD_NAME']));
									?>
									 <option 
									 PICK_CONFIRM_NAME="<?=ucwords(strtolower($con_row['CHILD_NAME'])); ?>"
									 PICK_CONFIRM_DOB_BAPTISM="<?=ucwords(strtolower($con_row['DATE_OF_BAPTISM'])); ?>"
									 PICK_CONFIRM_PLACE_OF_BAPTISM="<?=strip_tags(ucwords(strtolower($con_row['PLACE_OF_BAPTISM']))); ?>"
									 PICK_CONFIRM_FATHER="<?=ucwords(strtolower($con_row['FATHER_NAME'])); ?>"
									 PICK_CONFIRM_MOTHER="<?=ucwords(strtolower($con_row['MOTHER_NAME'])); ?>"
									 PICK_CONFIRM_PARENTS_ADDRESS="<?=strip_tags(ucwords(strtolower($con_row['RESIDENT_OF']))); ?>"
									 PICK_CONFIRM_CONFIRMED_DATE="<?=ucwords(strtolower($con_row['DATE_CONFIRMED'])); ?>"
									 PICK_CONFIRM_CONFIRMED_BY="<?=ucwords(strtolower($con_row['NAME_OF_PRIEST'])); ?>"
									 PICK_CONFIRM_SPONSORS="<?=strip_tags(ucwords(strtolower($con_row['LIST_OF_SPONSORS']))); ?>"
									 PICK_CONFIRM_NOTATIONS="<?=strip_tags(ucwords(strtolower($con_row['NOTATIONS']))); ?>"
									 PICK_CONFIRM_BOOK_NO="<?=ucwords(strtolower($con_row['BOOK_NO'])); ?>"
									 PICK_CONFIRM_PAGE_NO="<?=ucwords(strtolower($con_row['PAGE_NO'])); ?>"
									 PICK_CONFIRM_REG_NO="<?=ucwords(strtolower($con_row['REG_NO'])); ?>"
									 	value="<?=$PICK_CONFIRM_NAME;?>"><?=$PICK_CONFIRM_NAME;?></option>
										<?php } }else{ ?>
									<option>No record </option>
									<?php } ?>
							</select>
                  	</div>
                </div>
                </div><!----row-->
          	</div>
          	<div class="modal-footer">
            	
          	</div>
        </div>
    </div>
</div>

<!------SEARCH MARRIAGE GROOM AND BRIDE------->

<div class="modal fade find_groom_marriage" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-magnifying-glass"></i></span>SEARCH GROOM </h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
						<select name="MARRIAGE_GET_GROOM" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2">
								<option selected>-select name-</option>
								<?php
									$groom_marriage ="SELECT * FROM tbl_baptismal WHERE `GENDER`='Male' ORDER BY CHILD_NAME ASC";
									$groom_run = $conn->query($groom_marriage);
									if($groom_run->num_rows >0){
										while($groom_row =$groom_run->fetch_assoc()){
											$MARRIAGE_GET_GROOM =ucwords(strtolower($groom_row['CHILD_NAME']));

									?>
									 
									 <option 
									 	 GROOM_NAME="<?=ucwords(strtolower($groom_row['CHILD_NAME'])); ?>"
										 GROOM_RESIDENCE="<?=ucwords(strtolower($groom_row['PERMANENT_ADDRESS'])); ?>"
										 GROOM_FATHER="<?=ucwords(strtolower($groom_row['FATHER_NAME'])); ?>"
										 GROOM_MOTHER="<?=ucwords(strtolower($groom_row['MOTHER_NAME'])); ?>"
									 value="<?=$MARRIAGE_GET_GROOM;?>"><?=$MARRIAGE_GET_GROOM;?></option>
										<?php } }else{ ?>
									<option>No record </option>
									<?php } ?>
							</select>
                  	</div>
                </div>
                </div><!----row-->
          	</div>
          	<div class="modal-footer">
            	
          	</div>
        </div>
    </div>
</div>


<div class="modal fade find_bride_marriage" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          	<div class="modal-header">
			  <h4 class="modal-title"><i class="fas fa-solid fa-magnifying-glass"></i></span>SEARCH BRIDE </h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
          	<div class="modal-body">
          		  <div class="row">
					<div class="col-sm-12">
          		  <div class="form-group">
						<select name="MARRIAGE_GET_BRIDE" type="text" class="form-control select2" data-dropdown-css-class="select2-maroon" class="form-control select2">
								<option selected>-select name-</option>
								<?php
									$marriage_b="SELECT * FROM tbl_baptismal WHERE `GENDER`='FeMale' ORDER BY CHILD_NAME ASC";
									$marriage_brun = $conn->query($marriage_b);
									if($marriage_brun->num_rows >0){
										while($row_bride =$marriage_brun->fetch_assoc()){
											$MARRIAGE_GET_BRIDE =ucwords(strtolower($row_bride['CHILD_NAME']));

									?>
									 
									 <option 
									 	  BRIDE_NAME="<?=ucwords(strtolower($row_bride['CHILD_NAME'])); ?>"
										  BRIDE_RESIDENCE="<?=ucwords(strtolower($row_bride['PERMANENT_ADDRESS'])); ?>"
										  BRIDE_FATHER="<?=ucwords(strtolower($row_bride['FATHER_NAME'])); ?>"
										  BRIDE_MOTHER="<?=ucwords(strtolower($row_bride['MOTHER_NAME'])); ?>"
									 value="<?=$MARRIAGE_GET_BRIDE;?>"><?=$MARRIAGE_GET_BRIDE;?></option>
										<?php } }else{ ?>
									<option>No record </option>
									<?php } ?>
							</select>
                  	</div>
                </div>
                </div><!----row-->
          	</div>
          	<div class="modal-footer">
            	
          	</div>
        </div>
    </div>
</div>