<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

    <?php
      function my_print($param="Merhaba"){
        echo "<hr>";
        echo "Sonuç: ";
        echo $param;
        echo "<hr>";
      } 
      
      function islem($param1,$param2){
        for($i=0;$i<$param2;$i++){
          $sira=$i;
          echo "$sira: <input type='$param1'> <br>";
        }
      }


      $param1 = $_GET["type"];
      $param2 = (int)$_GET["num"];
      my_print($param1);
      my_print($param2);
      islem($param1,$param2);
    ?> 
  </body>
</html>