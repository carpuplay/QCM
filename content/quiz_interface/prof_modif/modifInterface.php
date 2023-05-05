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
	<title>Ajouter une nouvelle question</title>
</head>
<body>
	<h2>Ajouter une nouvelle question</h2>

	<form method="post" action="./profModif.php">


		<label for="question">Question:</label>
		<textarea name="question" rows="5" cols="40" required></textarea><br>

		<label for="r1">Answer 1:</label>
		<input type="text" name="r1" required><br>

		<label for="r2">Answer 2:</label>
		<input type="text" name="r2" required><br>

		<label for="r3">Answer 3:</label>
		<input type="text" name="r3"><br>

		<label for="r4">Answer 4:</label>
		<input type="text" name="r4"><br>

		<label for="pos">Correct Answer Position:</label>
		<input type="number" name="pos" min="1" max="4" required><br>

		<label for="type">Question Type:</label>
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
					option1.value = "structures-de-donnees-t";
					option1.text = "Structures de données";
					chapitre.appendChild(option1);

					var option2 = document.createElement("option");
					option2.value = "base-de-donnees-t";
					option2.text = "Base de données";
					chapitre.appendChild(option2);

					var option3 = document.createElement("option");
					option3.value = "architectures-reseaux-t";
					option3.text = "Architectures matérielles, systèmes d'exploitation et réseaux";
					chapitre.appendChild(option3);

					var option4 = document.createElement("option");
					option4.value = "langages-programmation-t";
					option4.text = "Langages et programmation";
					chapitre.appendChild(option4);

					var option5 = document.createElement("option");
					option5.value = "algorithmique-t";
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
					option1.value = "chapitre 1 pr";
					option1.text = "Chapitre 1 pr";
					chapitre.appendChild(option1);

					var option2 = document.createElement("option");
					option2.value = "chapitre2 pr";
					option2.text = "Chapitre 2 pr";
					chapitre.appendChild(option2);
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