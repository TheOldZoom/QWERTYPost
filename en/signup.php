<?php
$var = 'signup';
session_start();
require('actions/users/signupaction.php');
require('actions/users/doublesecurityaction.php');
require('php/nav.php')

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/signup.css">
    <link rel="stylesheet" href="css/nav.css">
    <title>QwertyPost | Signup</title>
</head>
<body>

<div class="FormInscrs">
        <div class="form-text">Sign up</div>
            <div class="form-saisie">

                <form method="post">
                    <span>Name and first name</span>

                    <input type="text" name="nom" placeholder="Type your full name">
                    <span>Username</span>
                    <input type="text" name="pseudo" placeholder="Please enter your username">
                    <span>Password</span>
                    <input type="password" name="mdp" placeholder="Type your password">
                    <input type="submit" name="signup"  value="s'inscrire" class="btnsubmit">
                    got an account ? <a href="./login.php">Log in !</a>
                    <?php if(isset($errormsg)){
                        echo '<h500>'.$errormsg.'</h500>';
                    } 
                    
                    ?>
                
                    
                </form>
            </div>



    </div>

</body>
</html>

<?php

?>
