<?php
$cookie_name = "user";
$cookie_value = "Zafer Yavuz";
$bg_color = "yellow";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie("bg_color", $bg_color, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body bgcolor="<?php echo  $_COOKIE["bg_color"]; ?>">
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
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<hr>
<a href="index.php">Anasayfa</a>
</body>
</html>