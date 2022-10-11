<?php

include 'actions/database.php';

$getAllQuestions = $bdd->query('SELECT * FROM forum ORDER BY id DESC LIMIT 0,5');


if(isset($_GET['search']) && !empty($_GET['search'])){
    $userSearch = $_GET['search'];

    $getAllQuestions = $bdd->prepare('SELECT * FROM forum WHERE title = LIKE"%'.$userSearch.'%" ORDER BY id DESC');
    $getAllQuestions->execute(array($userSearch));


}























?>