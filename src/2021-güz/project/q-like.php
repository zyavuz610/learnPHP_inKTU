<?php
    include "session-control.php";
    include "config.php";

    $q_id = $_GET['q_id'];
    $user_id = $_GET['user_id'];
    $sql = "INSERT INTO `likes` (`user_id`, `q_id`, `type`) VALUES ($user_id, $q_id, 1);";
    //echo $sql;
    $result = mysqli_query($conn, $sql);
    header("Location: questions.php");
    
?>