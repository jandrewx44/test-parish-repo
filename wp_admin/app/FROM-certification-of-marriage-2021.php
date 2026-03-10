<?php
require_once('includes/conn.php');
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
    $pdf->SetTitle('Marriage Certificate Form');  
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
    $PRIEST_NAME=$sig['PRIEST_NAME'];
    $PRIEST_NAME = preg_replace('/\s+/', ' ', $PRIEST_NAME);
    $PRIEST_NAME = str_replace(' ', '&nbsp;', $PRIEST_NAME);
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
    <tr><td><h3 align="center">CERTIFICATE OF MARRIAGE</h3><br></td></tr>
    <tr><td><h4 align="">This is to certify that:</h4><br></td></tr>
    
   </thead>
  <tbody>
  <tr>
      <td width="100%"><br></td>
    </tr>
    <tr >
      <td width="31%">Name of Groom</td>
      <td width="69%" style="border-bottom:0.1px solid black;"></td>
    </tr>
    <tr>
      <td>Residence</td>
      <td width="69%" style="border-bottom:0.1px solid black;"></td>
    </tr>

    <tr>
        <td>Name of Father</td>
        <td width="69%" style="border-bottom:0.1px solid black;"></td>
    </tr>
    <tr>
    <td>Name of Mother</td>
    <td width="69%" style="border-bottom:0.1px solid black;"></td>
  </tr>
    
   <tr>
      <td colspan="3"><br> <br>And<br></td>
    </tr>
    <tr>
    <td width="31%">Name of Bride</td>
    <td width="69%" style="border-bottom:0.1px solid black;"></td>
  </tr>
  <tr>
    <td>Residence</td>
    <td width="69%" style="border-bottom:0.1px solid black;"></td>
  </tr>

  <tr>
      <td>Name of Father</td>
      <td width="69%" style="border-bottom:0.1px solid black;"></td>
  </tr>
  <tr>
  <td>Name of Mother</td>
  <td width="69%" style="border-bottom:0.1px solid black;"></td>
</tr>
<tr>
      <td colspan="3"><br><br></td>
    </tr>
   <tr>
      <td colspan="3">Were solemnly married according to the Rites of the Roman Catholic Church</td>
   </tr>
   <tr>
      <td colspan="3"><br><br></td>
    </tr>
    <tr>
    <td width="31%">Place of Marriage</td>
    <td width="69%" style="border-bottom:0.1px solid black;"></td>
  </tr>
  <tr>
    <td width="31%">Date of Marriage</td>
    <td width="69%" style="border-bottom:0.1px solid black;"></td>
  </tr>

  <tr>
      <td width="31%">Name of Witness(es)</td>
      <td width="69%" style="border-bottom:0.1px solid black;"></td>
  </tr>
  <tr>
  <td width="31%">Solemnizing Priest</td>
  <td width="69%" style="border-bottom:0.1px solid black;"></td>
</tr>
<tr>
      <td colspan="3"><br><br></td>
    </tr>
   <tr>
      <td width="80%">In witness thereof, here unto I affixed my signature and the seal of the Parish this </td>
      <td width="20%" style="border-bottom:0.1px solid black;"></td>
   </tr>
    <tr>
      <td width="10%">day of </td>
      <td width="10%" style="border-bottom:0.1px solid black;"></td>
      <td width="5%">, 20</td>
      <td width="10%" colspan="5" style="border-bottom:0.1px solid black;"></td>
    </tr>
    </tbody>
    
  <tfoot>
		<tr>
			<td width="70%"></td>
			<td width="30%"></td>
		</tr>
		<tr>
			<td></td>
			<td rowspan="4" align="center"><br><br><br><br><br><div style="text-align:center; border-top:1px solid black; width:50%; margin:auto; font-family:Times; font-size:13px; padding-top:5px;">'.$PRIEST_NAME.'</div></td>
		</tr>
    
	  </tfoot>
</table>';
    $pdf->writeHTML($contents,true, false, true, false, '');
    ob_end_clean();
    $pdf->Output('Marriage Certificate.pdf', 'D');

?>
