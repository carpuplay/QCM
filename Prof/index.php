<!DOCTYPE html>
<html>


<head>
    <title>QCM</title>
</head>
<body>
   <h1> <a href="./qcm.php?m=NSI" >Questionnaire NSI </a> </h1>
   <h1><a href="./qcm.php?m=SES" > Questionnaire SES </a></h1>
   <h1><a href="./qcm.php?m=MATHS" > Questionnaire MATHS </a></h1>
<?php
session_start();
unset($_SESSION['matiere']);
unset($_SESSION['numero_question']);
?>


</body>

</html>