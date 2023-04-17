<?php 
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();
    if($_SESSION['users'])
    {
        header("Location: profile.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="icofont/icofont.css">
    <link rel="stylesheet" href="style.css">
    <title>Login Form</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="title"><span>Login Form</span></div>
            <form action="vendor/signup.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                    <i class="icofont-user"></i>
                    <input type="text" placeholder="First name" class="user" name="full_name">
                </div>
                <div class="row">
                    <i class="icofont-email"></i>
                    <input type="text" placeholder="Email and Phone" class="user" name="email">
                </div>
                <div class="row">
                    <i class="icofont-file-image"></i>
                    <input type="file" class="re-password" name="avatar">
                </div>
                <div class="row">
                    <i class="icofont-lock"></i>
                    <input type="password" placeholder="Password" class="password" name="password">
                </div>
                <div class="row">
                    <i class="icofont-lock"></i>
                    <input type="password" placeholder="Re-password" class="re-password" name="password-confirm">
                </div>
                
                <div class="row button">
                    <input type="submit" value="Registration">
                    <div class="signup_link">I am registered<a href="login.php">Login Now</a></div>
                </div>
                
            </form>
                <?php 
                    if(isset($_SESSION['messages']))
                    {
                        echo '<div class="msg">'.$_SESSION['messages'].'</div>';
                    }
                    unset($_SESSION['messages']);
                ?>
            
                   
                
        </div>
    </div>
    
</body>
</html>
