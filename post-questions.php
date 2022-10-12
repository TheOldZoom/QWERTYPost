<?php

$var = 'post-questions';
session_start();
require ('actions/forum/postqAction.php');
require ('actions/users/securityaction.php');

include 'php/nav.php'

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/post-question.css">
    <title>QwertyPost | Questions</title>
</head>
<body>

<div class="FormInscrs">
        <div class="form-text">Création d'une question</div>
            <div class="form-saisie">

                <form method="post">
                    <span>Titre de la question</span>
                    <input type="text" name="title"placeholder="Veuillez entrer le titre de la question">
                    <span>Contenu de la question</span>
                    <textarea name="princ"  placeholder="Veuillez entrer le contenu"></textarea>
                    <input type="submit" name="postq"  value="Poser une question" class="btnsubmit">                    
                    <?php if(isset($errormsg)){
                        echo '<h500>'.$errormsg.'</h500>';
                    } 
                    
                    ?>
                
                    
                </form>
            </div>



    </div>
</body>
</html>



