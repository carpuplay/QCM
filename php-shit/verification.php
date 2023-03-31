<?php
session_start();

if ( isset($_POST) && isset($_POST["logpass"]) && isset($_POST["logemail"]) )
{
//var_dump($_POST);
//print("<br />");
include('conf.php');

//On établit la connexion
$conn = new PDO("mysql:host=$servername;dbname=users", $username, $password);
//var_dump($conn); // sert à verifier que l'on est connecté


$sql="SELECT * FROM `admin` where adresse_mail='".$_POST["logemail"]."' and mot_de_passe='".md5($_POST["logpass"])."';";
//print($sql);
//print("<br />");
$p=$conn->prepare($sql);
$p->execute();


//print("<br />");
$reponse=$p->fetchAll();
//var_dump($reponse);

if ($reponse !=NULL)
{
 print("connection réussie");

//poner aqui el header para la siguiente pagine (quitar el print)

$_SESSION["identifiant"]=$reponse[0]["identifiant"];

$_SESSION["droits"]=$reponse[0]["droits"];

}
else
{
   // print("connection  ratée");
   $_SESSION["message"]="Erreur connection";
 header('Location: index.php'); //pour pouvoir se rédiriger enlever le print
   
}
//var_dump($_SESSION);
}


//hacer parte de sign up intentar no cagarla pls

?>


