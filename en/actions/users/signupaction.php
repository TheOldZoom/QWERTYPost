
<?php

require('actions/database.php');


if(isset($_POST['signup'])){




            if(!empty($_POST['pseudo']) AND !empty($_POST['nom']) AND !empty($_POST['mdp'])){

                $user_pseudo = htmlspecialchars($_POST['pseudo']);
                $user_nom = htmlspecialchars($_POST['nom']);
                $user_mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);



                $checkifuserexist = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
                $checkifuserexist->execute(array($user_pseudo));



                if($checkifuserexist->rowCount() == 0){

                    $insertuser = $bdd->prepare('INSERT INTO users(pseudo, nom, mdp)VALUES (?, ?, ?)');

                    $insertuser->execute(array($user_pseudo, $user_nom, $user_mdp));



                    $getinfosuser = $bdd->prepare('SELECT id, pseudo, nom FROM users WHERE pseudo = ? AND nom = ?');
                    $getinfosuser->execute(array($user_pseudo,$user_nom));


                    $userinfos = $getinfosuser->fetch();
                    $_SESSION['auth'] = true;
                    $_SESSION['id'] = $userinfos['id'];
                    $_SESSION['pseudo'] = $userinfos['pseudo'];
                    $_SESSION['nom'] = $userinfos['nom'];
                    header('location: post-questions');

                }else{
                    $errormsg = "The username already exist in our database"; 
                }

                }else{
                $errormsg = "Veuillez compléter tous les champs";
            }
            

}

?>

