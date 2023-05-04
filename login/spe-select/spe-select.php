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
  <title>Choisir Spécialités</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="./spe-select.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

<form action="../../php-shit/php-files/update-specialites.php" method="POST">
<script>
    function checkboxes()
      {
       var inputElems = document.getElementsByTagName("input"),
        count = 0;

        for (var i=0; i<inputElems.length; i++) {       
           if (inputElems[i].type == "checkbox" && inputElems[i].checked == true){
              count++;
           }

        }
      return count;
     }
  </script>
  <script>
      setInterval(function limite(){
            count=call(checkboxes());
            if ($niveaux == 'Premiere'){
              if (count > 3) {
                document.getElementById('ses').checked=false;
                document.getElementById('maths').checked=false;
                document.getElementById('nsi').checked=false;
                document.getElementById('geopo').checked=false;
                document.getElementById('physique').checked=false;
                document.getElementById('hlp').checked=false;
                document.getElementById('anglais').checked=false;
                document.getElementById('svt').checked=false;
                alert("allowed only 3");
              }
            }else{
              if (count > 2) {
                document.getElementById('ses').checked=false;
                document.getElementById('maths').checked=false;
                document.getElementById('nsi').checked=false;
                document.getElementById('geopo').checked=false;
                document.getElementById('physique').checked=false;
                document.getElementById('hlp').checked=false;
                document.getElementById('anglais').checked=false;
                document.getElementById('svt').checked=false;
                alert("allowed only 2");
              }
            }
          }, 500)
  </script>

    <fieldset class="checkbox-group">
      <legend class="checkbox-group-legend">Choisis Tes Spécialités</legend>
      <div class="checkbox">
        <label class="checkbox-wrapper">
          <input type="checkbox" name="ses" id="ses" class="checkbox-input" value="ses"/>
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
          <input type="checkbox" class="checkbox-input" name="maths" id="maths" value="maths"/>
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
          <input type="checkbox" class="checkbox-input" name='physique' id="physique" value='physique'/>
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
          <input type="checkbox" class="checkbox-input" name="hlp" id="hlp" value="hlp"/>
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
          <input type="checkbox" class="checkbox-input" name="nsi" id="nsi" value="nsi" />
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
          <input type="checkbox" class="checkbox-input" name="geopo" id="geopo" value="geopo"/>
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
          <input type="checkbox" class="checkbox-input" name="svt" id="svt" value="svt"/>
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
				<input type="checkbox" class="checkbox-input" name="anglais" id="anglais" value='anglais'/>
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
			<button id="button-submit" class="submit-btn">Suivant</button>
		</div>
	</form>


<!-- partial -->
  <script  src="./spe-select.js"></script>
  
</body>
</html>
