<?php
// DB bağlantısı
/*
DB bağlantısı 3 şekilde yapılabilir
1. PDO, nesne tabanlı
2. mysqli
- mysqli_connect (prosedürel)
- nesne tabanlı

biz dersimizde mysqli nin prosedürel fonksiyonlarını kullanacağız
*/
include 'config.php';

$fullname = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "INSERT INTO user(fullname, address, email)
        VALUES ('$fullname', '$address', '$email')";

mysqli_query($conn, $sql);
echo "İçerik eklendi <br>";


mysqli_close($conn);
?>