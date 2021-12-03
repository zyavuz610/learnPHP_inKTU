<?php
include "config.php";
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '$username' AND password = MD5('$password')";
$result = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($result);
if($num_rows >= 1){
    echo "Login Successful";
}else{
    echo "Login Failed";
}
?>