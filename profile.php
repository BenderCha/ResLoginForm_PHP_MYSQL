<?php 
    //error_reporting(E_ALL & ~E_NOTICE);
    session_start();
    if(!$_SESSION['users'])
    {
        header("Location: /");
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
    <title>Profile</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="title"><span>Profile: <?= $_SESSION['users']['full_name']?></span></div>
            <form>
                <div class="row">
                    <img src="<?= $_SESSION['users']['avatar']?>" width="100%">
                </div>
                <div class="row">
                    <div><?= $_SESSION['users']['email']?></div>
                </div>
                <div class="row">
                    <h2><?= $_SESSION['users']['full_name']?></h2>
                </div>
               
                <div class="signup_link"><a href="logout.php">Exit</a></div>
            </form>
           
        </div>
    </div>
    
</body>
</html>
