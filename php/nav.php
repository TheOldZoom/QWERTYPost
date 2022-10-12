<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/1027986740285284363/1029490576523018250/QwertyPost.png" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
</head>
<body>

        <nav class="">
            <div class="logo">
             <a href="../html/Accueil.html">
                <img src="./images/QwertyPost.png" alt="QwertyPost logo" class="QP">
                </a>
            </div>
                <ul class="nav-list">
                <li class="nav-item"><a href="index">Accueil</a></li>
                <li class="nav-item"><a href="forum">Forum</a></li>
                <li class="nav-item"><a href="boutique">Boutique</a></li>
                <li class="nav-item"><a href="contact">New</a></li>            
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Autre
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Poster une question</a></li>
                        <li><a class="dropdown-item" href="#">Contact</a></li>
                    </ul>
                </div>
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
