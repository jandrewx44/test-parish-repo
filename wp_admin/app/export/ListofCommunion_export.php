<?php
include "../includes/conn.php";
$filename = 'List of Communion Records-'.date('Y-m-d').'.csv';

$query ="SELECT `RECORD_NO`, `CHILD_NAME`, `DATE_OF_BAPTISM`, `PLACE_OF_BAPTISM`, `FATHER_NAME`, `MOTHER_NAME`, `DATE_OF_COMMUNION`, `PLACE_OF_COMMUNION`, `NAME_OF_MINISTER`, `NOTATIONS`, `SERIES_NO`, `BOOK_NO`, `PAGE_NO`, `REG_NO` FROM `tbl_communion` ORDER BY `CHILD_NAME` ASC";
$result = mysqli_query($conn,$query);
$file_arr = array();

// file creation
$file = fopen($filename,"w");

$file_arr = array("RECORD NUMBER","BOOK_NO","PAGE_NO","REG_NO","SERIES_NO","NAME OF CHILD","DATE OF BAPTISM","PLACE OF BAPTISM","NAME OF FATHER","NAME OF MOTHER","DATE OF COMMUNION","PLACE OF COMMUNION","NAME OF MINISTER","NOTATIONS");
fputcsv($file,$file_arr); 
while($row = mysqli_fetch_assoc($result)){
    $RECORD_NUMBER          =$row['RECORD_NO'];
    $BOOK_NO                =$row['BOOK_NO'];
    $PAGE_NO                =$row['PAGE_NO'];
    $REG_NO                 =$row['REG_NO'];
    $SERIES_NO              =$row['SERIES_NO'];
    $CHILD_NAME             =$row['CHILD_NAME'];
    $DATE_OF_BIRTH          =$row['DATE_OF_BAPTISM'];
    $PLACE_OF_BIRTH	        =$row['PLACE_OF_BAPTISM'];
    $FATHER_NAME            =$row['FATHER_NAME'];
    $MOTHER_NAME            =$row['MOTHER_NAME'];
    $DATE_OF_COMMUNION      =$row['DATE_OF_COMMUNION'];
    $PLACE_OF_COMMUNION     =$row['PLACE_OF_COMMUNION'];
    $NAME_OF_MINISTER       =$row['NAME_OF_MINISTER'];
    // Write to file 
    $file_arr = array($RECORD_NUMBER,$BOOK_NO,$PAGE_NO,$REG_NO,$SERIES_NO,$CHILD_NAME,$DATE_OF_BIRTH,$PLACE_OF_BIRTH,$FATHER_NAME,$MOTHER_NAME,$DATE_OF_COMMUNION,$PLACE_OF_COMMUNION,$NAME_OF_MINISTER);
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
