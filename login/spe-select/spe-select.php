
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Choisir Spécialitées</title>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./spe-select.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
  // Assuming you're using jQuery
  $('input[name="spe"]').on('change', function() {
      // Get the value of all checked boxes
      var selectedSpecialites = $('input[name="spe"]:checked').map(function() {
        return $(this).val();
      }).get().join(',');
      
      // Send an AJAX request to update the user's specialite
      $.ajax({
        url: '../../php-shit/php-files/speSelector.php',
        method: 'POST',
        data: { spe: selectedSpecialites },
        success: function(response) {
          // Handle the response here
          console.log(response);
          window.location.replace('../../content/loader/loading.php');
        },
        error: function(xhr, status, error) {
          console.log('Error: ' + error);
        }
      });
    });
});
</script>

</head>
<body>
<!-- partial:index.partial.html -->
<form>
	<fieldset class="checkbox-group">
		<legend class="checkbox-group-legend">Choisi tes Spécialités</legend>
		<div class="checkbox">
			<label class="checkbox-wrapper">
				<input type="checkbox" name="spe" class="checkbox-input" value="ses" id="ses-checkbox" />
				<span class="checkbox-tile">
					<span class="checkbox-icon">
						<!-- -->
					</span>
					<span class="checkbox-label">Ses</span>
				</span>
			</label>
		</div>
		<div class="checkbox">
			<label class="checkbox-wrapper">
				<input type="checkbox" class="checkbox-input" name="spe" value="maths" id="maths-ses"/>
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
				<input type="checkbox" class="checkbox-input" name='spe' value='physique'/>
				<span class="checkbox-tile">
					<span class="checkbox-icon">
						<!-- -->
					</span>
					<span class="checkbox-label">Phisique Chimie</span>
				</span>
			</label>
		</div>
		<div class="checkbox">
			<label class="checkbox-wrapper">
				<input type="checkbox" class="checkbox-input" name="hlp"/>
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
				<input type="checkbox" class="checkbox-input" name="nsi" />
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
				<input type="checkbox" class="checkbox-input" name="geopo"/>
				<span class="checkbox-tile">
					<span class="checkbox-icon">
						<!-- -->
					</span>
					<span class="checkbox-label">Géopolitique</span>
				</span>
			</label>
		</div>
		<div class="checkbox">
			<label class="checkbox-wrapper">
				<input type="checkbox" class="checkbox-input" />
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
		<input type='submit' id="button-submit" class="submit-btn">Suivant</button>
	</div>
	</form>
	<script>
		// Count the number of checkboxes checked
		function countChecked() {
		return $('input[name="spe[]"]:checked').length;
		}

		$(document).ready(function() {
		// Disable the submit button by default
		$('#button-submit').prop('disabled', true);

		// Listen for changes to the checkboxes
		$('input[name="spe[]"]').on('change', function() {
			// If the maximum number of checkboxes is checked, disable the rest
			if (countChecked() >= 3) {
			$('input[name="spe[]"]:not(:checked)').prop('disabled', true);
			} else {
			$('input[name="spe[]"]:not(:checked)').prop('disabled', false);
			}

			// If no checkboxes are checked, disable the submit button
			if (countChecked() == 0) {
			$('#button-submit').prop('disabled', true);
			} else {
			$('#button-submit').prop('disabled', false);
			}
		});
		});
  </script>
</body>
</html>
       <!-- Redirect to control panel -->
	
   


<!-- partial -->
  <script  src="./spe-select.js"></script>

</body>
</html>
