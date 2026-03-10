<?php
$timezone = 'Asia/Manila';
date_default_timezone_set($timezone);
	include 'includes/conn.php';
	if(isset($_GET['q'])){
		$return =base64_decode(urldecode($_GET['q']));
	}
	$sql = "SELECT tbl_balance_accounting.ACCOUNT_CODE, tbl_balance_accounting.ITEM_NUMBER, tbl_articles.ARTICLE_CODE, tbl_articles.ARTICLE, tbl_balance_accounting.DESCRIPTION, tbl_balance_accounting.QUANTITY, tbl_balance_accounting.VALUE, tbl_balance_accounting.DATE_ACQUIRED, tbl_balance_accounting.OFFICE, tbl_balance_accounting.PERSON_MR, tbl_balance_accounting.CONDITION, tbl_officename.OFFICE_NAME
FROM tbl_officename INNER JOIN (tbl_articles INNER JOIN (tbl_account_code INNER JOIN tbl_balance_accounting ON tbl_account_code.ACCOUNT_CODE = tbl_balance_accounting.ACCOUNT_CODE) ON tbl_articles.ARTICLE_CODE = tbl_balance_accounting.ARTICLE_CODE) ON tbl_officename.OFFICE_CODE = tbl_balance_accounting.OFFICE_CODE
WHERE (((tbl_articles.ARTICLE_CODE)='$return'))";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$result = $query->fetch_assoc();
		$title ="
		<span class='text-uppercase'>ARTICLE CODE: ".$result['ARTICLE_CODE']."</span><br>
		<span class='text-uppercase'>ACCOUNT CODE: ".$result['ACCOUNT_CODE']."</span><br>
		<span class='text-uppercase'>ARTICLES NAME: ".$result['ARTICLE']."</span><br> 
		";
	}else{
		$title= "<div class='alert alert-info' role='alert'> <a href='accountcode.php' id='printPageButton'>BACK HOME </a> |  No results found! </div>";
	}
