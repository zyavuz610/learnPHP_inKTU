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
    <hr>

  </body>
</html>