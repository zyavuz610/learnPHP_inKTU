<html>
  <head>
    <title>Oturum Yönetimi</title>
  </head>
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
      echo "Merhaba Dünya <br>";
      echo "Oturum yönetimi sayfasına hoşgeldiniz... <br>";
    ?>
    
    <hr>
    <a href="set-cookie.php">Cookie Ayarlama</a>
    <br>
    <a href="delete-cookie.php">Cookie Sil</a>

    <hr>
    <a href="set-session.php">Session Ayarlama</a>
    <br>
    <a href="read_session.php">Session Kontrol</a>
    <br>
    <a href="print_session_var.php">Session Değişkenlerini Yaz</a>
    <br>
  <a href="modify_session_var.php">Session Düzenle</a>
<br>
<a href="destroy_session.php">Session Değişkenlerini Sil</a>
  </body>
</html>