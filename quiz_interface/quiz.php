<?php
// Ejecuta una consulta SQL para obtener todos los registros de la tabla "usuarios"
include_once("config_quiz.php");
$sql = "SELECT * FROM questions limit 1";
$sth = $pdo->prepare($sql);
$sth->execute();

//var_dump($sth->fetchAll());

// Verifica si la consulta fue exitosa
$questions=$sth->fetchAll();
$les_questions="";
foreach  ($questions as $question)
  {
        $intitule=$question["intitule"];
        $r1= $question["rep_1"];
        $r2= $question["rep_2"];
        $r3= $question["rep_3"];
        $r4= $question["rep_4"];
        $id= $question["id"];
        $type=$question["type"];
       
 //print($intitule);
 if ($type=="solo")
 {
  $une_question = file_get_contents('soloz.html');
 }
 else
 {
    $une_question = file_get_contents('multiz.html');
 }
  $une_question=str_replace("---intitule",$intitule,$une_question);
  
  $une_question=str_replace("---r1",$r1,$une_question);
  $une_question=str_replace("---r2",$r2,$une_question);
  $une_question=str_replace("---r3",$r3,$une_question);
  $une_question=str_replace("---r4",$r4,$une_question);
  $p="p_$id";
  $une_question=str_replace("selector",$p,$une_question);
  $les_questions=$les_questions.$une_question;
  //print($les_questions);
  }
  //print($les_questions);

  $la_page = file_get_contents('quiz.html');
  $la_page=str_replace("---questions",$les_questions,$la_page);
  print($la_page);

?>