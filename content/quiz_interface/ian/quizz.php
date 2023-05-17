<?php
// Ejecuta una consulta SQL para obtener todos los registros de la tabla "usuarios"
include_once("config_quiz.php");
$sql = "SELECT id FROM questions";
$sth = $pdo->prepare($sql);
$sth->execute();

//var_dump($sth->fetchAll());

// Verifica si la consulta fue exitosa
$questions=$sth->fetchAll();
$les_questions="";
$les_id=[];
foreach  ($questions as $question)
  {
    $les_id[]=$question["id"];
  }      
  $nb_questions=count($les_id);
  shuffle($les_id);
  $les_id=array_slice($les_id, 0, $nb_questions);
  $_SESSION["les_id"]=$les_id;
  $_SESSION["question_en_cours"]=0;
  $_SESSION["nb_questions"]=$nb_questions;
  $_SESSION["reponses"]=[];
  //var_dump($les_id);
  header("Location: quiz_game.php");

?>