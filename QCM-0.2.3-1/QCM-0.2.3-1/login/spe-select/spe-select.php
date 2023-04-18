
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Choisir Spécialitées</title>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./spe-select.css">

</head>
<body>
<!-- partial:index.partial.html -->

	<fieldset class="checkbox-group">
		<legend class="checkbox-group-legend">Choisi tes Spécialités</legend>
		<div class="checkbox">
			<label class="checkbox-wrapper">
				<input type="checkbox" name="spe-select" class="checkbox-input" value="ses" id="ses-checkbox" />
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
				<input type="checkbox" class="checkbox-input" name="spe-select" value="maths" id="maths-ses"/>
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
				<input type="checkbox" class="checkbox-input" />
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
</form>
<div class="submit">           <!-- Redirect to control panel -->
	<button id="button-submit" class="submit-btn">Suivant</button>
    <script type="text/javascript">
      document.getElementById("button-submit").onclick = function () {
          location.href = "../../content/loader/loading.html";
      };
    </script>
</div>

<!-- partial -->
  <script  src="./spe-select.js"></script>

</body>
</html>
