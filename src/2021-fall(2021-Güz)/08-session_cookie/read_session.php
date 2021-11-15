<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favori renk: " . $_SESSION["favcolor"] . ".<br>";
echo "Favori hayvan: " . $_SESSION["favanimal"] . ".";
?>
<hr>
<a href="print_session_var.php">Session Değişkenlerini Yaz</a>
</body>
</html>
