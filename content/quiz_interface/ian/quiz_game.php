<?php
// Ejecuta una consulta SQL para obtener todos los registros de la tabla "usuarios"
include_once("config_quiz.php");
var_dump($_SESSION);

$id_question=$_SESSION["les_id"][$_SESSION["question_en_cours"]];
print("id qustion $id_question");
$sql = "SELECT * FROM questions where id=$id_question limit 1";
print("<br />$sql<br />");
$sth = $pdo->prepare($sql);
$sth->execute();

//var_dump($sth->fetchAll());

// Verifica si la consulta fue exitosa
$questions=$sth->fetchAll();
$les_questions="";
foreach  ($questions as $question)
  {
        $intitule=$question["question"];
        $r1= $question["r1"];
        $r2= $question["r2"];
        $r3= $question["r3"];
        $r4= $question["r4"];
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