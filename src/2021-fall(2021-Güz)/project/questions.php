<?php
    include "session-control.php";
?>
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
            $user_id = $_SESSION['user_id'];
            if($num_rows > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $q_id = $row['id'];
                    $sql = "SELECT COUNT(*) as count FROM likes WHERE q_id = $q_id AND type=1";
                    $result2 = mysqli_query($conn,$sql);
                    $row2 = mysqli_fetch_assoc($result2);
                    $like = $row2['count'];
                    echo '<tr>';
                        echo "<td>$q_id</td>";
                        echo "<td>";
                            echo $row['q_name'];
                            echo" <br> ____________ <br>";
                            $sql3 = "SELECT * FROM likes WHERE q_id = $q_id AND user_id=$user_id AND type=1";
                            $result3 = mysqli_query($conn,$sql3);
                            $num_rows3 = mysqli_num_rows($result3);
                            if($num_rows3 > 0){
                                echo "Beğen($like)";
                            }else{                                
                                echo "<a href='q-like.php?q_id=$q_id&user_id=$user_id'>Beğen</a>($like)";
                            }
                            echo " - ";
                            echo "Beğenme(0)";
                        echo "</td>";
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