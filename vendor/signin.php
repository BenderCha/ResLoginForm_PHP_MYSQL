<?php
    session_start();
    require_once 'config.php';

    $full_name = $_POST['full_name'];
    
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `full_name` = '$full_name' AND `password` = '$password'");
    if(mysqli_num_rows($check_user)>0)
    {
        //code
        $user_full = mysqli_fetch_assoc($check_user);
        $_SESSION['users'] = [
            "id" => $user_full['id'],
            "full_name" => $user_full['full_name'],
            "email" => $user_full['email'],
            "avatar" => $user_full['avatar']
        ];
        header("Location: ../profile.php");
    } else {
        $_SESSION['messages'] = "Логин или парол неверный!!!";
        header("location: ../index.php");
    }
?>
