<?php
if (isset($_GET["code"]) && ($_GET["code"]!="")   && isset($_GET["time"]) )
{
    $id=$_GET["id"]; 
    $nom="";// a recuperer en sql avec id
    $mail=""; // a recuperer en sql avec id
    $time=$_GET["time"]
    $correct=(md5($mail.$time.$id.$nom)==$_GET["code"]) && (time()-$_GET["time"]<100000);

    if ($correct) 
    {
        print("
        <!DOCTYPE html>
        <body>
            <form method='POST' action='mail.php'>
                    <input type='text' name='mail' />
                  mdp=  <input type='password' name='mdp1' />
                  mdp verif=  <input type='password' name='mdp2' />
                    <input type='submit' value='OK' />
            </form>
        </body>
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