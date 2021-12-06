<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// session değişkenlerini sil
session_unset();

// oturumu kapat
session_destroy();
?>
<hr>
<a href="index.php">Çıkış Yapıldı</a>
</body>
</html>