<?php
$title = 'Index';
?>
<html>
    <head>
        <title>
            <?php echo $title; ?>
        </title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            session_start();
            if(isset($_SESSION['username'])){
                echo '<p>Merhaba, ' . $_SESSION['username'] . '</p>';
                echo '<p><a href="logout.php">Çıkış Yap</a></p>';
                echo '<p><a href="questions.php">Sorular</a></p>';
            }
            else{
                echo '<p>Giriş yapmadıysanız önce giriş yapmalısınız...</p>';
                echo '<p><a href="login.php">Giriş</a></p>';
            }
        ?>
    </body>
</html>