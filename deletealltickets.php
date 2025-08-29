<?php
include 'connect.php';
$send = $conn->query("TRUNCATE table tickets");
header("Location: index.php");

?>