<!DOCTYPE html>
<html>
<body>
<?php
      session_start();
      if(!isset($_SESSION['user'])){
        echo '<a href="login.php">Login</a>';
      }
      else{
        echo "Hoşgeldiniz, ".$_SESSION['user']."<br>";
        echo "<a href='logout.php'>Çıkış Yap</a>";
      }
  ?>  
    <hr>
<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session değişkenleri setlendi.";
?>
<br>
<a href="index.php">Anasayfa</a>
</body>
</html>