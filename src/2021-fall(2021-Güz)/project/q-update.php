<?php
    include "session-control.php";

include 'config.php';

$qname = $_POST['qname'];
$q_id = $_POST['q_id'];

$sql = "UPDATE question SET q_name='$qname' WHERE id=$q_id;";
//echo $sql;
mysqli_query($conn, $sql);
header("Location:questions.php");
?>