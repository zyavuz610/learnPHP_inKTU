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
<a href="modify_session_var.php">Modify Session</a>
<hr>
<a href="destroy_session.php">Destroy Session</a>
</body>
</html>