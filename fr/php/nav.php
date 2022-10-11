<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    


</head>
<body>

        <nav>
            <ul class="nav-list">
            <li class="nav-item"><a href="index">Accueil</a></li>
            <li class="nav-item"><a href="forum">Forum</a></li>
            <li class="nav-item"><a href="post-questions">Publier une question</a></li>
            <li class="nav-item"><a href="contact">Contact</a></li>
            <li class="nav-item"><a href="../en/<?= $var;?>">English</a></li>            
            <?php if( isset($_SESSION['id']) && $_SESSION['pseudo'] !== null ) : ?>
                <li class="nav-item"><a href="actions/users/logoutaction.php">Déconnexion</a></li>
  <?php else : ?>
    <li class="nav-item"><a href="login">Se connecter</a></li>
    <li class="nav-item"><a href="signup">S'inscrire</a></li>
  <?php endif; ?>
            
            </ul>
        </nav>
</body>
</html>

<?php 
