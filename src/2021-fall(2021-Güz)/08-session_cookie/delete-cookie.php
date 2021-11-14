<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
<html>
<body>

    <?php
        echo "'user' isimli cookie silindi.";
    ?>
    <hr>
    <a href="index.php">Anasayfa</a>
</body>
</html>