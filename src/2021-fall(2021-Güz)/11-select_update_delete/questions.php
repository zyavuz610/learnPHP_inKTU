<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorular</title>
</head>
<body>
<?php
include 'config.php';

$sql = "SELECT * FROM question";
$result = mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($result);
?>
    <p>
        <a href="q-insert-form.php">Soru Ekle</a>
        
    </p>
    <p> <a href="logout.php">Çıkış Yap</a></p>
    <hr>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Soru</th>
            <th>Eklenme Tarihi</th>
            <th>İşlemler</th>
        </tr>
        <?php    
            if($num_rows > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo '<tr>';
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['q_name']."</td>";
                        echo "<td>".$row['q_date']."</td>";
                        echo '<td>';
                            echo '<a href="q-update-form.php?id=' . $row['id'] . '">Düzenle</a> - ';
                            echo '<a href="q-delete-form.php?id=' . $row['id'] . '">Sil</a>';
                        echo '</td>';
                    echo '</tr>';
                }
            }
            ?>
    </table>
</body>
</html>