<?php 
    //error_reporting(E_ALL & ~E_NOTICE);
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
            <form action="vendor/signin.php" method="POST">
                <div class="row">
                    <i class="icofont-user"></i>
                    <input type="text" placeholder="Email and Phone" class="user" name="full_name">
                </div>
                <div class="row">
                    <i class="icofont-lock"></i>
                    <input type="password" placeholder="Password" class="password" name="password">
                </div>
                <div class="row button">
                    <div class="pass"><a href="forgot.php">Forgot password?</a></div>
                    <input type="submit" value="Login">
                    <div class="signup_link">Not a member? <a href="registration.php">Signup Now</a></div>
                </div>
                <div class="row">
                    
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
