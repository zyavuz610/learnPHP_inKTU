<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// session değişkenini sil
session_unset();

// oturumu sonlandır
session_destroy();
?>
<hr>
<a href="index.php">Anasayfa</a>
</body>
</html>