<!--
  Bu içerik dersin uzaktan eğitim şubesinde anlatılmıştır.
-->
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form action="index.php" method="POST">
      Text1 : <input type="text" name="text1"> <br>
      Text2 : <input type="text" name="text2"> <br>
      <input type="submit" value="Gönder">
    </form>
    <?php 
        //echo $_POST["text1"], " - ", $_POST["text2"], "<br>"; 
        $str1 = $_POST["text1"];
        $str2 = $_POST["text2"];
        echo $_POST["text1"], " - ", $_POST["text2"]; 

        // String fonksiyonları
        if(strlen($str1) != 0){
          echo "Karakter Sayısı: " , strlen($str1);
          echo "<br>";
          echo "Kelime Sayısı: " , str_word_count($str1);
          echo "<br>";
          echo "Tersi: " , strrev($str1);
          echo "<br>";
          echo "strpos: " , strpos($str1,$str2);
          echo "<br>";
          echo "str_replace: " , str_replace($str2,"mandalina",$str1);
        }
    ?> 
    <hr>
    <?php
    /*
      echo "<br>", var_dump($str1), "<br>";
      if (is_numeric($str1)){ // str1 sayısal karakterlerden mi?
        echo "Giriş uygun";
      }
      else{
        echo "bir daha deneyin.";
      }
      echo "<br>", var_dump($str1), "<br>";
      $str1 = (float)$str1; // 
      echo "<br>", var_dump($str1), "<br>";
      if (is_float($str1)){ // str1 float bir sayı mı?
        echo "Giriş uygun";
      }
      else{
        echo "bir daha deneyin.";
      }

      echo "<br>";
      $x = 1.9e411;
      var_dump($x);
      if (is_infinite($x)){ 
        echo "Giriş uygun";
      }
      else{
        echo "bir daha deneyin.";
      }
      */
    ?>
    <hr>
    <?php
      // text1 e girilen bir sene kaçıncı yüzyıla action
      echo "Girdiğiniz değer: $str1 <br>";
      if(is_numeric($str1)){
        $yy = (int)(((int)$str1-1)/100)+1;   
        echo $str1 , "-->", $yy;
      }
      else{
        echo "bir daha deneyin.";
      }
    /*
      1700 - 17
      1701 - 18
      1799 - 18
      1800 - 18
      */
    ?>
    <hr>
    <?php
      $str1 = $_POST["text1"];    // öğrenci cevabı
      $str2 = $_POST["text2"];    // doğru cevap
      if($str1[0] == $str2[0]){
        echo "1. soru doğru. <br>";
      }
      else{
        echo "1. soru yanlış. <br>";
      }
    /*
      */
    ?>
    <hr>
    <?php
      // pi sayısı
      echo(pi()); // returns 3.1415926535898
      echo "<br>";
      // verilenlerden en küçüğü seçer
      echo(min(0, 150, 30, 20, -8, -200));  // returns -200
      echo "<br>";
      // verilenlerden en büyüğü seçer
      echo(max(0, 150, 30, 20, -8, -200));  // returns 150
      echo "<br>";
      // mutlak değer
      echo(abs(-6.7));  // returns 6.7
      echo "<br>";
      // karekök
      echo(sqrt(64));  // returns 8
      echo "<br>";
      // yuvarlama, 2. parametre olmadığı için en yakın tam sayıya yuvarlar
      echo(round(0.60));  // returns 1
      echo "<br>";
      // yuvarlama, 2. parametre olmadığı için en yakın tam sayıya yuvarlar
      echo(round(0.49));  // returns 0
      echo "<br>";
      // yuvarlama, 2. parametre olduğu için vrgülden sonra o kadar değere göre yuvarlar
      echo(round(0.477,2));  // returns 0
    /*
      */
    ?>
    <hr>
    <?php
      $ex1 = 2 == 3;
      $ex2 = 5;
      $ex3 = 0;

      $x = $ex1 ? $ex2 : $ex3;
      echo $x;

      if($ex1){
        $x = $ex2;
      }
      else{
        $x = $ex3;
      }
    ?>
  </body>
</html>
