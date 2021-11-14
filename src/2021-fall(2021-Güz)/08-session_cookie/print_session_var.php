<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
print_r($_SESSION);
?>
<hr>
<a href="modify_session_var.php">Session Düzenle</a>
<hr>
<a href="destroy_session.php">Session Değişkenlerini Sil</a>
</body>
</html>