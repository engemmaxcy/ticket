<?php
include 'connect.php';
$tick = rand(1000000, 10000000);
$send = $conn->query("INSERT INTO tickets (ticketno, status) VALUE ('$tick', '0')");
header("Location: landing.php");

?>