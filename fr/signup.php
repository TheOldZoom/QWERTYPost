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
        <div class="form-text">inscription        </div>
            <div class="form-saisie">

                <form method="post">
                    <span>Nom et prénom </span>

                    <input type="text" name="nom" placeholder="Taper votre nom et prénom">
                    <span>Nom d'utilisateur </span>
                    <input type="text" name="pseudo" placeholder="Taper votre nom d'utilisateur">
                    <span>Mot de passe: </span>
                    <input type="password" name="mdp" placeholder="Taper votre mot de passe">
                    <input type="submit" name="signup"  value="s'inscrire" class="btnsubmit">
                    Vous avez deja un compte ?         <a href="./login.php">   Connecter-vous</a>
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
