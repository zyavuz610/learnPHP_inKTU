<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>
<hr>
<a href="print_session_var.php">Print Session</a>
<hr>
</body>
</html>