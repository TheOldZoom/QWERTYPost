<?php 
require ('actions/database.php');

if(isset($_POST['login'])){

    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){

        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_mdp = htmlspecialchars($_POST['mdp']);


        $checkifuserexist = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? ', );
        $checkifuserexist->execute(array($user_pseudo));

        

        if($checkifuserexist->rowCount() > 0){
            $userinfos = $checkifuserexist->fetch();
            if(password_verify($user_mdp, $userinfos['mdp'])){


                $_SESSION['auth'] = true;
                $_SESSION['id'] = $userinfos['id'];
                $_SESSION['pseudo'] = $userinfos['pseudo'];
                $_SESSION['nom'] = $userinfos['nom'];
                $_SESSION['user'] = $userinfos['user'];

                header('location: post-questions');
            }else{
                $errormsg = "Votre mot de passe est incorrect";
            }

        }else{
            $errormsg = "Votre pseudo est incorrect";
        }
        


    }else{
        $errormsg = "Veuillez compléter tous les champs";
    }
}



?>