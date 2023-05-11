<?php

include_once("config_quiz.php");

var_dump($_POST);

var_dump($_SESSION);

foreach($_POST as $cle=>$value)
{
$id_question=substr($cle,2);
print($id_question);

}


$sql = "SELECT * FROM questions where id=$id_question limit 1";
$sth = $pdo->prepare($sql);
$sth->execute();
$questions=$sth->fetchAll();

foreach  ($questions as $question)
  {
        $intitule=$question["intitule"];
        $r1= $question["rep_1"];
        $r2= $question["rep_2"];
        $r3= $question["rep_3"];
        $r4= $question["rep_4"];
        $id= $question["id"];
        $type=$question["type"];

        $correct=$question["correct"];

        $i=0;
        $trouve=FALSE;
        while ($trouve==FALSE)
         {
            if ($correct[$i]=="0")
            {
                $i++;
            }
            else 
            {
              $trouve==TRUE;
            }
         }
         $i++;
         print($i);

    }



?>