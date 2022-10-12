<?php

require('actions/database.php');

if(isset($_POST['postq'])){

    if(!empty($_POST['title']) AND !empty($_POST['princ'])){

        $q_title = htmlspecialchars($_POST['title']);
        $q_princ = nl2br(htmlspecialchars($_POST['princ']));
        $q_date  = date('d/m/y');
        $q_id_author = $_SESSION['id'];
        $q_author = $_SESSION['pseudo'];


        $insertquestiononbdd = $bdd->prepare('INSERT INTO forum(title, princ, author, id_author, date_pub)VALUES(?,?,?,?,?)');
        $insertquestiononbdd->execute(
            array(
                $q_title, 
                $q_princ, 
                $q_author, 
                $q_id_author,
                $q_date,
            ));
          header("location: forum");
    }else{
        $errormsg = "Veuillez remplir tous les champs";
    }
}

