<?php
error_reporting(0);
ob_start();
	include 'includes/conn.php';
	if(isset($_GET['CONFID'])){
  	$CONFID =$_GET['CONFID'];
   $sql = "SELECT * FROM tbl_confirmation_certificate WHERE CONFID= '".$CONFID."'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		$smtrow = $query->fetch_assoc();
		$CHILDNAME   		  =mysqli_real_escape_string($conn,(ucwords($smtrow['CHILDNAME'])));
    $DOB_BAPTISM   	  =mysqli_real_escape_string($conn,(ucwords($smtrow['DOB_BAPTISM'])));
    $PLACE_OF_BAPTISM =mysqli_real_escape_string($conn,(ucwords($smtrow['PLACE_OF_BAPTISM'])));
		$FATHER   	      =mysqli_real_escape_string($conn,(ucwords($smtrow['FATHER'])));
		$MOTHER   	      =mysqli_real_escape_string($conn,(ucwords($smtrow['MOTHER'])));
		$PARENTS_ADDRESS  =mysqli_real_escape_string($conn,(ucwords($smtrow['PARENTS_ADDRESS'])));
		$CHURCH_NAME   	  =mysqli_real_escape_string($conn,(ucwords($smtrow['CHURCH_NAME'])));
		$CHURCH_ADDRESS   =mysqli_real_escape_string($conn,(ucwords($smtrow['CHURCH_ADDRESS'])));
		$CONFIRMED_DATE   =mysqli_real_escape_string($conn,($smtrow['CONFIRMED_DATE']));
		$CONFIRMED_BY   	=mysqli_real_escape_string($conn,(ucwords($smtrow['CONFIRMED_BY'])));
		$SPONSORS   	    =mysqli_real_escape_string($conn,(ucwords($smtrow['SPONSORS'])));
		$NOTATIONS   	    =mysqli_real_escape_string($conn,($smtrow['NOTATIONS']));
		$GIVEN_DAY   	    =mysqli_real_escape_string($conn,($smtrow['GIVEN_DAY']));
		$GIVEN_MONTH   	  =mysqli_real_escape_string($conn,(ucwords($smtrow['GIVEN_MONTH'])));
		$GIVEN_YEAR   	  =mysqli_real_escape_string($conn,($smtrow['GIVEN_YEAR']));
		$BOOK_NO   	      =mysqli_real_escape_string($conn,($smtrow['BOOK_NO']));
		$PAGE_NO   	      =mysqli_real_escape_string($conn,($smtrow['PAGE_NO']));
		$REG_NO   	      =mysqli_real_escape_string($conn,($smtrow['REG_NO']));
	}else{
		$CHILDNAME  ="";
    $DOB_BAPTISM   	="";
    $PLACE_OF_BAPTISM   	="";
		$FATHER  ="";
		$MOTHER  ="";
		$PARENTS_ADDRESS  ="";
		$CHURCH_NAME   	="";
		$CHURCH_ADDRESS ="";
		$CONFIRMED_DATE   	="";
		$CONFIRMED_BY   	="";
		$SPONSORS   	="";
		$NOTATIONS   	="";
		$GIVEN_DAY   	="";
		$GIVEN_MONTH   ="";
		$GIVEN_YEAR   ="";
		$BOOK_NO   	="";
		$PAGE_NO   ="";
		$REG_NO   	="";
  }
		
}

	require_once('../tcpdf/tcpdf.php');  

  // Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {
  //Page header
  public function Header() {
      // get the current page break margin
      $bMargin = $this->getBreakMargin();
      // get current auto-page-break mode
      $auto_page_break = $this->AutoPageBreak;
      // disable auto-page-break
      $this->SetAutoPageBreak(false, 0);
      // set bacground image
      $img_file = K_PATH_IMAGES.'..';
      $this->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
      // restore auto-page-break status
      $this->SetAutoPageBreak($auto_page_break, $bMargin);
      // set the starting point for the page content
      $this->setPageMark();
  }
  public function Footer() {
    // Position at 15 mm from bottom
    $this->SetY(-15);
    // Set font
    $this->SetFont('helvetica', 'I', 8);
    // Page number
    //$this->Cell(0, 10, 'Generated on '.date('l F d, Y').' Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	
	
}
}

    //$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('Confirmation- '.$CHILDNAME);  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(FALSE);  
    $pdf->setPrintFooter(TRUE);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  

	
