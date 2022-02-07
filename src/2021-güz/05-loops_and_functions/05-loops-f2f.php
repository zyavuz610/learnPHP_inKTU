<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form action="#" method="POST">
      1 : <input type="text" name="text1"> <br>
      2 : <input type="text" name="text2"> <br>
      <input type="submit" value="Gönder">
    </form>
    <?php 
      $param1 = $_POST["text1"];
      $param2 = $_POST["text2"];
      echo " Param1: $param1 <br>";
      echo " Param2: $param2 <br>";
      /*
      Döngünün 4 bileşeni
      1. başlangıç
      2. devam şartı
      3. artış miktarı
      4. döngünün gövdesi

      while dögüsünde sadece döngüye devam şartı ve döngü gövdesi mevcut
      */
      while($param1 == NULL){
        echo "1. parametre girilmedi <br>";
        $param1 = 1;
      }

      $x = 1;

      while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
      }

      $x = 1;

      do {
        echo "The number is: $x <br>";
        $x++;
      } while ($x <= 5);

      for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
      }

      $colors = array("red", "green", "blue", "yellow");

      foreach ($colors as $value) {
        echo "$value <br>";
      }
      /* python karşılığı
      for value in colors:
        ...
      */



      for ($x = 0; $x < 10; $x++) {
        echo "The number is: $x <br>";
        if ($x == 4) {
          break;
        }
        echo "The number is: $x <br>";
      }

      //--------------------------------------
      // PHP Function

      function my_print($param){
        echo "<hr>";
        echo "Sonuç: ";
        echo $param;
        echo "<hr>";
      }

      my_print("Merhaba YBS");

      function my_add($param1=15, $param2=10){
        $result = 1 + $param1 + $param2;
        return $result;
      }

      $num1 = 10;
      $num2 = 34;
      echo my_add(10,34);
      echo my_add(20,35);
      echo my_add();


      function my_fact($n){
        $i = 1;
        $f = 1;
        while($i<=$n){
          $f *= $i;
          $i++;
        }
        return $f;
      }

      my_print(my_fact(5));
    ?> 
  </body>
</html>