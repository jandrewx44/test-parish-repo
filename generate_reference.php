<?php
include "wp_admin/app/includes/conn.php";

function next_ref($conn, $bookDate){
    $prefix = "REF";
    $ts = strtotime($bookDate ?: date('Y-m-d'));
    $month = date("m", $ts);
    $year = date("y", $ts);
    $pattern = "$prefix-$month$year-%";
    $stmt = $conn->prepare("SELECT AUTO_NUMBER FROM tbl_autonumber WHERE AUTO_NUMBER LIKE ? ORDER BY AUTO_NUMBER DESC LIMIT 1");
    $stmt->bind_param('s', $pattern);
    $stmt->execute();
    $res = $stmt->get_result();
    $last = $res && $res->num_rows ? $res->fetch_assoc()['AUTO_NUMBER'] : null;
    if(!$last){
        return "$prefix-$month$year-0001";
    }
    $offset = strlen($prefix) + 6;
    $idd = intval(substr($last, $offset));
    $id = str_pad($idd + 1, 4, "0", STR_PAD_LEFT);
    return "$prefix-$month$year-$id";
}

header('Content-Type: application/json');
$date = isset($_POST['date']) ? $_POST['date'] : '';
echo json_encode(['number' => next_ref($conn, $date)]);
