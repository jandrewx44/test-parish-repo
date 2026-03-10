<?php
include "includes/session.php";

$sql="DELETE FROM history";
$query =$conn->query($sql);

header('location:history.php?home=history');

?>