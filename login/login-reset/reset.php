<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Rétablissement de mot de passe</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap">
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
  <div class="titre">
    <h3>Rétablissement de mot de passe</h3>
  </div>
  <form onsubmit="return validateForm()" method="POST" action="mail.php">
    <div class="form-group">
      <input type="email" id="email-input" name="mail" placeholder="Votre email" class="form-style">
      <i class="input-icon fas fa-envelope"></i>
      <span id="email-error" class="error-message"></span>
    </div>
    <input type="submit" value="Envoyer Code" class="btn">
  </form>

  <div id="resend-container">
    <button id="resend-btn" class="btn" disabled>Re-envoyer le code</button>
    <span id="countdown"></span>
  </div>

  <script>
    // Countdown timer for resending email
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

    // Form validation
    function validateForm() {
      const emailInput = document.getElementById('email-input');
      const emailError = document.getElementById('email-error');

      if (emailInput.value.trim() === '') {
        emailError.textContent = 'Veuillez saisir votre email';
        return false; // Prevent form submission
      }

      return true; // Allow form submission
    }
  </script>
</body>

</html>
