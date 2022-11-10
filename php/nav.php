<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">    
    <script src="https://kit.fontawesome.com/429fb3e715.js" crossorigin="anonymous"></script>

</head>
<body>

        <nav class="navbar">
            <a href="http://qwertypost.com/" class="logo">QWERTYPOST</a>
        <div class="nav-links">
        <ul>
            <li><a href="forum">Forum</a></li>
            <?php if( isset($_SESSION['id']) && $_SESSION['pseudo'] !== null ) : ?>
                <li><a href="post-questions">Publier une question</a></li>
  <?php else : ?>
  <?php endif; ?>        
            <?php if( isset($_SESSION['id']) && $_SESSION['pseudo'] !== null ) : ?>
                <li><a href="actions/users/logoutaction.php">Déconnexion</a></li>
  <?php else : ?>
    <li><a href="login">Se connecter</a></li>
    <li><a href="signup">S'inscrire</a></li>
  <?php endif; ?>
            
            </ul>
            </div>
        <img src="assets/menu-btn.png" alt="" class="menu-bars">
        </nav>
</body>
<script>
        const menuHamburger = document.querySelector(".menu-bars")
        const navLinks = document.querySelector(".nav-links")
 
        menuHamburger.addEventListener('click',()=>{
        navLinks.classList.toggle('mobile-menu')
        })
</script>
</html>

<?php 
