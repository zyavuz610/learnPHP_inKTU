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
        $str1 = (int)$_POST["text1"];
        $str2 = (int)$_POST["text2"];
        echo var_dump($str1), "<br>";
        $c1 = 0.4;
        $c2 = 1-$c1;
        $average = $c1*$str1 + $c2*$str2;
        echo $average;
        echo "<br>";
        /*
        if($average < 45){
          echo "Kaldı";
        }
        else{
          echo "Geçti";
        }
        */
        /*
        0-35 = FF
        36-40 = DD
        41-44 = DC
        45-60 = CC
        61-70 = CB
        71-80 = BB
        81-90 = BA
        91-100 = AA
        */
//-----------------------------------------------------        
/*
        // mantıksal olarak eksik, ancak doğru olan kod
        if($average >= 0 && $average <= 35){
          $grade = "FF";
        }
        elseif($average > 35 && $average <= 40){
          $grade = "DD";
        }
        elseif($average > 40 && $average <= 44){
          $grade = "DC";
        }
        elseif($average > 44 && $average <= 60){
          $grade = "CC";
        }
        elseif($average > 60 && $average <= 70){
          $grade = "CB";
        }
        elseif($average > 70 && $average <= 80){
          $grade = "BB";
        }
        elseif($average > 80 && $average <= 90){
          $grade = "BA";
        }
        elseif($average > 90 && $average <= 100){
          $grade = "AA";
        }
        else{
          $grade = "E";
        }
        */
//------------------------------------------------
/*
        if($average < 0 or $average >100){
          $grade = "E";
        }
        elseif($average <= 35){
          $grade = "FF";
        }
        elseif($average <= 40){
          $grade = "DD";
        }
        elseif($average <= 44){
          $grade = "DC";
        }
        elseif($average <= 60){
          $grade = "CC";
        }
        elseif($average <= 70){
          $grade = "CB";
        }
        elseif($average <= 87){
          $grade = "BB";
        }
        elseif($average <= 90){
          $grade = "BA";
        }
        else{
          $grade = "AA";
        }
        echo "<br>";
        echo "Harfli Not: $grade";
        */
//-------------------------------------------------------
  /*
    Döngüler tekrarlı ifadeleri oluşturmak için kullanılır.
    - 4 bileşeni vardır. Yani 4 unsuru dikkate almak gerekir.
      1) döngü nerden başlayacak?
      2) nerde bitecek?, bitiş şartı (devam etme şartı)
      3) her döngü sonunda yapılacak işlem (artış)
      4) döngünün gövdesi, asıl yapılacak işlem
  */
//-----------------------------------------------------
  /*
  // problem: 1-100 arası sayıları ekrana yazdır.
    for($i=1; $i<=50; $i=$i+2 ){
      echo $i;
      echo ",";
    }
  */
//-------------------------------------------------------
/*     
 // verilen sayının bölenlerini bulma
  // verilen sayı yukarıda alınan $str1 olsun
  $num = $str1;
  $sum = 0;
  for($i=1; $i<=$num; $i++){
    if($num % $i == 0){
      echo $i;
      echo ",";
      $sum += $i;
    }
  }
  echo "<br>";
  echo "Toplam: $sum";
  echo "<br>";
  */
//---------------------------------------------------------
// döngü ile html içeriği oluşturma (örn;tablo)
  echo "<table border='1'>";
    echo "<tr>";
      echo "<th>";
        echo "Ad";
      echo "</th>";
      echo "<th>";
        echo "Soyad";
      echo "</th>";
      echo "<th>";
        echo "Telefon";
      echo "</th>";
      echo "<th>";
        echo "Eposta";
      echo "</th>";
    echo "</tr>";
    for($i=0;$i<$str1;$i++){
      echo "<tr>";
        echo "<td>";
          echo "Ad-$i";
        echo "</td>";
        echo "<td>";
          echo "Soyad-$i";
        echo "</td>";
        echo "<td>";
          echo "Telefon-$i";
        echo "</td>";
        echo "<td>";
          echo "Eposta-$i";
        echo "</td>";
      echo "</tr>";
    }
  echo "</table>";
?> 
  </body>
</html>