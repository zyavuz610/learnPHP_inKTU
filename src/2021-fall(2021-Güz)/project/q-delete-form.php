<?php
    include "session-control.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soru Ekle</title>
</head>
<body>
    <?php
        $q_id = $_GET['id'];
        include 'config.php';
        $sql = "SELECT * FROM question WHERE id = $q_id";
        $result = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($result);
        if($num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $q_name = $row['q_name'];
            $q_date = $row['q_date'];
        }
    ?>
    <table>
        <tr>
            <td>Soru</td>
            <td><?php echo $q_name; ?></td>
        </tr>
        <tr>
            <td>Tarih</td>
            <td><?php echo $q_date; ?></td>
        </tr>
    </table>
    <hr>
    <h2>Soruyu silmek istediğinizden emin misiniz?</h2>
    <h1>
        <a href="q-delete.php?id=<?php echo $q_id; ?>">
            Evet
        </a>
    </h1>
    <p>
        <a href="questions.php">Hayır</a>
    </p>
    
</body>
</html>