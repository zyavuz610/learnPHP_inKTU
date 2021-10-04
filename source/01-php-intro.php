<?php
/* 
  - PHP Dili özellikleri
    - genel yazım kuralları, syntax
      - ifadelerin sonuna ; konur
      - büyük küçük harf duyarlıdır.
    - yorum satırları
      - //, tek satır 
      - / * ... * / blok
    - değişken tanımlama, isimlendirme kuralları
    - echo, print
    - veri türleri
*/
?>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      $çolor = "red"; // renk değişkeni
      $COLOR = "blue"; /* başka bir değişken*/
      //$coLOR = "white"; /* başka bir değişken*/
      $a = 1; # bu da başka bir yorum
      echo "My car is " . $çolor . "<br>";
      echo "My house is " . $COLOR . "<br>";
      echo "My boat is " . $coLOR . "<br>";
      print "My boat is " . $coLOR . "<br>";
      print("My boat is " . $coLOR . "<br>");
      $hX = 1;
      print "<h" . $hX . ">YBS</h" . $hX . ">";
      // out: <h6>YBS</h6>   1071, pj7sybv
      $hX = 3;
      echo "<h" , $hX , ">KTÜ</h" , $hX , ">";
     ?> 
     <hr>
     <h3>2. oturum</h3>
     <?php
      /*
        PHP Değişken türleri
        - boolean, True, False
        - integer, -INF, +INF
        - float,
        - string
        - NULL, nil
        - array*
      */
      $isHere = 5>30;
      echo "The student is here: ", $isHere , "<br>";
      $year = 2021;
      $birthDay = 2000;
      $age = $year - $birthDay;
      echo "The average age of the student is " . $age;
      echo "The average age of the student is $age";
      echo "The average age of the student is " . $year - $birthDay;
      echo "The average age of the student is $year - $birthDay";
      $parity = 8.91;
      $amount = 5225;
      $total = $parity * $amount;
      echo "My total money is $total TL";
     ?>

  </body>
</html>
