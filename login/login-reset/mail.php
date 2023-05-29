<?php
session_start();
include_once('../../php-shit/php-files/config.php');
if (isset($_POST["mail"]) && ($_POST["mail"]!="") )
{
    $sql = "SELECT id,username FROM `users` WHERE email ='".$_POST["mail"]."' limit 1";
    $reponse = mysqli_query($link, $sql);
    $existe=FALSE;
    //print($sql);
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
        //$id=5;
        $time=time();
        $subject="Re initialistation mot de passe omnisup";
        $code=md5($mail.$time.$id.$nom);
        $code=substr($code,0,32);
        $message="cliquer sur <a href='https://monsite.fr/mail2.php?id=$id&code=$code&t=$time' >lien de confirmation</a>";
        $message="cliquer sur <a href='mail2.php?id=$id&code=$code&t=$time' >lien de confirmation</a>";
        $from = 'ljany@educand.ad';
        $headers = "From: $from";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        //mail( $to, $subject, $message,$headers);
        print($message);


    }
    else{
        header("Location='reset.html'");
    }
}
else{
    header("Location='reset.html'");
}


?>