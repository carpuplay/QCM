<?php
session_start();
include_once('../../php-shit/php-files/config.php');

if (isset($_GET["code"]) && ($_GET["code"]!="") && isset($_GET["t"]) && isset($_GET["id"]))
{
    $id = $_GET["id"];
    $sql = "SELECT email,username,id FROM `users` WHERE id ='".$_GET["id"]."' limit 1";
    $reponse = mysqli_query($link, $sql);

    while ($myrow = $reponse->fetch_array(MYSQLI_ASSOC))
    {
        $id = $myrow["id"];
        $mail = $myrow["email"];
        $nom = $myrow["username"];
    }

    $time = $_GET["t"];
    $code = md5($mail.$time.$id.$nom);
    $code = substr($code, 0, 32);
    $correct = ($code == $_GET["code"]) && (time() - $time < 1000000);

    if ($correct)
    {
        print("
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset='UTF-8'>
            <title>Rétablissement de mot de passe</title>
            <link rel='stylesheet' href='./mail2.css'>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
            <link rel='icon' type='image/x-icon' href='../../logo.ico'>
        </head>
        <body>
            <div class='titre'>
                <h3>Rétablissement de mot de passe</h3>
            </div>
            <form onsubmit='return validateForm()' method='POST' action='mail3.php'>
                <div class='section'>
                    <h4 class='h4-style'>Votre Compte $mail</h4>
                </div>
                <div class='form-group'>
                    <input type='hidden' name='id' value='$id' /> <br>
                    <input type='hidden' name='mail' value='$mail' /> <br>
                    <input type='hidden' name='nom' value='$nom' /> <br>
                    <div class='input-container'>
                        <i class='input-icon fas fa-lock'></i>
                        <input type='password' id='password-input' class='form-style' name='mdp1' placeholder='Nouveau Mot de passe' />
                    </div>
                    <div class='input-container'>
                        <i class='input-icon fas fa-check'></i>
                        <input type='password' id='password-verif' class='form-style' name='mdp2' placeholder='Confirmer Mot de passe' />
                    </div>
                    <span id='password-error' class='error-message'></span>
                    <input type='submit' class='btn' value='Modifier' />
                </div>
            </form>
            <script>
                // Form validation
                function validateForm() {
                    const passwordInput = document.getElementById('password-input');
                    const passwordVerifInput = document.getElementById('password-verif');
                    const passwordError = document.getElementById('password-error');
            
                    if (passwordInput.value.trim() === '') {
                        passwordError.textContent = 'Veuillez saisir un mot de passe';
                        return false; // Prevent form submission
                    }
            
                    if (passwordInput.value !== passwordVerifInput.value) {
                        passwordError.textContent = 'Les mots de passe ne correspondent pas';
                        return false; // Prevent form submission
                    }
            
                    return true; // Allow form submission
                }
            </script>
        </body>
        </html>
       ");
    }
    else {
        header("Location: reset.php");
    }
}
else {
    header("Location: reset.php");
}
?>
