<?php

require('actions/database.php');


if(isset($_POST['signup'])){

    if(!empty($_POST['pseudo']) AND !empty($_POST['nom'] AND !empty($_POST['mdp'])){

    }else{
        $errormsg = "Veuillez compléter tout les champs";
    }
}

?>