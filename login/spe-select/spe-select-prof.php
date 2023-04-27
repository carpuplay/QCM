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

  <form action="../../php-shit/php-files/update-specialites.php" method="post">
    <fieldset class="checkbox-group">
      <legend class="checkbox-group-legend">Choisissez Les Spécialités Que Vous Enseignez</legend>
      <div class="checkbox">
        <label class="checkbox-wrapper">
          <input type="checkbox" name="spe[]" class="checkbox-input" value="ses" id="ses-checkbox" />
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
          <input type="checkbox" class="checkbox-input" name="spe[]" value="maths" id="maths-checkbox"/>
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
          <input type="checkbox" class="checkbox-input" name='spe[]' value='physique'/>
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
          <input type="checkbox" class="checkbox-input" name="spe[]" value="hlp"/>
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
          <input type="checkbox" class="checkbox-input" name="spe[]" value="nsi" />
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
          <input type="checkbox" class="checkbox-input" name="spe[]" value="geopo"/>
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
          <input type="checkbox" class="checkbox-input" name="spe[]" value="svt"/>
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
				<input type="checkbox" class="checkbox-input" name="anglais"/>
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
			<input type='submit' id="button-submit" class="submit-btn">
		</div>
	</form>

</body>
</html>
       <!-- Redirect to control panel -->
	
   


<!-- partial -->
  <script  src="./spe-select.js"></script>

</body>
</html>