<?php
include 'connect.php';
$conn->query("TRUNCATE TABLE tickets");
header("Location: index.php?msg=deleted");
header("Location: landing.php");
?>
