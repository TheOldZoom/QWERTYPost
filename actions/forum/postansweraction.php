<?php

require ('actions/database.php');

    if(isset($_POST['posta'])){

        if(!empty($_POST['answer'])){
            
            $user_answer = nl2br(htmlspecialchars($_POST['answer']));
            $date = date('Y-m-d H:i:s');


            $insertanswer = $bdd->prepare('INSERT INTO answers(id_author, author, id_q, date, answer) VALUES(?,?,?,?,?)');
            $insertanswer->execute(array($_SESSION['id'], $_SESSION['pseudo'], $_GET['id'], $date, $user_answer));

        }
    }

?>