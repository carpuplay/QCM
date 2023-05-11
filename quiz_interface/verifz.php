<?php

include_once("config_quiz.php");

var_dump($_POST);
var_dump($_SESSION);

//foreach($_POST as $cle=>$value)



$sql = "SELECT * FROM questions";
$sth = $pdo->prepare($sql);
$sth->execute();



?>