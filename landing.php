<?php include "connect.php";
session_start();
if(!isset($_SESSION['name'])){
    header("Location: login.php");
}
include 'header.php';
if($_SESSION['logintype'] == 1){
    include 'record.php';
}else{
    include 'check.php';
}
include 'footer.php';
?>