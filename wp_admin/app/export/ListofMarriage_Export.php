<?php
include "../includes/conn.php";
$filename = 'List of Marriage Records-'.date('Y-m-d').'.csv';

$query ="SELECT `RECORD_NO`, `LICENSE_NO`, `NAME_MALE`, `NAME_FEMALE`, `LEGAL_STATUS_MALE`, `LEGAL_STATUS_FEMALE`, `ACTUAL_ADDRESS_MALE`, `ACTUAL_ADDRESS_FEMALE`, `DATE_OF_BIRTH_MALE`, `DATE_OF_BIRTH_FEMALE`, `POB_MALE`, `POB_FEMALE`, `DATE_BAPTISM_MALE`, `DATE_BAPTISM_FEMALE`, `PLACE_BAPTISM_MALE`, `PLACE_BAPTISM_FEMALE`, `SPONSORS_MALE`, `SPONSORS_FEMALE`, `MARRIAGE_MINISTER`, `DATE_OF_MARRIAGE`, `SERIES_NO`, `BOOK_NO`, `PAGE_NO`, `REG_NO` FROM `tbl_marriage` ORDER BY `LICENSE_NO` ASC";
$result = mysqli_query($conn,$query);
$file_arr = array();

// file creation
$file = fopen($filename,"w");

$file_arr = array("RECORD_NO", "LICENSE_NO", "NAME_MALE", "NAME_FEMALE", "LEGAL_STATUS_MALE", "LEGAL_STATUS_FEMALE", "ACTUAL_ADDRESS_MALE", "ACTUAL_ADDRESS_FEMALE", "DATE_OF_BIRTH_MALE", "DATE_OF_BIRTH_FEMALE", "POB_MALE", "POB_FEMALE", "DATE_BAPTISM_MALE", "DATE_BAPTISM_FEMALE", "PLACE_BAPTISM_MALE", "PLACE_BAPTISM_FEMALE","MARRIAGE_MINISTER", "DATE_OF_MARRIAGE", "SERIES_NO", "BOOK_NO", "PAGE_NO", "REG_NO"); 
fputcsv($file,$file_arr); 
while($row = mysqli_fetch_assoc($result)){
    $RECORD_NO              =$row['RECORD_NO'];
    $LICENSE_NO             =$row['LICENSE_NO'];
    $NAME_MALE              =$row['NAME_MALE'];
    $NAME_FEMALE            =$row['NAME_FEMALE'];
    $LEGAL_STATUS_MALE      =$row['LEGAL_STATUS_MALE'];
    $LEGAL_STATUS_FEMALE	=$row['LEGAL_STATUS_FEMALE'];
    $ACTUAL_ADDRESS_MALE    =$row['ACTUAL_ADDRESS_MALE'];
    $ACTUAL_ADDRESS_FEMALE  =$row['ACTUAL_ADDRESS_FEMALE'];
    $DATE_OF_BIRTH_MALE     =$row['DATE_OF_BIRTH_MALE'];
    $DATE_OF_BIRTH_FEMALE   =$row['DATE_OF_BIRTH_FEMALE'];
    $POB_MALE               =$row['POB_MALE'];
    $POB_FEMALE             =$row['POB_FEMALE'];
    $DATE_BAPTISM_MALE      =$row['DATE_BAPTISM_MALE'];
    $DATE_BAPTISM_FEMALE    =$row['DATE_BAPTISM_FEMALE'];
    $PLACE_BAPTISM_MALE     =$row['PLACE_BAPTISM_MALE'];
    $PLACE_BAPTISM_FEMALE   =$row['PLACE_BAPTISM_FEMALE'];
    $MARRIAGE_MINISTER      =$row['MARRIAGE_MINISTER'];
    $DATE_OF_MARRIAGE       =$row['DATE_OF_MARRIAGE'];
    $BOOK_NO                =$row['BOOK_NO'];
    $PAGE_NO                =$row['PAGE_NO'];
    $REG_NO                 =$row['REG_NO'];
    $SERIES_NO              =$row['SERIES_NO'];
    // Write to file 
    $file_arr = array($RECORD_NO, $LICENSE_NO, $NAME_MALE, $NAME_FEMALE, $LEGAL_STATUS_MALE, $LEGAL_STATUS_FEMALE,$ACTUAL_ADDRESS_MALE,$ACTUAL_ADDRESS_FEMALE,$DATE_OF_BIRTH_MALE,$DATE_OF_BIRTH_FEMALE,$POB_MALE,$POB_FEMALE,$DATE_BAPTISM_MALE,$DATE_BAPTISM_FEMALE,$PLACE_BAPTISM_MALE, $PLACE_BAPTISM_FEMALE,$MARRIAGE_MINISTER, $DATE_OF_MARRIAGE, $BOOK_NO, $PAGE_NO, $REG_NO, $SERIES_NO);
    fputcsv($file,$file_arr); 
}

fclose($file); 

// download
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=$filename");
header("Content-Type: application/csv; "); 

readfile($filename);

// deleting file
unlink($filename);
exit();
