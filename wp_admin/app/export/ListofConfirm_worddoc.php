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

<center>
<h4>Republic of the Philippines</h4>
<h3>St.Philip Benizi Parish</h3>
<h5>Dipolog Zamboanga del Norte</h5>
</center>
<br>
<br>
<table border="1" style="border-collapse: collapse;width:100%" cellpadding="4">
<tr>
<th>RECORD NUMBER</th>
<th>NAME OF CHILD</th>
<th>GENDER</th>
<th>DATE OF BAPTISE</th>
<th>FATHER_NAME</th>
<th>MOTHER_NAME</th>
</tr>
<tbody>

<?php  
error_reporting(0);
include "../includes/conn.php";
$sql ="SELECT `RECORD_NUMBER`, `CHILD_NAME`, `GENDER`, `DATE_OF_BAPTISM`, `PLACE_OF_BAPTISM`, `FATHER_NAME`, `MOTHER_NAME`, `NAME_OF_PRIEST`, `NAME_OF_CHURCH`, `DATE_CREATED` FROM `tbl_confirmation` ORDER BY CHILD_NAME ASC";
$query = $conn->query($sql);
while($row = $query->fetch_assoc()){
           header("Content-type: application/vnd.ms-word");  
           header("Content-Disposition: attachment;Filename=".date('Y-m-d').'-'.rand().".doc");  
           header("Pragma: no-cache");  
           header("Expires: 0");  
            echo '
            <tr>
            <td>'.$row["RECORD_NUMBER"].'</td>
            <td>'.$row["CHILD_NAME"].'</td>
            <td>'.$row["GENDER"].'</td>
            <td>'.$row["DATE_OF_BAPTISM"].'</td>
            <td>'.$row["FATHER_NAME"].'</td>
            <td>'.$row["MOTHER_NAME"].'</td>
            </tr> ';
}
 exit; 
 ?> 
  </tbody>
</table>