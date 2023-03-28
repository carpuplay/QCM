<?php
session_start();

$numero_question=0;
if (isset($_GET['m']))
{
    $matiere=$_GET['m'];
    $_SESSION['matiere']=$matiere;
}
else
{
    $matiere='NSI';
}
if (isset($_SESSION['matiere']))
{
    $matiere=$_SESSION['matiere'];
}
else
{
    $matiere='NSI';
}
print("<h1>QCM choisi : $matiere</h1>");
$_SESSION["matiere"]=$matiere;
$matiere=strtolower($matiere);

// se connecter à la base de données
include('conf.php');

//On établit la connexion
$conn = new PDO("mysql:host=$servername;dbname=qcm", $username, $password);
//var_dump($conn);

// récupérer une question de façon aléatoire
$sql="SELECT count(*) FROM `$matiere` ";
$p=$conn->prepare($sql);
$p->execute();
$reponse=$p->fetchAll();
$nb=$reponse[0][0];
//$nb nombre total de question
//var_dump($reponse);
//print($nb);

if (isset($_POST['question']))
{
    
    
    print("<h1>QCM choisi : $matiere</h1>");
    $matiere=strtolower($matiere);
    // se connecter à la base de données
    

    $na=$_POST['question']; //$na numero de question antérieure
    $sql="SELECT * FROM `$matiere` where id=$na";
    //print("$sql");
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
        
        print("Question $na / $nb: ".$question);
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
    if ($type==2)
    {
     $user_rep=$_POST["reponse"];
        
     if ($bonne_reponse[0]==1)
     {
            print("bonne reponse 1");
            //print();
     }
    print("Question $na / $nb: ".$question);
    print("<fieldset>");
    
    print("<p><input type='checkbox' id='r1' name='r1' value='1' /><label for='r1'>$r1</label></p>");
    print("<p><input type='checkbox' id='r2' name='r2' value='2' /><label for='r2'>$r2</label></p>");
    print("<p><input type='checkbox' id='r3' name='r3' value='3' /><label for='r3'>$r3</label></p>");
    print("<p><input type='checkbox' id='r4' name='r4' value='4' /><label for='r4'>$r4</label></p>");
    
    
    print("<fieldset>");
    }
}



//var_dump($_SESSION["numero_question"]);
if (isset($_SESSION["numero_question"]))
{
    $numero_question=$_SESSION["numero_question"]+1;
    $_SESSION["numero_question"]+=1;
}
else
{
    $numero_question=1;
    $_SESSION["numero_question"]=1;
}


$n=$numero_question;
$sql="SELECT * FROM `$matiere` where id=$numero_question";
//print($sql);
$p=$conn->prepare($sql);
$p->execute();
$reponse=$p->fetchAll();
//var_dump($reponse);
$question=$reponse[0]["question"];
$r1=$reponse[0]["r1"];
$r2=$reponse[0]["r2"];
$r3=$reponse[0]["r3"];
$r4=$reponse[0]["r4"];
$type=$reponse[0]["type"];

//var_dump($reponse);
// mettre en forme html


if ($type==1)
{

print("Question $n / $nb: ".$question);
print("<fieldset>");
print("<form action='qcm.php' method='post'>");
print("<p><input type='radio' id='r1' name='reponse' value='1' /><label for='r1'>$r1</label></p>");
print("<p><input type='radio' id='r2' name='reponse' value='2' /><label for='r2'>$r2</label></p>");
print("<p><input type='radio' id='r3' name='reponse' value='3' /><label for='r3'>$r3</label></p>");
print("<p><input type='radio' id='r4' name='reponse' value='4' /><label for='r4'>$r4</label></p>");
print("<p><input type='hidden' name='question' value='$n' />");
print("<p><input type='submit' value='OK'>");
print("</form");
print("</fieldset>");
}
if ($type==2)
{

print("Question : ".$question);
print("<fieldset>");
print("<form action='qcm.php' method='post'>");
print("<p><input type='checkbox' id='r1' name='r1' value='1' /><label for='r1'>$r1</label></p>");
print("<p><input type='checkbox' id='r2' name='r2' value='2' /><label for='r2'>$r2</label></p>");
print("<p><input type='checkbox' id='r3' name='r3' value='3' /><label for='r3'>$r3</label></p>");
print("<p><input type='checkbox' id='r4' name='r4' value='4' /><label for='r4'>$r4</label></p>");
print("<p><input type='hidden' name='question' value='$n' />");
print("<p><input type='submit' value='OK'>");
print("</form");
print("<fieldset>");
}


?>