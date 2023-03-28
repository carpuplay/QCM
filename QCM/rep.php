<?php

if (isset($_POST['question']))
{
    session_start();
    
    $matiere=$_SESSION["matiere"];
    print("<h1>QCM choisi : $matiere</h1>");
    $matiere=strtolower($matiere);
    // se connecter à la base de données
    include('conf.php');

    //On établit la connexion
    $conn = new PDO("mysql:host=$servername;dbname=qcm", $username, $password);
    $n=$_POST['question'];
    $sql="SELECT * FROM `$matiere` where id=$n";
    $p=$conn->prepare($sql);
    $p->execute();
    $reponse=$p->fetchAll();
    $question=$reponse[0]["question"];
    $r1=$reponse[0]["r1"];
    $r2=$reponse[0]["r2"];
    $r3=$reponse[0]["r3"];
    $r4=$reponse[0]["r4"];
    $type=$reponse[0]["type"];
    $bonne_reponse=$reponse[0]["bonne_reponse"];
    //var_dump($_POST);
    
    if ($type==1)
    {
        
        print("Question : ".$question);
        print("<fieldset>");
        $user_rep=$_POST["reponse"];
        
        if ($bonne_reponse[0]==1)
        {
                print("bonne reponse 1");
                //print();
        }
        print("<p>$r1</p>");
        print("<p>$r2</p>");
        print("<p>$r3</p>");
        print("<p>$r4</p>");
        //print("<p><input type='submit' value='OK'>");
        print("</fieldset>");
    }
}

?>
