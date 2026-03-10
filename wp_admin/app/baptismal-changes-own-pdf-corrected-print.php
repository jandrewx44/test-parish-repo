<?php
ob_start();
	include 'includes/conn.php';
	if(isset($_GET['AUTONUM'])){
  $AUTONUM =$_GET['AUTONUM'];
   $sql = "SELECT * FROM tbl_baptismal_changes a INNER JOIN tbl_baptismal b ON a.UNDERSIGNED=b.ID WHERE AUTONUM= '".$AUTONUM."'";
	$query = $conn->query($sql);
	if($query->num_rows > 0){
		    $smtrow = $query->fetch_assoc();
		    $UNDERSIGNED   	=$smtrow['UNDERSIGNED'];
        $RESIDING   	=ucwords(strtolower($smtrow['RESIDING']));
        $REG_NO   		=$smtrow['REGNO'];
        $PAGE_NO   		=$smtrow['PAGENO'];
        $SERIES_OF   	=$smtrow['SERIESNO'];
        $NAME_NOWBE   	=ucwords(strtolower($smtrow['NAME_NOWBE']));
        $NOT_ONE   		=ucwords(strtolower($smtrow['NOT_ONE']));
        $POB   			=ucwords(strtolower($smtrow['POB']));
        $NOT_TWO   		=ucwords(strtolower($smtrow['NOT_TWO']));
        $DOB   			=$smtrow['DOB'];
        $NOT_THREE   	=ucwords(strtolower($smtrow['NOT_THREE']));
        $FATHERNAME   	=ucwords(strtolower($smtrow['FATHERNAME']));
        $NOT_FOUR   	=ucwords(strtolower($smtrow['NOT_FOUR']));
        $MOTHERNAME   	=ucwords(strtolower($smtrow['MOTHERNAME']));
        $NOT_FIVE   	=ucwords(strtolower($smtrow['NOT_FIVE']));
        $SPONSOR   		=ucwords(strtolower($smtrow['SPONSOR']));
        $NOT_SIX   		=ucwords(strtolower($smtrow['NOT_SIX']));
        $OTHERS   		=ucwords(strtolower($smtrow['OTHERS']));
        $THIS   		=$smtrow['THIS'];
        $OF   			=$smtrow['OF'];
        $YEAR   		    =$smtrow['YEAR'];
        $PETITIONER   	=ucwords(strtolower($smtrow['PETITIONER']));
				$CHILD_NAME     		=$smtrow['CHILD_NAME'];
				$DATE_OF_BIRTH  		=$smtrow['DATE_OF_BIRTH'];
				$PLACE_OF_BIRTH   	=$smtrow['PLACE_OF_BIRTH'];
				$NAME_OF_PRIEST      =ucwords(strtolower($smtrow['NAME_OF_PRIEST']));
				$NAME_CHURCH=ucwords($smtrow['NAME_OF_CHURCH']);
				$DATE_OF_BAPTISM    =$smtrow['DATE_OF_BAPTISM'];
				$PLACE_OF_BAPTISM    =ucwords(strtolower($smtrow['PLACE_OF_BAPTISM']));
				$BOOK_NO            =$smtrow['BOOK_NO'];
				$NOTATIONS          =$smtrow['NOTATIONS'];
	}else{
    $RESIDING ="";
		$REG_NO ="";
		$PAGE_NO ="";
		$SERIES_OF ="";
		$NAME_NOWBE ="";
		$NOT_ONE ="";
		$POB ="";
		$NOT_TWO ="";
		$DOB ="";
		$NOT_THREE ="";
		$FATHER_NAME ="";
		$NOT_FOUR ="";
		$MOTHER_NAME ="";
		$NOT_FIVE ="";
		$SPONSOR ="";
		$NOT_SIX ="";
		$OTHERS ="";
		$PETITIONER ="";
		$CHILD_NAME ="";
    $NAME_CHURCH ="";
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
    $pdf->SetTitle('BAPTISMAL- '.$NAME_NOWBE);  
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
    <tr><td><h3 align="center">CERTIFICATE OF BAPTISM</h3><br></td></tr>
    <tr><td><h4 align="">This is to certify that</h4><br></td></tr>
   </thead>
  <tbody>
    <tr >
      <td width="31%">Name of Child</td>
      <td width="69%" style="border-bottom:0.1px solid black;">'.$NAME_NOWBE.'</td>
    </tr>
    <tr>
      <td>Date of Birth</td>
      <td width="69%" style="border-bottom:0.1px solid black;">'.date('F d, Y',strtotime($DOB)).'</td>
    </tr>

    <tr>
        <td>Name of Father</td>
        <td width="69%" style="border-bottom:0.1px solid black;">'.$FATHERNAME.'</td>
    </tr>

    <tr>
        <td>Maiden Name of Mother</td>
        <td width="69%" style="border-bottom:0.1px solid black;">'.$MOTHERNAME.'</td>
    </tr>
    <tr>
        <td>Address of Parents</td>
        <td width="69%" style="border-bottom:0.1px solid black;">'.$POB.' </td>
    </tr>

   <tr>
      <td colspan="3"><br> <br>Was solemnly baptized according to the Rite of Roman Catholic Church at the<br></td>
    </tr>
   <tr>
      <td width="31%">Name of Parish </td>
      <td style="float:left;text-transform:capitalize">'.$NAME_CHURCH.'</td>
    </tr>
    <tr>
      <td width="31%">Address of Parish </td>
      <td>'.$PLACE_OF_BAPTISM.' <br></td>
    </tr>
    <tr>
      <td width="31%">Date of Baptism</td>
      <td style="border-bottom:0.1px solid black;">'.date('F d, Y',strtotime($DATE_OF_BAPTISM)).'</td>
    </tr>
    <tr>
      <td>Baptized By</td>
      <td style="border-bottom:0.1px solid black;">'.$NAME_OF_PRIEST.'</td>
    </tr>
        <tr>
        <td width="31%"><br>Sponsors</td>
		<td width="69%">'.$SPONSOR.'</td>
      </tr>
	  <tr>
		<td colspan="3"><br><br>Notations: '.$NOTATIONS.'</td>
	  </tr>
   <tr>
      <td colspan="3"><br><br>In witness thereof, here unto I affixed my signature and the seal of the Parish</td>
   </tr>
    <tr>
      <td width="10%">this</td>
      <td width="10%" style="border-bottom:0.1px solid black;">'.$THIS.'</td>
      <td width="10%">day of </td>
      <td width="10%" style="border-bottom:0.1px solid black;"> '.$OF.'</td>
      <td width="5%">,</td>
      <td width="10%" colspan="5" style="border-bottom:0.1px solid black;">'.$YEAR.'</td>
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
    ob_end_clean();
    $pdf->Output('corrected baptismal.pdf', 'I');

?>
