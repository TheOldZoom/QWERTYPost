<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forum.css">

    
    <title>QwertyPost | forum</title>
</head>
<body>
<?php
require('actions/forum/allquestionaction.php');
require('php/nav.php');



?>
    <form method="GET">
        <input type="search" name="search" class="form-control"><button type="submit">Search</button>          
    </form>

    <br>
    <?php
    while($q = $getAllQuestions->fetch()){
        ?>
        <div class="content">
            <span>Titre:</span> <?= $q['title'];?>
            <div class="footer">
            <?= $q['princ'];?>
            </div>

            <span>publié par</span> <?= $q['author'];?> 
            <div class="date">
            <?= $q['date_pub'];?>
            </div>
            </div>
        <br>
        </div>
    <?php
    }
    ?>

</body>
</html>



