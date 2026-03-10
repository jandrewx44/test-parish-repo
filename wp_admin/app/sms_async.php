<?php
// Lightweight endpoint to send SMS without blocking the main request
// Usage: POST mobile=<number>&message=<text>
include "includes/conn.php";

// Basic validation
$MOBILE = isset($_POST['mobile']) ? $_POST['mobile'] : '';
$NOTFICATION_SMS = isset($_POST['message']) ? $_POST['message'] : '';

if ($MOBILE !== '' && $NOTFICATION_SMS !== '') {
    require_once "sms_script.php";
    echo "ok";
} else {
    http_response_code(400);
    echo "missing";
}
