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
$var = 'forum';
    session_start();
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
            <a href="question?id=<?php echo $q['id'];?>"><?= $q['title'];?></a>
            <div class="footer">
            <?= $q['princ'];?>
            </div>
            <span>publish by</span> <?= $q['author'];?> 
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



