<?php
    include "session-control.php";
?>
<?php
        $q_id = $_GET['id'];
        include 'config.php';
        $sql = "DELETE FROM question WHERE id = $q_id";
        $result = mysqli_query($conn,$sql);
        header("Location: questions.php");
    ?>