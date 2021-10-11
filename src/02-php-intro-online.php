<html>
  <head>
    <title>PHP'ye Giriş </title>
  </head>
  <body>
    <h1>PHP'ye Giriş</h1>
    <p>Merhaba PHP </p>
    <?php
    // Uzaktan Anlatılan Ders
      $color = "red"; // bu tek satırlı bir yorumdur
      $COLOR = "blue"; # bu da tek satırlı yorumdur
      echo "My car is " . $color . "<br>";
      echo "My house is " . $COLOR . "<br>";
      echo "My boat is " . $coLOR . "<br>";
      $xx = 15 /* + 5 */ + 10;
      /*
        buraya çok satırlı yorum eklenebilir.
      */
      $age = 10; // geçerli bir değişken adı
      $num1 = 20.5; # geçerli bir değişken adı
      $_123num = 20;  //  bu geçerli bir değişken değil

      $txt = "W3Schools.com";
      echo "I love $txt! ";  // değişkeni görür
      echo 'I love $txt!';  // değişkeni görmez
      echo "I love " . $txt . "! ";
      echo 'I love ' . $txt . '! ';
      echo 'I love ' , $txt , '!';

      echo "<h2>PHP is Fun!</h2>";
      echo "Hello world!<br>";
      echo "I'm about to learn PHP!<br>";
      echo "This ", "string ", "was ", "made ", "with multiple parameters.";
      print "Study PHP at " . $txt . "<br>";
      // print "Study Php at " , $txt , "<br>"; // HATA

      /*
          Veri Türleri
           - NULL
           - Boolean, true (1), false(0)
           - integer, 10,20, 5, 23, -11 ...
           - float, double, 2.5, -1.5 ....
           - array, (1,2,3), ("a","ali","Php") ...
      */
      var_dump($x);
      $x = 10.365;
      $x = 10;
      $x = true;
      $x = "bir değer";
      $x = array("1","2",3);
      var_dump($x);
    ?>
  </body>
</html>
