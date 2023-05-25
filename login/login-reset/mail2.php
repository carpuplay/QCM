<?php
session_start();
include_once('../../php-shit/php-files/config.php');
//print($_GET);
//var_dump($_GET);
if (isset($_GET["code"]) && ($_GET["code"]!="")   && isset($_GET["t"]) && isset($_GET["id"]) )
{

    $id=$_GET["id"]; 
    $sql = "SELECT email,username,id FROM `users` WHERE id ='".$_GET["id"]."' limit 1";
    //print($sql);
    $reponse = mysqli_query($link, $sql);
    while ($myrow = $reponse->fetch_array(MYSQLI_ASSOC))
    {
        $id=$myrow["id"];

        $mail=$myrow["email"];
        $nom=$myrow["username"];
        
    }
    
    $time=$_GET["t"];  //le parametre t du GET est le temps time 
    $code=md5($mail.$time.$id.$nom);
    $code=substr($code,0,32);
    $correct=($code==$_GET["code"]) && (time()-$time<1000000);

    if ($correct) 
    {
        print("
        <!DOCTYPE html>
        <html>
        <body>
            <form method='POST' action='mail3.php'>
                    mail : $mail , user : $nom;
                    <input type='hidden' name='id' value='$id' />
                    <br />mdp=  <input type='password' name='mdp1' placeholder='Mot de passe' />
                  <br />mdp verif=  <input type='password' name=' mdp2' placeholder='Mot de passe' />
                  <br /><input type='submit' value='OK' />
            </form>
        </body>
        </html>
       ");

    }
    else{
        header("Location='reset.html'");
    }
}
else{
    header("Location='reset.html'");
}


?>