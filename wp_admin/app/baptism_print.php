<?php @include "includes/conn.php";
if(isset($_GET['q'])){
  $q =base64_decode(urldecode($_GET['q']));
  $sql = "SELECT * FROM tbl_baptismal WHERE ID = '$q'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
	$row = $query->fetch_assoc();
    $ID    	            =$row['ID'];
    $RECORD_NUMBER    	=$row['RECORD_NUMBER'];
    $CHILD_NAME     	=$row['CHILD_NAME'];
    $DATE_OF_BIRTH  	=$row['DATE_OF_BIRTH'];
    $PLACE_OF_BIRTH   	=$row['PLACE_OF_BIRTH'];
    $FATHER_NAME		     =$row['FATHER_NAME'];
    $MOTHER_NAME    	   =$row['MOTHER_NAME'];
    $NAME_OF_PRIEST      =$row['NAME_OF_PRIEST'];
    $NAME_OF_CHURCH      =$row['NAME_OF_CHURCH'];
    $PERMANENT_ADDRESS   =$row['PERMANENT_ADDRESS'];
    $LIST_OF_SPONSORS    =$row['LIST_OF_SPONSORS'];
    $DATE_CREATED       = $row['DATE_CREATED'];
    $GENDER             = $row['GENDER'];
    $DATE_OF_BAPTISM    =$row['DATE_OF_BAPTISM'];
	  $PLACE_OF_BAPTISM    =$row['PLACE_OF_BAPTISM'];
    $BOOK_NO            =$row['BOOK_NO'];
    $PAGE_NO            =$row['PAGE_NO'];
    $REG_NO             =$row['REG_NO'];
    $SERIES_NO          =$row['SERIES_NO'];
    $NOTATIONS          =$row['NOTATIONS'];
	
	}else{
	  header("location:baptismal.php");
	}
}
?>
<style>       
    hr{
        height: 1px;
        background-color: #000;
        border: none;
    }
    #span{
        border-bottom:5px solid #000;
    }
    @media print {
  #printPageButton {
    display: none;
	
  }
}


</style>
<title>St.Philip Benizi Parish</title>
  <link rel="icon" type="image/x-icon" href="../images/logo.png">
<table style="width:100%">
    <tr>
      <th><img src="../images/Diocese-of-Dumaguete.png" width="100" alt=""></th>
      <th align="center">
        <h2 style="margin-top:10px">DIOCESE OF DIPOLOG <br>
        St.Philip Benizi Parish<br>
        DIPOLOG, ZAMBOANGA DEL NORTE</h2>
      </th>
      <th><img src="../dist/img/santo.jpeg" width="100" alt=""></th>
    </tr>
  </table>
<hr>
<!--<a href="baptismal.php" style="background:#0652DD;padding:3px;color:#fff;text-decoration:none;border-radius:3px" class="btn btn-primary btn-sm" id="printPageButton"><span class="fas fa fa-home"></span> HOME</a> &nbsp;---->
<a href="#" style="background:#ED4C67;padding:3px;color:#fff;text-decoration:none;border-radius:3px" id="printPageButton" onclick="window.print();"><span class="fas fa fa-print"></span> PRINT</a>
<h3 align="center">CERTIFICATE OF BAPTISM</h3>
<h4 align="">This is to certify that</h4>
  <table style="width:100%" border="0">
    <tr >
      <td width="160px">Name of Child</td>
      <td><div style="border-bottom:1px solid #000;"><?= $CHILD_NAME;?></div></td>
    </tr>
    <tr>
      <td>Date of Birth</td>
      <td><div style="border-bottom:1px solid #000;"><?= date('F d, Y',strtotime($DATE_OF_BIRTH));?></div></td>
    </tr>

    <tr>
        <td>Name of Father</td>
        <td><div style="border-bottom:1px solid #000;"><?= $FATHER_NAME;?></div></td>
    </tr>

    <tr>
        <td>Maiden Name of Mother</td>
        <td><div style="border-bottom:1px solid #000;"><?= $MOTHER_NAME;?></div></td>
    </tr>
    <tr>
        <td>Address of Parents</td>
        <td><div style="border-bottom:1px solid #000;"><?= $PERMANENT_ADDRESS;?></div></td>
    </tr>
  </table>
  <p>Was solemnly baptized according to the Rite of Roman Catholic Church at the</p>

  <table style="width:100%" border="0">
    <tr>
      <td width="160px">Name of Parish: </td>
      <td><?= $NAME_OF_CHURCH;?></td>
    </tr>
    <tr>
      <td>Address of Parish: </td>
      <td><?= $PLACE_OF_BAPTISM;?></td>
    </tr>
  </table>
<br>
  <table style="width:100%" border="0">
    <tr>
      <td width="160px">Date of Baptism</td>
      <td><div style="border-bottom:1px solid #000;"><?= date('F d, Y',strtotime($DATE_OF_BAPTISM));?></div></td>
    </tr>
    <tr>
      <td>Baptized By</td>
      <td><div style="border-bottom:1px solid #000;"><?= $NAME_OF_PRIEST;?></div></td>
    </tr>
        <tr>
		
        <td width="160px"><br>Sponsors</td>
      </tr>
        <tr>
        <td></td>
        <td> <div style="width:100%;height:60px;border:1px solid #fff"><?= $LIST_OF_SPONSORS;?></div></td>
      </tr>
  </table>
  <p>Notations: <?=$NOTATIONS;?></p>
  <span>In witness thereof, here unto I affixed my signature and the seal of the Parish</span><br>
  <table border="0">
    <tr>
      <td>this</td>
      <td><div style="border-bottom:1px solid #000;width:50px">&nbsp;&nbsp;<?= date('dS');?></div></td>
      <td>day of</td>
      <td><div style="border-bottom:1px solid #000;width:100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= date('F');?></div></td>
      <td>,</td>
      <td><div style="border-bottom:1px solid #000;width:100px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= date('Y');?></div></td>
    </tr>
  </table>
<br>
	<table style="width:100%" border="0">
	<tr>
		<td style="border:1px solid #fff" width="100">Book No.</td>
		<td style="border:1px solid #fff"><?=$BOOK_NO;?></td>
		<td rowspan="3" align="right"><img src="../dist/img/signature.jpg" height="100" width="250"></td>
	</tr>
	<tr>
		<td style="border:1px solid #fff">Page No.</td>
		<td style="border:1px solid #fff"><?=$PAGE_NO;?></td>
	</tr>
	<tr>
	  <td style="border:1px solid #fff">Reg. No.</td>
	  <td style="border:1px solid #fff"><?=$REG_NO;?></td>
	  
	</tr>
</table>
</table>

<script>
window.print();
</script>