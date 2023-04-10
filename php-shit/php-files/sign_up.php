<?php
session_start();

if ( isset($_POST) && isset($_POST["logpass"]) && isset($_POST["logemail"]) && isset($_POST["logname"]) )
{
//var_dump($_POST);
//print("<br />");
include('conf.php');

//On établit la connexion
$conn = new PDO("mysql:host=$servername;dbname=616e8_nsi", $username, $password);
//var_dump($conn); // sert à verifier que l'on est connecté


$sql="SELECT * FROM `users` where adresse_mail='".$_POST["logemail"]."' and identifiant='".$_POST["logname"]."';";
//print($sql);
//print("<br />");
$p=$conn->prepare($sql);
$p->execute();


//print("<br />");
$reponse=$p->fetchAll();
//var_dump($reponse);

if ($reponse == NULL)
{
 $sql = "INSERT INTO `users` VALUES (NULL,'".$_POST["logname"]."','".$_POST["logemail"]."','".md5($_POST["logpass"])."',1);";
print($sql);
print("<br />");
$p=$conn->prepare($sql);
$p->execute();
//poner aqui el header para la siguiente pagine (quitar el print)

}
else
{
   // print("connection  ratée");
   $_SESSION["message"]="Mail ou id oiuyfg déjà exitant";
 header('Location: index.php'); //pour pouvoir se rédiriger enlever le print
   
}
//var_dump($_SESSION);
}


//hacer parte de sign up intentar no cagarla pls

?>
