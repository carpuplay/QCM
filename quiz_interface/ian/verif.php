<?php



var_dump($_POST);
foreach($_POST as $cle=>$value)


include_once("config_quiz.php");
$sql = "SELECT * FROM questions";
$sth = $pdo->prepare($sql);
$sth->execute();



?>