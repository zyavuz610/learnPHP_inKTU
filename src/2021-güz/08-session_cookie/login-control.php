<?php
    $users = Array(
        'admin' => 'admin',
        'user' => 'user',
        'guest' => 'guest',
        'ybs' => 'ybs'
    );

    $user = $_POST['username'];
    $pass = $_POST['password'];
    if(!empty($users[$user])) {
        if($pass == $users[$user]) {
            session_start();
            $_SESSION['user'] = $user;
            header('Location: index.php'); // otomatik yönlendirme
            exit;
        }
        else{
            echo "Kullanıcı adı doğru, şifre hatalı!";
        }
    }
    else{
        echo "Kullanıcı adı veya şifre hatalı!";
    }
?>