$sql = "SELECT PRIEST_NAME FROM tbl_priest WHERE PRIEST_DEFAULT = 'YES'";
$query = $conn->query($sql);
if($query->num_rows > 0){
    $sig = $query->fetch_assoc();
    $PRIEST_NAME = str_replace('ñ', 'Ñ', strtoupper($sig['PRIEST_NAME']));
    $PRIEST_NAME = str_replace(array("\r","\n"), ' ', $PRIEST_NAME);
    $PRIEST_NAME = preg_replace('/\s+/', ' ', $PRIEST_NAME);
    $PRIEST_NAME = trim($PRIEST_NAME);
} else {
  $PRIEST_NAME='';
}
$sql = "SELECT * FROM tbl_system_setting";
$query = $conn->query($sql);
if($query->num_rows > 0){
    $logo_setting = $query->fetch_assoc();
    $right_logo = 'logo_right.jpg';
    file_put_contents($right_logo, $logo_setting['SYS_LOGO']);
	$logo_left = 'logo_left.jpg';
    file_put_contents($logo_left, $logo_setting['SYS_SECOND_LOGO']);
	
	$SYS_ADDRESS=$logo_setting['SYS_ADDRESS'];
	$SYS_DIOCESE=$logo_setting['SYS_DIOCESE'];
	$SYS_CHURCH_NAME=$logo_setting['SYS_CHURCH_NAME'];
	} else {
	  $right_logo='';
	  $logo_left='';
	}
	
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    $pdf->AddPage(); 
	$pdf->SetAlpha(0.1);
    $img_file = file_get_contents($logo_left);
	$pdf->Image('@' . $img_file, 25, 50, 160, '', '', '', '', false, 50, '', false);
	$pdf->SetAlpha(1);
	
    $contents = '
    <table width="100%">
      <thead>
      <tr>
        <td align="left" width="20%">
        <img src="'.$right_logo.'" alt="" class="float-left" width="80">
        </td>
          <td align="center" width="60%">
          <span style="text-transform:uppercase">'.$SYS_DIOCESE.'</span><br>
          <span style="text-transform:uppercase">'.$SYS_CHURCH_NAME.'</span><br>
          <span style="text-transform:uppercase">'.$SYS_ADDRESS.'</span>
          <br>
          <br>
          <br>
          </td>
          <td align="right" width="20%">
          <img src="'.$logo_left.'" alt="" class="float-left" width="80">
          </td>
      </tr>
      </thead>
    </table>
  <table width="100%" border="0" style="text-align:justify">
   <thead>
    <tr><td><hr></td></tr>
    <tr><td><h3 align="center">CERTIFICATE OF CONFIRMATION</h3><br></td></tr>
    <tr><td><h4 align="">This is to certify that</h4><br></td></tr>
   </thead>
  <tbody>
    <tr >
      <td width="31%">Name of Confirmand</td>
      <td width="69%" style="border-bottom:0.1px solid black;">'.$CHILDNAME.'</td>
    </tr>
    <tr>
      <td>Date of Baptism</td>
      <td width="69%" style="border-bottom:0.1px solid black;">'.date('F d, Y',strtotime($DOB_BAPTISM)).'</td>
    </tr>

    <tr>
        <td>Place of Baptism</td>
        <td width="69%" style="border-bottom:0.1px solid black;">'.$PLACE_OF_BAPTISM.'</td>
    </tr>
    <tr>
    <td>Name of Father</td>
    <td width="69%" style="border-bottom:0.1px solid black;">'.$FATHER.'</td>
  </tr>
    <tr>
        <td>Maiden Name of Mother</td>
        <td width="69%" style="border-bottom:0.1px solid black;">'.$MOTHER.'</td>
    </tr>
    <tr>
        <td>Address of Parents</td>
        <td width="69%" style="border-bottom:0.1px solid black;">'.$PARENTS_ADDRESS.' </td>
    </tr>

   <tr>
      <td colspan="3"><br> <br>Solemnly Received the Sacrament of Confirmation According to the Rite of the Roman Catholic Church at the<br></td>
    </tr>
   <tr>
      <td width="31%">Name of Parish </td>
      <td style="float:left;text-transform:capitalize">'.$CHURCH_NAME.'</td>
    </tr>
    <tr>
      <td width="31%">Address of Parish </td>
      <td>'.$CHURCH_ADDRESS.' <br></td>
    </tr>
    <tr>
      <td width="31%">Date of Confirmation</td>
      <td style="border-bottom:0.1px solid black;">'.date('F d, Y',strtotime($CONFIRMED_DATE)).'</td>
    </tr>
    <tr>
      <td>Confirmed by</td>
      <td style="border-bottom:0.1px solid black;">'.$CONFIRMED_BY.'</td>
    </tr>
        <tr>
        <td width="31%"><br>Sponsors</td>
		<td width="69%">'.$SPONSORS.'</td>
      </tr>
	  <tr>
		<td colspan="3"><br><br>Notations: <br><br>'.$NOTATIONS.'</td>
	  </tr>
   <tr>
      <td colspan="3"><br><br>In witness thereof, here unto I affixed my signature and the seal of the Parish</td>
   </tr>
    <tr>
      <td width="10%">this</td>
      <td width="10%" style="border-bottom:0.1px solid black;">'.$GIVEN_DAY.'</td>
      <td width="10%">day of </td>
      <td width="10%" style="border-bottom:0.1px solid black;"> '.$GIVEN_MONTH.'</td>
      <td width="5%">, 20</td>
      <td width="10%" colspan="5" style="border-bottom:0.1px solid black;">'.$GIVEN_YEAR.'</td>
    </tr>
    </tbody>
    
  <tfoot>
		<tr>
			<td width="50%"></td>
			<td width="50%"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
    <tr>
		<td width="12%" style="border:1px solid #fff">Book No.</td>
		<td width="12%" style="border:1px solid #fff">'.$BOOK_NO.'</td>
	</tr>
	<tr>
		<td width="12%" style="border:1px solid #fff">Page No.</td>
		<td width="12%" style="border:1px solid #fff">'.$PAGE_NO.'</td>
	</tr>
	<tr>
	  <td width="12%" style="border:1px solid #fff">Reg. No.</td>
	  <td width="12%" style="border:1px solid #fff">'.$REG_NO.'</td>
	</tr>
	  </tfoot>
</table>';
    $pdf->writeHTML($contents,true, false, true, false, '');
    $sigFont = 8;
    $pdf->SetFont('helvetica','', $sigFont);
    $margins = $pdf->getMargins();
    $available = $pdf->getPageWidth() - $margins['left'] - $margins['right'];
    while($pdf->getStringWidth($PRIEST_NAME) > $available && $sigFont > 6){
        $sigFont -= 0.5;
        $pdf->SetFont('helvetica','', $sigFont);
    }
    $sigWidth = min($available * 0.6, $pdf->getStringWidth($PRIEST_NAME) + 10);
    $pdf->SetY($pdf->getPageHeight() - $margins['bottom'] - 25);
    $pdf->SetX($pdf->getPageWidth() - $margins['right'] - $sigWidth);
    $pdf->Cell($sigWidth, 0, $PRIEST_NAME, 'T', 1, 'R', false, '', 0);
    ob_end_clean();
    $pdf->Output('Confirmation.pdf', 'D');

?>
