<?php
include "../includes/conn.php";
$filename = 'List of Death Records-'.date('Y-m-d').'.csv';

$query ="SELECT `RECORD_NO`, `NAME_OF_DECEASED`, `RESIDENCE`, `AGE`, `PARENTS_WIFE_HUSBAND`, `DATE_OF_DEATH`, `PLACE_OF_BURIAL`, `DATE_OF_BURIAL`, `SACRAMENTS`, `PRIEST`, `SERIES_NO`, `BOOK_NO`, `PAGE_NO`, `REG_NO` FROM `tbl_death` ORDER BY `NAME_OF_DECEASED` ASC";
$result = mysqli_query($conn,$query);
$file_arr = array();

// file creation
$file = fopen($filename,"w");

$file_arr = array("RECORD NUMBER","BOOK NO","PAGE NO","REG NO","SERIES NO","NAME","RESIDENCE","AGE","PARENTS WIFE/HUSBAND","DATE OF DEATH","PLACE OF BURIAL","DATE OF BURIAL","SACRAMENTS","PRIEST"); 
fputcsv($file,$file_arr); 
while($row = mysqli_fetch_assoc($result)){
    $RECORD_NUMBER          =$row['RECORD_NO'];
    $BOOK_NO                =$row['BOOK_NO'];
    $PAGE_NO                =$row['PAGE_NO'];
    $REG_NO                 =$row['REG_NO'];
    $SERIES_NO              =$row['SERIES_NO'];
    $NAME_OF_DECEASED       =$row['NAME_OF_DECEASED'];
    $RESIDENCE              =$row['RESIDENCE'];
    $AGE                    =$row['AGE'];
    $PARENTS_WIFE_HUSBAND   =$row['PARENTS_WIFE_HUSBAND'];
    $DATE_OF_DEATH          =$row['DATE_OF_DEATH'];
    $PLACE_OF_BURIAL        =$row['PLACE_OF_BURIAL'];
    $DATE_OF_BURIAL         =$row['DATE_OF_BURIAL'];
    $SACRAMENTS             =$row['SACRAMENTS'];
    $PRIEST                 =$row['PRIEST'];

    // Write to file 
    $file_arr = array($RECORD_NUMBER,$BOOK_NO,$PAGE_NO,$REG_NO,$SERIES_NO,$NAME_OF_DECEASED,$RESIDENCE,$AGE,$PARENTS_WIFE_HUSBAND,$DATE_OF_DEATH,$PLACE_OF_BURIAL,$DATE_OF_BURIAL,$SACRAMENTS,$PRIEST);
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
