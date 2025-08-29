<?php include "connect.php";

$tick = $_POST['tick'];
$check = $conn->query("SELECT * FROM tickets WHERE ticketno = '$tick'")->num_rows;

if($check > 0){
    $check1 = $conn->query("SELECT * FROM tickets WHERE ticketno = '$tick' AND status=0")->num_rows;
    if($check1 > 0){
        $emma = $conn->query("UPDATE tickets SET status=1 WHERE ticketno = '$tick'");
        echo "ok";
    } else {
        echo "This Ticket has been used";
    }
} else {
    echo "Ticket is fake, call security";
}
?>
