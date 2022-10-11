<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=qwertypost;charset=utf8;', 'root', '');
}   catch(PDOException $e){
    die('An error went found : ' . $e->getMessage());
}


?>




