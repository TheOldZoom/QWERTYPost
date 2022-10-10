<?php
    session_start();
    require('actions/forum/showquestion.php');
    require('actions/forum/postansweraction.php'); 
    require('actions/forum/showallanswerofthisquestionaction.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QwertyPost | <?= $q_title;?></title>
    <link rel="stylesheet" href="css/question.css">
</head>
<body>
    <?php include 'php/nav.php'?>


    <div class="container">
    <?php
    if(isset($errormsg)){
        echo $errormsg;
    }


    if(isset($q_date)){
        ?>

        <section class="showquestion">

        <h3><?= $q_title;?></h3>
        <hr>
        <p><?= $q_princ;?></p>
        <hr>
        <small>publié par <?= $q_author.' le '. $q_date?></small>
        </section>

        <section class="show-answer">
            
        
            <form class="form-answer" method="POST">
            <?php if(isset($_SESSION['id']) && $_SESSION['pseudo'] !== null ) : ?>
                <span>Répondre à <?= $q_title;?></span>
            <textarea name="answer" placeholder="Répondre à <?= $q_author ?>"></textarea>
            <input type="submit" name="posta"value="Répondre à <?= $q_author ?>">
  <?php else : ?>
    <br>
    <span>Si vous voulez répondre, il va falloir vous connecter !
  <?php endif; ?>

            </form>

            <?php


            while($q = $getallanswerofthisquestion->fetch()){
                ?>
            <div class="content">
            <div class="footer">
            <?= $q['answer'];?>
            </div>

            <span>publié par</span> <?= $q['author'];?> 
            <div class="date">
            <?= $q['date'];?>
            </div>
            </div>
        <br>
        </div>


                <?php
            }



        ?>
        </section>


        <?php
    }
?>  

        <br/>





    </div>
</body>
</html>