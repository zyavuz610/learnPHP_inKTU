<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>
<hr>
<a href="print_session_var.php">Print Session</a>
</body>
</html>