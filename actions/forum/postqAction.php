<?php

require('actions/database.php');

if(isset($_POST['postq'])){

    if(!empty($_POST['title']) AND !empty($_POST['des']) AND !empty($_POST['princ'])){

        $q_title = htmlspecialchars($_POST['title']);
        $q_desc = nl2br(htmlspecialchars($_POST['des']));
        $q_princ = nl2br(htmlspecialchars($_POST['princ']));
        $q_date  = date('d/m/y');
        $q_author = $_SESSION['pseudo'];


        $insertquestiononbdd = $bdd->prepare('INSERT INTO forum(title, des, princ, author, date_pub)VALUES(?,?,?,?,?)');
        $insertquestiononbdd->execute(
            array(
                $q_title, 
                $q_desc, 
                $q_princ, 
                $q_author, 
                $q_date
            ));
            $errormsg = "La question a été créer dans le site";
    }else{
        $errormsg = "Veuillez remplir tous les champs";
    }
}

