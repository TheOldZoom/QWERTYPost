<?php
require('actions/database.php');

$getallanswerofthisquestion = $bdd->prepare('SELECT id_author, author, id_q, date, answer FROM answers WHERE id_q = ?');
$getallanswerofthisquestion->execute(array($_GET['id']));






?>