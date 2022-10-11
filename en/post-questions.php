<?php

$var = 'post-question';
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
        <div class="form-text">Creation of a question</div>
            <div class="form-saisie">

                <form method="post">
                    <span>Title of the question</span>
                    <input type="text" name="title"placeholder="please enter your title">
                    <span>Content de la question</span>
                    <textarea name="princ"  placeholder="please enter the content"></textarea>
                    <input type="submit" name="postq"  value="Post the question" class="btnsubmit">                    
                    <?php if(isset($errormsg)){
                        echo '<h500>'.$errormsg.'</h500>';
                    } 
                    
                    ?>
                
                    
                </form>
            </div>



    </div>
</body>
</html>



