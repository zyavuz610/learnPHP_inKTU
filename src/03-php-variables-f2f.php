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
        //echo $_POST["text1"], " - ", $_POST["text2"]; 
        $str1 = $_POST["text1"];
        $str2 = $_POST["text2"];
        if(strlen($str1) != 0){
          echo "Karakter Sayısı: " , strlen($str1);
          echo "<br>";
          echo "Kelime Sayısı: " , str_word_count($str1);
          echo "<br>";
          echo "Tersi: " , strrev($str1);
          echo "<br>";
          echo "strpos: " , strpos($str1,$str2);
          echo "<br>";
          echo "str_replace: " , str_replace($str2,"Emin",$str1);
        }
    ?> 
    <hr>
    <?php
      $str1 = $_POST["text1"];
      $str2 = $_POST["text2"];
      echo "<br>", var_dump($str1), "<br>";
      if (is_numeric($str1)){ // str1 sayısal karakterlerden mi?
        echo "Giriş uygun";
      }
      else{
        echo "bir daha deneyin.";
      }
    ?>
    <hr>
    <?php
      // text1 e girilen bir sene kaçıncı yüzyıla action
      $str1 = $_POST["text1"];
      if(is_numeric($str1)){
        $yy = (int)(((int)$str1-1)/100)+1;
        echo $str1 , "-->", $yy;
      }
      else{
        echo "bir daha deneyin.";
      }
    ?>
    <hr>
    <?php
      $str1 = $_POST["text1"];
      $str2 = $_POST["text2"];
      if($str1[0] == $str2[0]){
        echo "1. soru doğru. <br>";
      }
      else{
        echo "1. soru yanlış. <br>";
      }
    ?>
    <hr>
    <?php
      echo(pi()); // returns 3.1415926535898
      echo(min(0, 150, 30, 20, -8, -200));  // returns -200
      echo(max(0, 150, 30, 20, -8, -200));  // returns 150
      echo(abs(-6.7));  // returns 6.7
      echo(sqrt(64));  // returns 8
      echo(round(0.60));  // returns 1
      echo(round(0.49));  // returns 0
      echo(round(0.477,2));  // returns 0
    ?>
  </body>
</html>
