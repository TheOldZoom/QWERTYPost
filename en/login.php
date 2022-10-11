<?php
$var = 'login';
session_start();
require('actions/users/loginaction.php');
require('actions/users/doublesecurityaction.php');

include_once ('php/nav.php');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/signup.css">
    <link rel="stylesheet" href="css/nav.css">
    <title>QwertyPost | login</title>
</head>
<body>

<div class="FormInscrs">
        <div class="form-text">Log in</div>
            <div class="form-saisie">

                <form method="post">
                    <span>Username</span>
                    <input type="text" name="pseudo"placeholder="Type your username">
                    <span>password</span>
                    <input type="password" name="mdp" placeholder="Type your password">
                    <input type="submit" name="login"  value="Se connecter" class="btnsubmit">
                    Vous avez pas de compte ?         <a href="./signup">Inscrivez-vous</a>
                    <?php if(isset($errormsg)){
                        echo '<h500>'.$errormsg.'</h500>';
                    } 
                    
                    ?>
                
                    
                </form>
            </div>



    </div>

</body>
</html>


