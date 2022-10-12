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
        <div class="form-text">Connexion</div>
            <div class="form-saisie">

                <form method="post">
                    <span>Nom d'utilisateur </span>
                    <input type="text" name="pseudo"placeholder="Taper votre nom d'utilisateur">
                    <span>Mot de passe: </span>
                    <input type="password" name="mdp" placeholder="Taper votre mot de passe">
                    <input type="submit" name="login"  value="Se connecter" class="btnsubmit">
                    Vous avez pas de compte ?         <a href="./signup">Inscrivez-vous</a>
                    <a href="./adminlogin.php">Connectez-vous en tant qu'admin</a>
                    <?php if(isset($errormsg)){
                        echo '<h500>'.$errormsg.'</h500>';
                    } 
                    
                    ?>
                
                    
                </form>
            </div>



    </div>

</body>
</html>


