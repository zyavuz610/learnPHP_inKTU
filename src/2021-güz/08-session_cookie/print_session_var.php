<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
    print_r($_SESSION); // tüm session değişkenlerini yazdırır.
?>
<hr>

<br>
<a href="index.php">Anasayfa</a>
</body>
</html>