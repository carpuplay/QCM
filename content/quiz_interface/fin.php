<?php

include_once("config_quiz.php");
//var_dump($_SESSION["reponses"]);
print("Fin des questions <br>");
//var_dump($_SESSION["reponses"]);
foreach ($_SESSION["reponses"] as $rep)
{
    print("$rep <br>");
}

?>