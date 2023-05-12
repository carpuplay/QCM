<?php

include_once("config_quiz.php");

var_dump($_POST);
print("<br>");
var_dump($_SESSION);

foreach($_POST as $cle=>$value)
{

//$id_question=substr($cle,2);
$q=explode("_",$cle);
$id_question=$q[1];

$reponse_donnee=$value;
print("<br> id question = ".$id_question);

}


$sql = "SELECT * FROM questions where id=$id_question limit 1";
$sth = $pdo->prepare($sql);
$sth->execute();
$questions=$sth->fetchAll();

foreach  ($questions as $question)
  {
        $intitule=$question["intitule"];
        $r[1]= $question["rep_1"];
        $r[2]= $question["rep_2"];
        $r[3]= $question["rep_3"];
        $r[4]= $question["rep_4"];
        $id= $question["id"];
        $type=$question["type"];

        $correct=$question["correct"];
        if ($type=="solo")
        {
          $i=0;
          //print("<br> $correct");
          //print($correct[$i]);
          $trouve=FALSE;
          
          while ($trouve==FALSE)
          {
              if ($correct[$i]=="0")
              {
                  $i++;
              }
              else 
              {
                $trouve=TRUE;
              }
          }
          
          $i++;
          //print("<br>$i");
          //print("<br>$reponse_donnee");

          if ($i==$reponse_donnee)
          {
            //print($intitule);
            //print("<br > reponse correct");
            
            //print("<br> ".$r[$i]);
            $_SESSION["reponses"][]=$intitule."<br > réponse correcte"."<br> ".$r[$i];

          }
          else
          {
            //print($intitule);
            //print("<br> reponse fausse");
            //print("<br>bonne reponse : ".$r[$i]);
            $_SESSION["reponses"][]=$intitule."<br > réponse fausse"."<br> bonne réponse".$r[$i];
          }
       }
       else //multi
       {
// faire une boucle for pour tester toutes les réponses possibles et les réponses associées
          var_dump($_SESSION);
          print("<br>");
          var_dump($_POST);

       }

    }
/*
    $_SESSION["question_en_cours"]=$_SESSION["question_en_cours"]+1;

    if ($_SESSION["question_en_cours"]<$_SESSION["nb_questions"])
    {
      header("Location: quiz_game.php");
    }
    else
    {
      header("Location: fin.php");
    }
*/
?>