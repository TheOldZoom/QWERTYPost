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
    session_start();
    $var = 'forum';
require('actions/forum/allquestionaction.php');
require('php/nav.php');
?>

<form method="GET">
        <input type="search" name="search" class="subform-search"><button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>          
    </form>
    <?php
    while($q = $getAllQuestions->fetch()){
        ?>
    <div class="container">
        <div class="subform">
            <div class="subform-title">
                <h1><a href="question?id=<?php echo $q['id'];?>"><?= $q['title'];?></a></h1>

            </div>
                <div class="subform-row">
                    <div class="subform-icon subform-column center">
                    <i class="fa-solid fa-headset"></i> 
                    </div>
                    <div class="subform-description subform-column">
                        <h1><?= $q['princ'];?></a></h1>
                    </div>
                    <div class="subform-stats subform-column center"></div>
                    <div class="subforum-info subform-column">
                        <b>publié par <a href="question?id=<?php echo $q['id'];?>"><?= $q['author'];?></a></b>
                        <br/>
                        Le <small><?= $q['date_pub'];?></small>
                    </div>
                </div>
        </div>
    </div>
<?php
    }

    require('php/footer.php');
    ?>


</body>
</html>



