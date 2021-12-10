<?php
    include "session-control.php";
?>
<?php
$username = $_POST['username'];
$password = md5($_POST['password']);

echo $username . " " . $password . "<br>";
include 'config.php'; // vt bağlantısı

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);    // vt'den sorgula
$num_rows = mysqli_num_rows($result);   // sorgu sonucu kaç satır döndüreceğini bul
if($num_rows >= 1){
    echo "Login Successful";
    $_SESSION['username'] = $username;
    header("Location: index.php");
}else{
    echo "Login Failed" . $sql;
}
?>