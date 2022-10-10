<?php 

require ('actions/database.php');

if(isset($_GET['id']) && !empty(['id'])){


    $idquestions = $_GET['id'];
    $checkifquestionexist = $bdd->prepare('SELECT * FROM forum WHERE id = ?');
    $checkifquestionexist->execute(array($idquestions));


    if($checkifquestionexist->rowCount() > 0){

        $questionsinfos = $checkifquestionexist->fetch();

        $q_title = $questionsinfos['title'];
        $q_princ = $questionsinfos['princ'];
        $q_id_author = $questionsinfos['id_author'];
        $q_author = $questionsinfos['author'];
        $q_date = $questionsinfos['date_pub'];


    }else{
        $errormsg = "aucune question a été trouvé";
    }

}else{

    $errormsg = "aucune question a été trouvé";
}



?>