<?php
include "../includes/conn.php";
$filename = 'List of Conversion Records-'.date('Y-m-d').'.csv';

$query ="SELECT `RECORD_NO`, `CHILD_NAME`, `DATE_OF_RITE`, `PLACE_OF_RECEPTION`, `DATE_OF_BIRTH`, `PLACE_OF_BIRTH`, `FATHER_NAME`, `MOTHER_NAME`, `MINISTER`, `LIST_OF_SPONSORS`, `DATE_OF_BAPTISM`, `PLACE_OF_BAPTISM`, `DENOMINATION`, `NOTATIONS`, `DATE_CREATED`, `SERIES_NO`, `BOOK_NO`, `PAGE_NO`, `REG_NO` FROM `tbl_conversion` ORDER BY `CHILD_NAME` ASC";
$result = mysqli_query($conn,$query);
$file_arr = array();

// file creation
$file = fopen($filename,"w");

$file_arr = array("RECORD NUMBER","BOOK NO","PAGE NO","REG NO","SERIES NO","NAME OF CHILD","DATE OF RITE","PLACE OF RECEPTION","DATE OF BIRTH","PLACE OF BIRTH","NAME OF FATHER","NAME OF MOTHER","NAME OF MINISTER","DATE OF BAPTISM","PLACE OF BAPTISM","DENOMINATION"); 
fputcsv($file,$file_arr); 
while($row = mysqli_fetch_assoc($result)){
    $RECORD_NUMBER          =$row['RECORD_NO'];
    $BOOK_NO                =$row['BOOK_NO'];
    $PAGE_NO                =$row['PAGE_NO'];
    $REG_NO                 =$row['REG_NO'];
    $SERIES_NO              =$row['SERIES_NO'];
    $CHILD_NAME             =$row['CHILD_NAME'];
    $DATE_OF_RITE           =$row['DATE_OF_RITE'];
    $PLACE_OF_RECEPTION     =$row['PLACE_OF_RECEPTION'];
    $DATE_OF_BIRTH          =$row['DATE_OF_BIRTH'];
    $PLACE_OF_BIRTH         =$row['PLACE_OF_BIRTH'];
    $FATHER_NAME            =$row['FATHER_NAME'];
    $MOTHER_NAME            =$row['MOTHER_NAME'];
    $MINISTER               =$row['MINISTER'];
    $DATE_OF_BAPTISM        =$row['DATE_OF_BAPTISM'];
    $PLACE_OF_BAPTISM	    =$row['PLACE_OF_BAPTISM'];
    $DENOMINATION           =$row['DENOMINATION'];

    // Write to file 
    $file_arr = array($RECORD_NUMBER,$BOOK_NO,$PAGE_NO,$REG_NO,$SERIES_NO,$CHILD_NAME,$DATE_OF_RITE,$PLACE_OF_RECEPTION,$DATE_OF_BIRTH,$PLACE_OF_BIRTH,$FATHER_NAME,$MOTHER_NAME,$MINISTER,$DATE_OF_BAPTISM,$PLACE_OF_BAPTISM, $DENOMINATION);
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
