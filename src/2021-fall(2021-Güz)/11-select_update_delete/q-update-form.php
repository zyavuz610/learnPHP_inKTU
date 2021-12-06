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
    <form action="q-update.php" method="post">
        <table>
            <tr>
                <td>ID</td>
                <td><input type="text" name="q_id" value="<?php echo $q_id; ?>" readonly="readonly"></td>
            </tr>
            <tr>
                <td>Soru:</td>
                <td><input type="text" name="qname"  value="<?php echo $q_name; ?>"></td>
            </tr>
            <tr>
                <td>Tarih</td>
                <td><input type="text" name="q_date" value="<?php echo $q_date; ?>" readonly="readonly"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Güncelle"></td>
            </tr>
        </table>
    </form>
</body>
</html>