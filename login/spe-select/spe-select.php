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
    <fieldset class="checkbox-group">
      <legend class="checkbox-group-legend">Choisis Tes Spécialités</legend>
      <div class="checkbox">
        <label class="checkbox-wrapper">
          <input type="checkbox" class="checkbox-input" name="ses" id="ses" value="ses"/>
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

    var niveaux = <?php echo json_encode($niveaux); ?>;
    var maxCheckboxes = 3;
    var checkedCount = 0;
    var checkedCount2 = 0;
    var checkboxList = [checkbox1, checkbox2, checkbox3,checkbox4, checkbox5, checkbox6, checkbox7, checkbox8];
   
    if (niveaux == "Terminale") {
      maxCheckboxes = 2;
    }

    for (var i = 0; i < checkboxList.length; i++) {
      checkboxList[i].addEventListener("click", function(event) {
        for (var j = 0; j < checkboxList.length; j++) {
          if (checkboxList[j].checked) {
          checkedCount = checkedCount + 1;
        }
        }
        
        if (checkedCount > maxCheckboxes) {
        event.preventDefault();
        popupWindow('wrong.php','Trop de spécialités', window, 400, 300);
        location.reload();
        }
        checkedCount = 0;
      });
    }

    butt.addEventListener("click", function(event){
      for (var k = 0; k < checkboxList.length; k++) {
          if (checkboxList[k].checked) {
          checkedCount2 = checkedCount2 + 1;
        }
        }
        
        if (checkedCount2 != maxCheckboxes) {
        event.preventDefault();
        popupWindow('wrong2.php','Pas assez de spécialités', window, 400, 300);
        location.reload();
        }
        checkedCount2 = 0;
    });

    function popupWindow(url, windowName, win, w, h) {
      const y = win.top.outerHeight / 2 + win.top.screenY - ( h / 2);
      const x = win.top.outerWidth / 2 + win.top.screenX - ( w / 2);
      return win.open(url, windowName, `toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=${w}, height=${h}, top=${y}, left=${x}`);
    }
  </script>

</body>
</html>