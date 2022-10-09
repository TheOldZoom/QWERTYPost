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
            <li class="nav-item"><a href="index">home</a></li>
            <li class="nav-item"><a href="forum">forum</a></li>
            <li class="nav-item"><a href="post-questions">publier une question</a></li>
            <li class="nav-item"><a href="contact">contact</a></li>
            <?php if( isset($_SESSION['id']) && $_SESSION['pseudo'] !== null ) : ?>
                <li class="nav-item"><a href="actions/users/logoutaction.php">déconnexion</a></li>
  <?php else : ?>
    <li class="nav-item"><a href="login">login</a></li>
    <li class="nav-item"><a href="signup">sign up</a></li>
  <?php endif; ?>
            
            </ul>
        </nav>
</body>
</html>

<?php 
