<?php
require_once('includes/conn.php');
error_reporting(0);
ob_start();
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
       $img_file = file_get_contents('../images/logo.png');
		$this->Image('@' . $img_file, 25, 50, 160, '', '', '', '', false, 50, '', false);
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
    $this->Cell(0, 10, 'Generated on '.date('l F d, Y').' Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	
 }
}

    //$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('Letter of Request');  
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
	<br>
   
    <table cellpadding="0" width="100%" border="0" style="border-collapse: collapse;text-align:justify">

	<tr><th colspan="3"> <hr></th></tr>
	<tr>
		<th colspan="4">
		<br><br>
		His Excellency<br>
		<strong>MOST REV. JULITO B. CORTES, D.D.</strong><br>
		Bishop of Dipolog<br>
		Office of the Bishop, 2/F Diocesan Pastoral Center<br>
		Dipolog City, Zamboanga del Norte, Philippines<br>
		<br><br>
		Your Excellency:
		<br>
		</th>
	</tr>
	
      <tbody>
		<tr style="text-justify: auto;text-align: justify">
			<td width="30%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I, the undersigned</td>
			<td width="46%" style="border-bottom:0.1px solid black;"><span style="border-bottom:1px solid #000;text-align:center">'.$MY_NAME.' </span></td>
			<td colspan="0">,Parish Priest/ Team </td>
		</tr>
		 <tr>
			<td width="100%">Moderator/ Parochial Vicar/ Team Minister/ Priest in Charge of <u>St.Philip Benizi Parish</u>, do hereby respectfully request Your Excellency to issue a written decree authorizing me to effect in accordance with the affidavit hereto attached the necessary changes or correction in the record of</td>
		</tr>
		<tr>
			<td width="13%">Baptism of </td>
			<td width="46%" style="border-bottom:0.1px solid black;"></td>
		</tr>
		
		<tr>
			<td colspan="3"><br></td>
		</tr>
		<tr>
			<td colspan="3">The changes to be made are as follows:</td>
		</tr>
		<tr>
			<td colspan="3"><br></td>
		</tr>
		<tr>
			<td width="50%">
			
				  <input type="checkbox" name="CNAME" value="YES"> Name<br>
				  <input type="checkbox" name="CFNAME" value="YES"> Father’s Name<br>
				  <input type="checkbox" name="CMNAME" value="YES"> Mother’s Name <br>	
			</td>
			<td width="50%">
				  <input type="checkbox" name="CPOB" value="YES"> Place of Birth<br>
				  <input type="checkbox" name="CDOB" value="YES"> Date of Birth<br>
				  <input type="checkbox" name="CSPONSORS" value="YES"> Sponsors<br>		    
			</td>
		</tr>
		<tr>
			<td colspan="3"><br></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align:justify">Sincerely imploring your favorable response to this request, ever willing to abide Your Excellency pastoral decision and seeking for your blessing.</td>
		</tr>
		<tr>
			<td colspan="3"><br></td>
		</tr>
		
		
      </tbody>
	  <tfoot>
		<tr>
			<td colspan="3"><br><br><br><br><br><br></td>
		</tr>
	  </tfoot>
    </table>
	 
    ';
	
     $pdf->writeHTML($contents, true, false, true, false, '');
    $sigFont = 10;
    $pdf->SetFont('helvetica','', $sigFont);
    $margins = $pdf->getMargins();
    $available = $pdf->getPageWidth() - $margins['left'] - $margins['right'];
    while($pdf->getStringWidth($PRIEST_NAME) > $available && $sigFont > 8){
        $sigFont -= 0.5;
        $pdf->SetFont('helvetica','', $sigFont);
    }
    $pdf->Cell(0, 0, $PRIEST_NAME, 'T', 1, 'C', false, '', 0);
    ob_end_clean();
    $pdf->Output('FORM-affidavit-letter-of-request-for-partial-changes.pdf', 'D');

?>
