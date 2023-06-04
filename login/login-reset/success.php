<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Mail envoyé</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap">
  <link rel="stylesheet" href="./success.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="icon" type="image/x-icon" href="../../logo.ico">
</head>

<body>
  <div class="titre">
    <h3>Opération réalisé</h3>
  </div>

  <div class="success-message">
    <p>Votre code de verification a été envoyé.</p>
    <p>Si vous n'avez pas reçu d'email, vérifiez votre boite à spam.</p>
    <p>Si l'email n'est pas dans votre boite a spam, clickez ci-dessou pour re-envoyer le code de verification.</p>
    <button id="resend-btn" class="btn" disabled>Re-envoyer Email</button>
    <button class="btn" href="../../index.html">Retourner à l'aceuil</button>
    <span id="countdown"></span>
  </div>

  <script>
    // Countdown timer for re-sending email
    const resendButton = document.getElementById('resend-btn');
    const countdownSpan = document.getElementById('countdown');
    let countdownTime = 10; // Change this to your desired countdown time in seconds

    function startCountdown() {
      resendButton.disabled = true;

      const countdownInterval = setInterval(() => {
        countdownTime--;
        countdownSpan.textContent = countdownTime;

        if (countdownTime <= 0) {
          clearInterval(countdownInterval);
          resendButton.disabled = false;
          countdownSpan.textContent = '';
        }
      }, 1000);
    }

    // Add event listener to the resend button
    resendButton.addEventListener('click', startCountdown);
  </script>
</body>

</html>
