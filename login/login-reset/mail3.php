<?php
session_start();
include_once('../../php-shit/php-files/config.php');
var_dump($_POST);
if ( (isset($_POST["mdp1"])) && ($_POST["mdp1"]!="") && (isset($_POST["mdp2"])) && ($_POST["mdp2"]!="")  && (isset($_POST["id"])) && ($_POST["id"]!="") && ($_POST["mdp1"]==$_POST["mdp2"]) )
{
    $id=$_POST["id"];
    $password=password_hash($_POST["mdp1"], PASSWORD_DEFAULT);
    $sql = "update  `users` set `password`='$password' WHERE id='$id' limit 1";
    print($sql);
    mysqli_query($link, $sql);
    
}
else{
    header("Location='reset.html'");
}


?>