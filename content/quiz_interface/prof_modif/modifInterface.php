<?php
    session_start();
    // Check if user is logged in
    if (!isset($_SESSION['email'])) {
        header('Location: ../../../login/login-prof/login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>OmniSup - Ajouter une question</title>
	<link rel="stylesheet" href="modifInterface.css">
</head>
<body>
	<h2 class="title-text">Ajouter une nouvelle question</h2>

	<div class="container">
		<form method="post" action="./profModif.php">


			<label class="votre-question" for="question">Votre question:</label>
			<textarea name="question" rows="5" cols="40" required></textarea><br>

			<div class="form-group">
				<input type="text" name="r1" class="form-style" placeholder="Réponse 1" required><br>
			</div>
			<div class="form-group mt-2">
				<input type="text" name="r2" class="form-style" placeholder="Réponse 2" required><br>
			</div>
			<div class="form-group">
				<input type="text" name="r3" class="form-style" placeholder="Réponse 3"><br>
			</div>
			<div class="form-group">
				<input type="text" name="r4" class="form-style" placeholder="Réponse 4"><br>
			</div>


			<label for="pos">Position de la réponse :</label>
			<input type="number" name="pos" min="1" max="4" required><br>

			<label for="type">Ttpe de question:</label>
			<input type="text" name="type" required><br>

			<label for="niveaux">Niveaux:</label>
			<select name="niveaux" id="niveauxSelect" required>
				<option value="">Sélectionez votre niveaux</option>
				<option value="terminale">Terminale</option>
				<option value="premiere">Première</option>
			</select><br>

			<label for="spe">Spécialité:</label>
			<select name="spe" id="speSelect" required>
				<option value="">Sélectionez votre Spécialité</option>
				<option value="nsi">NSI</option>
				<option value="ses">SES</option>
				<option value="hlp">HLP</option>
				<option value="maths">Maths</option>
				<option value="physique">Physique-Chimie</option>
				<option value="anglais">Anglais</option>
				<option value="svt">SVT</option>
			</select><br>

			<label for="chapitre">Chapitre:</label>
			<select name="chapitre" id="chapitreSelect" required>
				<option value="test">Sélectionnez d'abord le niveau</option>
			</select><br>

			<label for="image">Image:</label>
			<input type="text" name="image"><br>

			<input type="submit" value="Ajouter une question">
		</form>
	</div>	
	</div>
	<script type="text/javascript">
		function updateChapitreOptions() {
			var niveaux = document.getElementById("niveauxSelect").value;
			var chapitre = document.getElementById("chapitreSelect");
			var spe = document.getElementById("speSelect").value;

			// elimina residuos
			while (chapitre.firstChild) {
				chapitre.removeChild(chapitre.firstChild);
			}

			// anade un default
			var defaultOption = document.createElement("option");
			defaultOption.value = "";
			defaultOption.text = "Sélectionnez le chapitre";
			chapitre.appendChild(defaultOption);

			// Añade el contenido
			if (niveaux == "terminale") {
				if (spe == "nsi") {
					var option1 = document.createElement("option");
					option1.value = "structures-de-donnees";
					option1.text = "Structures de données";
					chapitre.appendChild(option1);

					var option2 = document.createElement("option");
					option2.value = "base-de-donnees";
					option2.text = "Base de données";
					chapitre.appendChild(option2);

					var option3 = document.createElement("option");
					option3.value = "architectures-reseaux";
					option3.text = "Architectures matérielles, systèmes d'exploitation et réseaux";
					chapitre.appendChild(option3);

					var option4 = document.createElement("option");
					option4.value = "langages-programmation";
					option4.text = "Langages et programmation";
					chapitre.appendChild(option4);

					var option5 = document.createElement("option");
					option5.value = "algorithmique";
					option5.text = "Algorithmique";
					chapitre.appendChild(option5);

				} else if (spe == "ses") {
					var option3 = document.createElement("option");
					option3.value = "chapitre3";
					option3.text = "Chapitre 3";
					chapitre.appendChild(option3);
				}
			} else if (niveaux == "premiere") {
				if (spe == "nsi") {
					var option1 = document.createElement("option");
					option1.value = "histoire-de-informatique";
					option1.text = "Histoire de l’informatique";
					chapitre.appendChild(option1);

					var option2 = document.createElement("option");
					option2.value = "types-et-valeurs-de-base";
					option2.text = "Représentation des données : types et valeurs de base";
					chapitre.appendChild(option2);

					var option3 = document.createElement("option");
					option3.value = "types-construits";
					option3.text = "Représentation des données : types construits";
					chapitre.appendChild(option3);

					var option4 = document.createElement("option");
					option4.value = "traitement-de-données-en-tables";
					option4.text = "Traitement de données en tables";
					chapitre.appendChild(option4);

					var option5 = document.createElement("option");
					option5.value = "interactions-homme-machine-web";
					option5.text = "Interactions entre l’homme et la machine sur le Web";
					chapitre.appendChild(option5);

					var option6 = document.createElement("option");
					option6.value = "architectures-materielles-systemes-exploitation";
					option6.text = " rchitectures matérielles et systèmes d’exploitation";
					chapitre.appendChild(option6);

					var option7 = document.createElement("option");
					option7.value = "langages-et-programmation";
					option7.text = "Langages et programmation";
					chapitre.appendChild(option7);

					var option8 = document.createElement("option");
					option8.value = "algorithmique";
					option8.text = "Algorithmique";
					chapitre.appendChild(option8);

				} else if (spe == "ses") {
					var option3 = document.createElement("option");
					option3.value = "chapitre3pr";
					option3.text = "Chapitre 3pr";
					chapitre.appendChild(option3);
				}
			}
		}

		function updateChapitreOnSpecialityChange() {
			var spe = document.getElementById("speSelect").value;
			var selectedOption = document.getElementById("chapitreSelect").value;
			
			// verifica que el contenido que hay en pantalla se ofrece en esa spe y nivel
			if (spe == "nsi" && (selectedOption == "chapitre3" || selectedOption == "chapitre4" || selectedOption == "chapitre5")) {
				document.getElementById("chapitreSelect").selectedIndex = 0; // reset to default 
			} else if (spe == "ses" && (selectedOption == "chapitre1" || selectedOption == "chapitre2")) {
				document.getElementById("chapitreSelect").selectedIndex = 0; // reset to default
			}

			updateChapitreOptions();
		}

		// llama la funcion al cargar
		updateChapitreOptions();

		// Call updateChapitreOptions whenever the niveaux dropdown changes
		var niveauxSelect = document.getElementById("niveauxSelect");
		niveauxSelect.addEventListener("change", updateChapitreOptions);

		// Call updateChapitreOnSpecialityChange whenever the spe dropdown changes
		var speSelect = document.getElementById("speSelect");
		speSelect.addEventListener("change", updateChapitreOnSpecialityChange);
	</script>




</body>