
<?php
require('actions/database.php');

require "actions/users/PHPMailer/PHPMailerAutoload.php";





if(isset($_POST['signup'])){




            if(!empty($_POST['pseudo']) AND !empty($_POST['nom']) AND !empty($_POST['mdp']) AND !empty($_POST['email'])){

                $user_pseudo = htmlspecialchars($_POST['pseudo']);
                $user_nom = htmlspecialchars($_POST['nom']);
                $user_email = htmlspecialchars($_POST['email']);
                $user_mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
                $token = rand(2000, 40000);
                



                $checkifuserexist = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
                $checkifuserexist->execute(array($user_pseudo));
                $checkifemailexist = $bdd->prepare('SELECT * FROM users WHERE email = ?');
                $checkifemailexist->execute(array($user_email));

                        if($checkifuserexist->rowCount() == 0){

                            if($checkifemailexist->rowCount() == 0){

                            $insertuser = $bdd->prepare('INSERT INTO users(pseudo, nom, email, token, ready, mdp, user)VALUES (?, ?, ?, ?, ?, ?, ?)');
        
                            $insertuser->execute(array($user_pseudo, $user_nom, $user_email, $token, 0, $user_mdp, 0));
        
        
        
                            $getinfosuser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND nom = ? AND email = ?');
                            $getinfosuser->execute(array($user_pseudo,$user_nom,$user_email));
        
        
                            $userinfos = $getinfosuser->fetch();
                            $_SESSION['auth'] = true;
                            $_SESSION['id'] = $userinfos['id'];
                            $_SESSION['pseudo'] = $userinfos['pseudo'];
                            $_SESSION['nom'] = $userinfos['nom'];
                            $_SESSION['user'] = $userinfos['user'];

        
                            function smtpmailer($to, $from, $from_name, $subject, $body)
                            {
                                $mail = new PHPMailer();
                                $mail->IsSMTP();
                                $mail->SMTPAuth = true; 
                        
                                $mail->SMTPSecure = 'ssl'; 
                                $mail->Host = 'smtp.gmail.com';
                                $mail->Port = 465;  
                                $mail->Username = 'QwertyPost.Contact@gmail.com';
                                $mail->Password = 'iowkkycnrpsuiuja
                                ';   
                        
                        //   $path = 'reseller.pdf';
                        //   $mail->AddAttachment($path);
                        
                                $mail->IsHTML(true);
                                $mail->From="Qwertypost.contact@gmail.com";
                                $mail->FromName=$from_name;
                                $mail->Sender=$from;
                                $mail->AddReplyTo($from, $from_name);
                                $mail->Subject = $subject;
                                $mail->Body = $body;
                                $mail->AddAddress($to);
                                $mail->send();
                            }
                            
                            $to   = $user_email;
                            $from = 'qwertypost.contact@gmail.com';
                            $name = 'QwertyPost Service';
                            $subj = 'Confirmation par Email QwertyPost';
                            $msg = 'http://qwertypost.com/verif?id='.$_SESSION['id'].'&token='.$token;
                            
                            $error=smtpmailer($to,$from, $name ,$subj, $msg);

                            }else{
                                $errormsg = "L'email existe déja";
                            }
                            
                    }else{
                    $errormsg = "L'utilisateur existe déja dans notre base de données"; 
                    }
                    
            }else{
            $errormsg = "Veuillez compléter tous les champs";
            }
            
                     
}

?>

