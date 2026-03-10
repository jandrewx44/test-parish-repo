<?php
include "includes/session.php";
$id = $_POST['id'];
$sql = "SELECT * FROM tbl_users WHERE tbladmin.id = '$id'";
$query = $conn->query($sql);
$comp = $query->fetch_assoc();
?>
<table class="table table-bordered table-hover">
<thead>
<tr>
  
  <th>Role</th>
  <th>Designation</th>
  <th>Address</th>
  <th>Email</th>
  <th>Phone Number</th>

</tr>
</thead>
<tbody>
  <?php
   
	///$sql = "SELECT * FROM tblcomplain JOIN tblresidence ON tblcomplain.PERSON_TO_COMPLAIN=tblresidence.FULLNAME WHERE tblcomplain.COMPLAINANT = '$id'";
	$sql = "SELECT * FROM tbl_users WHERE id = '$id'";
	$query = $conn->query($sql);
	while($comprow1 = $query->fetch_assoc()){
	  ?>
		<tr>
		  <td><?php echo $comprow1['role']; ?></td>
		  <td><?php echo $comprow1['position']; ?></td>
		  <td><?php echo $comprow1['address'];?></td>
		  <td><?php echo $comprow1['email']; ?></td>
		  <td><?php echo $comprow1['phonenumber']; ?></td>
		</tr>
	  <?php
	}
  ?>
</tbody>
</table>
