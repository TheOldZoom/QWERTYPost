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

                header('location: post-questions');
            }else{
                $errormsg = "Your password is incorrect !";
            }

        }else{
            $errormsg = "Your username is incorrect !";
        }
        


    }else{
        $errormsg = "Something went wrong. Please try again";
    }
}



?>