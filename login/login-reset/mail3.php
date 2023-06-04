<?php
session_start();
include_once('../../php-shit/php-files/config.php');

if (isset($_POST["mdp1"]) && $_POST["mdp1"] != "" && isset($_POST["mdp2"]) && $_POST["mdp2"] != "" && isset($_POST["id"]) && $_POST["id"] != "" && $_POST["mdp1"] == $_POST["mdp2"]) {
    $id = $_POST["id"];
    $mail = $_POST["mail"];
    $nom = $_POST["nom"];

    $password = password_hash($_POST["mdp1"], PASSWORD_DEFAULT);
    $sql = "UPDATE `users` SET `password`='$password' WHERE id='$id' LIMIT 1";
    mysqli_query($link, $sql);

    // Send email notification
    $to = $mail; // Replace with user's email
    $subject = "Mot de passe modifié";
    $message = "
    <!DOCTYPE html>
        <html>
        <head>
          <title>Mot de passe modifié</title>
          <style>
            .container {
              width: 600px;
              margin: 0 auto;
              padding: 20px;
              font-family: Arial, sans-serif;
            }
            h1 {
              text-align: center;
              color: #333;
            }
            p {
              margin-bottom: 20px;
              line-height: 1.5;
            }
            a {
              display: inline-block;
              margin-top: 20px;
              padding: 10px 20px;
              background-color: #007bff;
              color: #fff;
              text-decoration: none;
              border-radius: 4px;
            }
          </style>
        </head>
        <body>
          <div class='container'>
            <h1>Mot de passe correctement modifié</h1>
            <p>Bonjour $nom,</p>
            <p>Le mot de passe de votre compte Omnisup a été modifié correctement.</p>
            <p>Si vous n'avez pas demandé de réinitialisation de mot de passe, vous devez immédiatement vous mettre en contact avec nous.</p>
            <p>Merci,</p>
            <p>L'équipe Omnisup</p>
          </div>
        </body>
        </html>
    ";
    $from = 'info@exonstudio.com';
    $headers = "From: $from\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    mail($to, $subject, $message, $headers);

    // Check the value of `prof` column in the `users` table
    $profQuery = "SELECT prof FROM `users` WHERE id='$id' LIMIT 1";
    $profResult = mysqli_query($link, $profQuery);
    $row = mysqli_fetch_assoc($profResult);
    $isProf = $row['prof'];

    // Determine the login page to redirect based on `prof` value
    $redirectPage = $isProf ? '../login-prof/login.php' : '../login-eleve/login.php';

    // Display success message in HTML format
    echo "
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset='UTF-8'>
            <title>Mot de Passe modifié</title>
            <link rel='stylesheet' href='./mail3.css'>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
            <link rel='icon' type='image/x-icon' href='../../logo.ico'>
        </head>
        <body>
            <h1>Fin de l'opération</h1>
            <p>Votre mot de passe a été correctement modifié.</p> <br><br><br><br><br><br>
            <p class='redirect-message'><span class='animation'>Vous serez redirigé dans un moment...</span></p><br><br><br>
            <p class='redirect-btn'>(Si la redirection ne fonctionne pas, veuillez cliquer sur le bouton ci-dessous)</p>

            <button class='btn' onclick='redirectToLogin()'>Retourner à la page de connexion</button>
            
            <script>
                setTimeout(function() {
                    window.location.href = '$redirectPage';
                }, 5000); // Redirect after 5 seconds
            </script>
        </body>
        </html>
    ";
} else {
    header("Location: reset.php");
    exit(); // Stop further execution
}
?>
