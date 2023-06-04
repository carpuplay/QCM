<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: ../../login/login-eleve/login.php');
    exit();
}
$niveaux = $_SESSION['niveaux'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="./wrong.css">
  <link rel="icon" type="image/x-icon" href="../../logo.ico">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    .content{
        margin: auto;
    }
  </style>
</head>
<body>
  <p id="message" style="color: #050801;"></p>
  <div class="submit">
      <button class="submit-btn" onclick="window.open('', '_self', ''); window.close();"> D'accord </button>
  </div>
  <script>
    var max = 3;
    var niveaux = <?php echo json_encode($niveaux); ?>;
    if (niveaux == "Terminale") {
        max = 2;
    };
    document.getElementById("message").innerHTML = "Trop de spécialités! Veuillez en choisr " + max + ".";
  </script>
</body>

</html>