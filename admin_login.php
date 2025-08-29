<?php
include 'connect.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admins WHERE username = '$username' AND pword = '$password'";
$check = $conn->query($sql)->num_rows;

if($check > 0){
    $logintype = $conn->query($sql)->fetch_array()['login_type'];
    $userid = $conn->query($sql)->fetch_array()['id'];
    $image = $conn->query($sql)->fetch_array()['avata'];
    session_start();
    $_SESSION['name'] = $username;
    $_SESSION['logintype'] = $logintype;
    $_SESSION['id'] = $userid;
    $_SESSION['image'] = $image;
    echo "ok";
}else{
    echo "Incorrect username or password";
}
?>