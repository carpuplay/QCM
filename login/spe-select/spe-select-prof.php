<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: ../../login/login-eleve/login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Choisir Spécialités</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="./spe-select-prof.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

  <form action="../../php-shit/php-files/update-specialites.php" method="POST">
    <fieldset class="checkbox-group">
      <legend class="checkbox-group-legend">Choisissez Les Spécialités Que Vous Enseignez</legend>
      <div class="checkbox">
        <label class="checkbox-wrapper">
          <input type="checkbox" name="ses" class="checkbox-input" value="ses"/>
          <span class="checkbox-tile">
            <span class="checkbox-icon">
              <!-- -->
            </span>
            <span class="checkbox-label">SES</span>
          </span>
        </label>
      </div>
      <div class="checkbox">
        <label class="checkbox-wrapper">
          <input type="checkbox" class="checkbox-input" name="maths" value="maths"/>
          <span class="checkbox-tile">
            <span class="checkbox-icon">
              <!-- -->
            </span>
            <span class="checkbox-label">Maths</span>
          </span>
        </label>
      </div>
      <div class="checkbox">
        <label class="checkbox-wrapper">
          <input type="checkbox" class="checkbox-input" name='physique' value='physique'/>
          <span class="checkbox-tile">
            <span class="checkbox-icon">
              <!-- -->
            </span>
            <span class="checkbox-label">Physique Chimie</span>
          </span>
        </label>
      </div>
      <div class="checkbox">
        <label class="checkbox-wrapper">
          <input type="checkbox" class="checkbox-input" name="hlp" value="hlp"/>
          <span class="checkbox-tile">
            <span class="checkbox-icon">
              <!-- -->
            </span>
            <span class="checkbox-label">HLP</span>
          </span>
        </label>
      </div>
      <div class="checkbox">
        <label class="checkbox-wrapper">
          <input type="checkbox" class="checkbox-input" name="nsi" value="nsi" />
          <span class="checkbox-tile">
            <span class="checkbox-icon">
              <!-- -->
            </span>
            <span class="checkbox-label">NSI</span>
          </span>
        </label>
      </div>
      <div class="checkbox">
        <label class="checkbox-wrapper">
          <input type="checkbox" class="checkbox-input" name="geopo" value="geopo"/>
          <span class="checkbox-tile">
            <span class="checkbox-icon">
              <!-- -->
            </span>
            <span class="checkbox-label">Géopo</span>
          </span>
        </label>
      </div>
      <div class="checkbox">
        <label class="checkbox-wrapper">
          <input type="checkbox" class="checkbox-input" name="svt" value="svt"/>
		  <span class="checkbox-tile">
            <span class="checkbox-icon">
              <!-- -->
            </span>
				<span class="checkbox-label">SVT</span>
					</span>
				</label>
			</div>
		<div class="checkbox">
			<label class="checkbox-wrapper">
				<input type="checkbox" class="checkbox-input" name="anglais" value='anglais'/>
				<span class="checkbox-tile">
					<span class="checkbox-icon">
						<!-- -->
					</span>
					<span class="checkbox-label">Anglais</span>
				</span>
				</label>  
			</div>			
		</fieldset>
		<div class="submit">
			<button type='submit' id="button-submit" class="submit-btn" formaction="../../php-shit/php-files/update-specialites.php">Submit</button>
		</div>
	</form>

  <script>
    const butt = document.getElementById('button-submit')

    const checkbox1 = document.getElementById('ses');
    const checkbox2 = document.getElementById('maths');
    const checkbox3 = document.getElementById('physique');
    const checkbox4 = document.getElementById('hlp');
    const checkbox5 = document.getElementById('nsi');
    const checkbox6 = document.getElementById('geopo');
    const checkbox7 = document.getElementById('svt');
    const checkbox8 = document.getElementById('anglais');


    var checkedCount2 = 0;
    var checkboxList = [checkbox1, checkbox2, checkbox3,checkbox4, checkbox5, checkbox6, checkbox7, checkbox8];

    butt.addEventListener("click", function(event){
      for (var k = 0; k < checkboxList.length; k++) {
          if (checkboxList[k].checked) {
          checkedCount2 = checkedCount2 + 1;
        }
        }
        
        if (checkedCount2 == 0) {
        event.preventDefault();
        alert("Vous devez choisir au moins une spécialité avant de continuer.");
        }
        checkedCount2 = 0;
    });

  </script>

</body>
</html>
