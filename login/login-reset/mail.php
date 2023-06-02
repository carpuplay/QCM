<?php
session_start();
include_once('../../php-shit/php-files/config.php');
if (isset($_POST["mail"]) && ($_POST["mail"]!="") )
{
    $sql = "SELECT id,username FROM `users` WHERE email ='".$_POST["mail"]."' limit 1";
    $reponse = mysqli_query($link, $sql);
    $existe=FALSE;

    while ($myrow = $reponse->fetch_array(MYSQLI_ASSOC))
    {
        $id=$myrow["id"];
        $existe=TRUE;
        $mail=$_POST["mail"];
        $nom=$myrow["username"];
        
    }
    

    if ($existe) 
    {
        $to=$_POST["mail"];
        $time=time();
        $subject="Réinitialisation du mot de passe Omnisup";
        $code=md5($mail.$time.$id.$nom);
        $code=substr($code,0,32);
        $message = "
        <!DOCTYPE html>
        <html>
        <head>
          <title>Réinitialisation du mot de passe</title>
          <style>
            .container {
              width: 600px;
              margin: 0 auto;
              padding: 20px;
              font-family: Arial, sans-serif;
            }
            h1 {
              text-align: center;
              color: #333;
            }
            p {
              margin-bottom: 20px;
              line-height: 1.5;
            }
            a {
              display: inline-block;
              margin-top: 20px;
              padding: 10px 20px;
              background-color: #007bff;
              color: #fff;
              text-decoration: none;
              border-radius: 4px;
            }
          </style>
        </head>
        <body>
          <div class='container'>
            <h1>Réinitialisation du mot de passe</h1>
            <p>Bonjour $nom,</p>
            <p>Nous avons reçu une demande de réinitialisation du mot de passe pour votre compte Omnisup.</p>
            <p>Pour réinitialiser votre mot de passe, veuillez cliquer sur le bouton ci-dessous :</p>
            <p>
            <a href='./mail2.php?id=$id&code=$code&t=$time'>Réinitialiser mon mot de passe</a>
                <!-- <a href='https://monsite.fr/mail2.php?id=$id&code=$code&t=$time'>Réinitialiser mon mot de passe</a> -->
            </p>
            <p>Si vous n'avez pas demandé de réinitialisation de mot de passe, vous pouvez ignorer cet e-mail.</p>
            <p>Merci,</p>
            <p>L'équipe Omnisup</p>
          </div>
        </body>
        </html>
        ";
        $from = 'ljany@educand.ad';
        $headers = "From: $from\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        //mail( $to, $subject, $message, $headers);
        print($message);
    }
    else{
        header("Location: reset.html");
    }
}
else{
    header("Location: reset.html");
}
?>
