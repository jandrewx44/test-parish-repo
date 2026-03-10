<style>
	span{
		font-family: Arial, Helvetica, sans-serif;
	}
table, td, th {
  border: 1px solid #ccc;
  font-size:8pt;
  /*text-align:right;*/
  font-family: Arial, Helvetica, sans-serif;
  padding:5px;
}
th{
	background:#ccc;
	color:#000;
	
}
table {
  width: 100%;
  border-collapse: collapse;
}

@media print {
  #printPageButton {
    display: none;
	
  }
}
@media print {
  table:nth-child(1) {
    display: block;
  }
}
    @page
        {
            size: auto; /* auto is the initial value */
            margin: 2mm 4mm 0mm 0mm; /* this affects the margin in the printer settings */
        }
        thead
        {
            display: table-header-group;
        }
        tfoot
        {
            display: table-footer-group;
        }
        thead
        {
            display: block;
        }
        tfoot
        {
            display: block;
        }
        h4, h3,h5{
          font-family: Arial, Helvetica, sans-serif;
        }
</style>

<?php  
header("Content-type: application/vnd.ms-word");  
header("Content-Disposition: attachment;Filename=".date('Y-m-d').'-'.rand().".doc");  
header("Pragma: no-cache");  
header("Expires: 0");  
echo'


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
      <th><img src="../images/logo.png" width="100" alt=""></th>
    </tr>
  </table>
<hr>
<a href="baptismal.php" style="background:#0652DD;padding:3px;color:#fff;text-decoration:none;border-radius:3px" class="btn btn-primary btn-sm" id="printPageButton"><span class="fas fa fa-home"></span> HOME</a> &nbsp;
<a href="#" style="background:#ED4C67;padding:3px;color:#fff;text-decoration:none;border-radius:3px" id="printPageButton" onclick="window.print();"><span class="fas fa fa-print"></span> PRINT</a>
<h3 align="center">CERTIFICATE OF BAPTISM</h3>
<h4 align="">This is to certify that</h4>
  <table style="width:100%" border="0">
    <tr >
      <td width="160px">Name of Child</td>
      <td><div style="border-bottom:1px solid #000;"></div></td>
    </tr>
    <tr>
      <td>Date of Birth</td>
      <td><div style="border-bottom:1px solid #000;"></div></td>
    </tr>

    <tr>
        <td>Name of Father</td>
        <td><div style="border-bottom:1px solid #000;"></div></td>
    </tr>

    <tr>
        <td>Maiden Name of Mother</td>
        <td><div style="border-bottom:1px solid #000;"></div></td>
    </tr>
    <tr>
        <td>Address of Parents</td>
        <td><div style="border-bottom:1px solid #000;"></div></td>
    </tr>
  </table>
  <p>Was solemnly baptized according to the Rite of Roman Catholic Church at the</p>

  <table style="width:100%" border="0">
    <tr>
      <td width="160px">Name of Church: </td>
      <td></td>
    </tr>
    <tr>
      <td>Address of Parish: </td>
      <td></td>
    </tr>
  </table>
<br>
  <table style="width:100%" border="0">
    <tr>
      <td width="160px">Date of Baptism</td>
      <td><div style="border-bottom:1px solid #000;"></div></td>
    </tr>
    <tr>
      <td>Baptized By</td>
      <td><div style="border-bottom:1px solid #000;"></div></td>
    </tr>
        <tr>
        <td width="160px">Sponsors</td>
      </tr>
        <tr>
        <td></td>
        <td></td>
      </tr>
  </table>
  <br><br>
  <p>Notations:</p>
  <span>In witness thereof, here unto I affixed my signature and the seal of the Parish</span><br>
  <table border="0">
    <tr>
      <td>this</td>
      <td><div style="border-bottom:1px solid #000;width:50px">&nbsp;&nbsp;</div></td>
      <td>day of</td>
      <td><div style="border-bottom:1px solid #000;width:100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
      <td>,</td>
      <td><div style="border-bottom:1px solid #000;width:100px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
    </tr>
  </table>
<br><br><br><br><br><br><br><br>
  <table style="width:100%">
	<tr>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td align="center" width="200" style="border:1px solid #fff">_____________________________</td>
	</tr>
	<tr>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td align="center" width="200" style="border:1px solid #fff"><strong> REV. FR. PRIMO A. TAOC</strong></td>
	</tr>
	<tr>
	    <td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td align="center" width="200" style="border:1px solid #fff">Parish Priest</td>
	</tr>
	
</table>
<br>
<!--<table>
	<tr>
		<td style="border:1px solid #fff">Reg No.:</td>
		<td style="border:1px solid #fff"><?=$RECORD_NUMBER;?></td>
	</tr>
	<tr>
		<td style="border:1px solid #fff">Record No.:</td>
		<td style="border:1px solid #fff"><?=$ID;?></td>
	</tr>
</table>
---->
<script>
window.print();
</script>




';
 exit; 
 ?> 
