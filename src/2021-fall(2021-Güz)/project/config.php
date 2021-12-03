<?php
$servername = "localhost"; // 127.0.0.1
$username = "ybs2";
$password = "ybs2";
$dbname = "ybs2";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// bağlantı kontrolü
if ( !$conn ) {
    die("Bağlantı kurulamadı: " . mysqli_connect_error());
}
mysqli_query($conn, "set names 'utf8'");
?>