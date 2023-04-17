<?php
    session_start();
    require_once 'config.php';

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password-confirm'];

    

    if($password === $password_confirm)
    {
        $path_avatar = 'uploads/' .time(). $_FILES['avatar']['name'];
        if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../'.$path_avatar))
        {
            $_SESSION['messages'] = 'Ошибка при загрузка сообщения';
            header('Location: ../registration.php');
        }
        //print_r($connect);
        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `users` 
                                (`id`, `full_name`, `email`, `password`, `avatar`)
                         VALUES (NULL, '$full_name', '$email', '$password', '$path_avatar')
                    ");				
        $_SESSION['messages'] = 'Регистрация прошло успешино!';
        header('Location: ../index.php');            

    } else {
        $_SESSION['messages'] = 'password do not match, пароль не совпадают';
        header('Location: ../registration.php');
    }
?>