?>
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
	background:#27ae60;
	color:#fff;
	
}
table {
  width: 100%;
  border-collapse: collapse;
}
.header{
	margin: auto;
	text-align:center;
	width: 100%;
	border:0px solid #34495e;
	font-weight:bold;
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

</style>

<?php @include "includes/header.php";?>
<body>
<div class="card-body">
	<div class="header">

	<span class="text-uppercase">REPUBLIC OF THE PHILIPPINES</span><br>
	<span class="text-uppercase">OFFICE OF THE GENERAL SERVICES</span><br>
	<span class="text-uppercase">LOPEZ, QUEZON</span><br><br>
	<span class="text-uppercase"><h4> INVENTORY OF PROPERTY, PLANT AND EQUIPMENT</h4></span>
	<span class="text-uppercase">As of <?php echo date('l F d, Y');?></span><br>
	</div>

	
		<?php 
		echo $title;
		?>
<table id="example1">

		<tr>
		<th colspan="10" style="background:#fff;border:1px solid #fff;border-bottom:1px solid #ccc;"></th>
		<th colspan="3" style="background:#fff;border:1px solid #fff;border-bottom:1px solid #ccc;color:#000;"> 
		<div class="pull-right" style="float:right"> 
		<a href="accountcode.php" class="btn btn-primary btn-sm" id="printPageButton"><span class="fas fa fa-home"></span> HOME |</a> 
		<a href="#" id="printPageButton" class="btn btn-info btn-sm" onclick="window.print();"><span class="fas fa fa-print"></span> PRINT |</a> 
		<a href="#" onClick="Export()" class="btn bg-success btn-sm" id="printPageButton"><span class="fas fa fa-file-excel"></span> EXCEL |</a>
		</div>	
		</th>
	</tr>
	<tr>
	<th width="50">#</th>
	<th width="80">ITEM NO.</th>
	<th width="80">PAR NO.</th>
	<th width="80">SERIAL NO.</th>
	<th width="80">ARTICLE NAME</th>
	<th>DESCRIPTION</th>
	<th width="40">QTY</th>
	<th width="80">UNIT COST</th>
	<th width="80">TOTAL COST</th>
	<th width="100">DATE ACQUIRED</th>
	<th width="100">OFFICE</th>
	<th width="230">PERSON ASSIGNED</th>
	<th width="150">REMARKS</th>
	</tr>
	
	<tbody>
	<?php
	$sql = "SELECT tbl_balance_accounting.PAR_NUMBER,tbl_balance_accounting.SERIAL_NUMBER, tbl_balance_accounting.ARTICLE,tbl_balance_accounting.ACCOUNT_CODE, tbl_balance_accounting.ITEM_NUMBER, tbl_articles.ARTICLE_CODE, tbl_articles.ARTICLE, tbl_balance_accounting.DESCRIPTION, tbl_balance_accounting.QUANTITY, tbl_balance_accounting.VALUE, tbl_balance_accounting.DATE_ACQUIRED, tbl_balance_accounting.OFFICE, tbl_balance_accounting.PERSON_MR, tbl_balance_accounting.CONDITION, tbl_officename.OFFICE_NAME
	FROM tbl_officename INNER JOIN (tbl_articles INNER JOIN (tbl_account_code INNER JOIN tbl_balance_accounting ON tbl_account_code.ACCOUNT_CODE = tbl_balance_accounting.ACCOUNT_CODE) ON tbl_articles.ARTICLE_CODE = tbl_balance_accounting.ARTICLE_CODE) ON tbl_officename.OFFICE_CODE = tbl_balance_accounting.OFFICE_CODE
	WHERE (((tbl_articles.ARTICLE_CODE)='$return'));";
	$query = $conn->query($sql);
	$cnt=1;
	while($row = $query->fetch_assoc()){
		$total ="";
		?>
		<tr>
			<td><?php echo $cnt; ?></td>
			<td><?php echo $row['ITEM_NUMBER']; ?></td>
			<td><?php echo $row['PAR_NUMBER']; ?></td>
			<td><?php echo $row['SERIAL_NUMBER']; ?></td>
			<td><?php echo $row['ARTICLE']; ?></td>
			<td><?php echo substr($row['DESCRIPTION'],0,30); ?></td>
			<td><?php echo $row['QUANTITY']; ?></td>
			<td align="right"><?php echo number_format($row['VALUE'],2); ?></td>
			<td align="right"><?php echo number_format($row['QUANTITY'] * $row['VALUE'],2); ?></td>
			<td><?php echo $row['DATE_ACQUIRED']; ?></td>
			<td><?php echo $row['OFFICE_NAME']; ?></td>
			<td><?php echo $row['PERSON_MR']; ?></td>
			<td><?php echo $row['CONDITION']; ?></td>
			
		</tr>
		<?php
		$cnt++;
	}
	?>
	</tbody>
	<?php
	$sql = "SELECT  SUM(tbl_balance_accounting.VALUE) AS TotalUnitCost, SUM(tbl_balance_accounting.VALUE * tbl_balance_accounting.QUANTITY) AS qtyval, tbl_balance_accounting.ACCOUNT_CODE, COUNT(tbl_balance_accounting.ITEM_NUMBER) AS ITEM, tbl_articles.ARTICLE_CODE, tbl_articles.ARTICLE, tbl_balance_accounting.DESCRIPTION, tbl_balance_accounting.QUANTITY, tbl_balance_accounting.VALUE, tbl_balance_accounting.DATE_ACQUIRED, tbl_balance_accounting.OFFICE, tbl_balance_accounting.PERSON_MR, tbl_balance_accounting.CONDITION, tbl_officename.OFFICE_NAME
	FROM tbl_officename INNER JOIN (tbl_articles INNER JOIN (tbl_account_code INNER JOIN tbl_balance_accounting ON tbl_account_code.ACCOUNT_CODE = tbl_balance_accounting.ACCOUNT_CODE) ON tbl_articles.ARTICLE_CODE = tbl_balance_accounting.ARTICLE_CODE) ON tbl_officename.OFFICE_CODE = tbl_balance_accounting.OFFICE_CODE
	WHERE (((tbl_articles.ARTICLE_CODE)='$return'));";
	$query = $conn->query($sql);
	$total = $query->fetch_assoc();

	$TotalUnitCost=number_format($total['TotalUnitCost'],2);
	?>
	<tr>
		<td></td>
		<td>Total: <?php echo $total['ITEM'];?></td>
		<td></td>
		<td></td>
		<td>Total:<?php echo $TotalUnitCost;?></td>
		<td>Total:<?php echo number_format($total['qtyval'],2);?></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>

	</tr>

</table>
<br><br>
<table> 
	<tr>
		<td style="border:1px solid #fff">Total Unit Cost:&#8369; <?php echo $TotalUnitCost;?></td>
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
		<td style="border:1px solid #fff">Total Cost:&#8369; <?php echo number_format($total['qtyval'],2);?></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td style="border:1px solid #fff"></td>
		<td align="center" width="200" style="border:1px solid #fff"><strong> URSULA MYLA C. MARIQUINA</strong></td>
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
		<td align="center" width="200" style="border:1px solid #fff">Records Officer</td>
	</tr>
	
</table>
</div>
<script>
        function printDiv() {
            var divContents = document.getElementById("GFG").innerHTML;
            var a = window.open('', '', 'height=1024, width=1024');
            a.document.write('<html>');
            a.document.write('<body >');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
	 <script>
        function Export()
        {
           // var conf = confirm("Please confirm if you wish to proceed in exporting the Sales report  into CSV file.");
            //if(conf == true)
           // {
				window.open("export/ArticleCode_export.php?q=<?php echo $_GET['q'];?>", '_blank');
           // }
        }
    </script>
	</body>