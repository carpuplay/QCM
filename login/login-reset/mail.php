<?php
if (isset($_POST["mail"]) && ($_POST["mail"]!="") )
{
    $existe=TRUE;// à remplacer par une commande sql
    if ($existe) 
    {
        $to=$_POST["mail"];
        $id=5;
        $time=time();
        $subject="Re initialistation mot de passe omnisup";
        $code=md5($mail.$time.$id.$nom);
        $message="cliquer sur <a href='https://monsite.fr/mail2.php?id=$id+code=$code+t=$time' </a>";
        mail( $to, $subject, $message);


    }
    else{
        header("Location='reset.html'");
    }
}
else{
    header("Location='reset.html'");
}


?>