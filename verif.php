<?php
session_start();
require('actions/database.php');
require ('php/preloader.php');
include 'php/nav.php';
if(isset($_GET['id']) AND !empty($_GET['id']) AND isset($_GET['token']) AND !empty($_GET['token'])){

    $getid = $_GET['id']; 
    $getready = $_GET['token'];
    $recupuser = $bdd->prepare('SELECT * FROM users WHERE id = ? AND token = ?');
    $recupuser->execute(array($getid, $getready));
    if($recupuser->rowCount() > 0){
        $userinfo = $recupuser->fetch();
        if($userinfo['ready'] != 1){
            $updateready = $bdd->prepare('UPDATE users SET ready = ? WHERE id = ?');
            $updateready->execute(array(1, $getid));
            header('location: forum');
        }else{
            header("location: forum");
        }
    }else{
        echo "Votre clé ou identifient des incorrect";
    }


}else{
    echo "Aucun utilisateur trouvée";
}
?>