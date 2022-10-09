<?php

try{
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=qwertypost;charset=utf8;', 'root', '');
}   catch(PDOException $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}


?>




