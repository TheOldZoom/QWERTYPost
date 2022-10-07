<?php
session_start();
try{
    $bdd = new PDO('mysql:host=localhost;dbname=connectbd;charset=utf8;', 'root', '');
}   catch(PDOException $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}   echo'Connexion reussi';


?>




