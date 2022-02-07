<?php
include 'config.php';

$qname = $_POST['qname'];

$sql = "INSERT INTO question (q_name) VALUES ('$qname')";

mysqli_query($conn, $sql);
$last_id = mysqli_insert_id($conn);
if($last_id > 0)
{
    echo "Soru eklendi. " . $last_id;
    header("Location: questions.php");
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>