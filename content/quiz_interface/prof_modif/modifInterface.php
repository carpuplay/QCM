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
	<link rel="stylesheet" href="modifInterface.css">
</head>
<body>
	<h2>Ajouter une nouvelle question</h2>

	<form method="post" action="./profModif.php">
		<input type="hidden" name="user" value="$_SESSION['email']">

		<label for="type">Question Type:</label>
		<select name="type" id="typeQuestion" required>
			<option value="">Choisir type de question</option>
			<option value="unique">Choix Unique</option>
			<option value="multiple">Choix Multiple</option>
			<option value="truefalse">Vrai / Faux</option>
		</select><br>

		<label for="question">Question:</label>
		<textarea name="question"  required></textarea><br>

		<label for="r1">Réponse 1:</label>
		<input type="checkbox" name="r[]" value="r1"><input type="text" name="r1" required><br>

		<label for="r2">Réponse 2:</label>
		<input type="checkbox" name="r[]" value="r2"><input type="text" name="r2" required><br>

		<label for="r3">Réponse 3:</label>
		<input type="checkbox" name="r[]" value="r3"><input type="text" name="r3"><br>

		<label for="r4">Réponse 4:</label>
		<input type="checkbox" name="r[]" value="r4"><input type="text" name="r4"><br>



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
        <select name="chapitre" id="chapitreSelect" required></select><br>

        <label for="image">Image:</label>
		<input type="text" name="image" placeholder="URL">
		<input type="file" name="image">
		<br>

		<input type="submit" value="Ajouter la question">
	</form>
	<div id="popup" class="popup">
		<div class="popup-content">
			<p>This website is currently in beta version. Please be aware that some features may not be fully functional.</p>
			<button id="popup-close" class="popup-close">OK</button>
		</div>
	</div>
	<script type="text/javascript">
		window.onload = function() {
		var popup = document.getElementById("popup");
		var closeButton = document.getElementById("popup-close");

  		closeButton.onclick = function() {
    		popup.style.display = "none";
		}
		}

		
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
					var option1 = document.createElement("option");
					option1.value = "Les sources de la croissance économique";
					option1.text = "Les sources de la croissance économique";
					chapitre.appendChild(option1);

					var option2 = document.createElement("option");
					option2.value = "Comment expliquer l'instabilité de la croissance ?";
					option2.text = "Comment expliquer l'instabilité de la croissance ?";
					chapitre.appendChild(option2);

					var option3 = document.createElement("option");
					option3.value = "Quels sont les fondements du commerce international et de l’internationalisation de la production ?";
					option3.text = "Quels sont les fondements du commerce international et de l’internationalisation de la production ?";
					chapitre.appendChild(option3);

					var option4 = document.createElement("option");
					option4.value = "Quelle est la place de l’Union européenne dans l’économie mondiale ?";
					option4.text = "Quelle est la place de l’Union européenne dans l’économie mondiale ?";
					chapitre.appendChild(option4);

					var option5 = document.createElement("option");
					option5.value = "La croissance économique est-elle compatible avec la préservation de l’environnement ?";
					option5.text = "La croissance économique est-elle compatible avec la préservation de l’environnement ?";
					chapitre.appendChild(option5);

					var option6 = document.createElement("option");
					option6.value = "Comment analyser la structure sociale ?";
					option6.text = "Comment analyser la structure sociale ?";
					chapitre.appendChild(option6);

					var option7 = document.createElement("option");
					option7.value = "Comment rendre compte de la mobilité sociale ?";
					option7.text = "Comment rendre compte de la mobilité sociale ?";
					chapitre.appendChild(option7);

					var option8 = document.createElement("option");
					option8.value = "Quels liens sociaux dans des sociétés où s’affirme le primat de l’individu ?";
					option8.text = "Quels liens sociaux dans des sociétés où s’affirme le primat de l’individu ?";
					chapitre.appendChild(option8);

					var option9 = document.createElement("option");
					option9.value = "La conflictualité sociale : pathologie, facteur de cohésion ou moteur de changement social ?";
					option9.text = "La conflictualité sociale : pathologie, facteur de cohésion ou moteur de changement social ?";
					chapitre.appendChild(option9);

					var option10 = document.createElement("option");
					option10.value = "Comment les pouvoirs publics peuvent-ils contribuer à la justice sociale ?";
					option10.text = "Comment les pouvoirs publics peuvent-ils contribuer à la justice sociale ?";
					chapitre.appendChild(option10);

					var option11 = document.createElement("option");
					option11.value = "Comment s’articulent marché du travail et gestion de l’emploi ?";
					option11.text = "Comment s’articulent marché du travail et gestion de l’emploi ?";
					chapitre.appendChild(option11);

					var option12 = document.createElement("option");
					option12.value = "Quelles politiques pour l’emploi ?";
					option12.text = "Quelles politiques pour l’emploi ?";
					chapitre.appendChild(option12);

					var option13 = document.createElement("option");
					option13.value = "Spécialité sciences sociales et politiques";
					option13.text = "Spécialité sciences sociales et politiques";
					chapitre.appendChild(option13);

					var option14 = document.createElement("option");
					option14.value = "Spécialité économie approfondie";
					option14.text = "Spécialité économie approfondie";
					chapitre.appendChild(option14);

				} else if (spe == "svt") {
					var option1 = document.createElement("option");
					option1.value = "Origine de la diversité génétique des espèces et conséquences sur l’évolution";
					option1.text = "Origine de la diversité génétique des espèces et conséquences sur l’évolution";
					chapitre.appendChild(option1);

					var option2 = document.createElement("option");
					option2.value = "À la recherche du passé géologique de notre planète";
					option2.text = "À la recherche du passé géologique de notre planète";
					chapitre.appendChild(option2);

					var option3 = document.createElement("option");
					option3.value = "De la plante sauvage à la plante domestiquée";
					option3.text = "De la plante sauvage à la plante domestiquée";
					chapitre.appendChild(option3);

					var option4 = document.createElement("option");
					option4.value = "Les climats de la Terre, comprendre le passé pour agir aujourd’hui et demain";
					option4.text = "Les climats de la Terre, comprendre le passé pour agir aujourd’hui et demain";
					chapitre.appendChild(option4);

					var option5 = document.createElement("option");
					option5.value = "Comportements, mouvement et système nerveux";
					option5.text = "Comportements, mouvement et système nerveux";
					chapitre.appendChild(option5);

					var option6 = document.createElement("option");
					option6.value = "Produire le mouvement : contraction musculaire et apport d’énergie";
					option6.text = "Produire le mouvement : contraction musculaire et apport d’énergie";
					chapitre.appendChild(option6);

					var option7 = document.createElement("option");
					option7.value = "Comportement et stress : vers une vision intégrée de l’organisme";
					option7.text = "Comportement et stress : vers une vision intégrée de l’organisme";
					chapitre.appendChild(option7);
				} else if (spe == "maths"){
					var option1 = document.createElement("option");
					option1.value = "Les suites";
					option1.text = "Les suites";
					chapitre.appendChild(option1);

					var option2 = document.createElement("option");
					option2.value = "Limites et continuités de fonctions";
					option2.text = "Limites et continuités de fonctions";
					chapitre.appendChild(option2);

					var option3 = document.createElement("option");
					option3.value = "Fonction trigonométrique";
					option3.text = "Fonction trigonométrique";
					chapitre.appendChild(option3);

					var option4 = document.createElement("option");
					option4.value = "Fonction exponentielle";
					option4.text = "Fonction exponentielle";
					chapitre.appendChild(option4);

					var option5 = document.createElement("option");
					option5.value = "Fonction logarithme";
					option5.text = "Fonction logarithme";
					chapitre.appendChild(option5);

					var option6 = document.createElement("option");
					option6.value = "Nombres complexes";
					option6.text = "Nombres complexes";
					chapitre.appendChild(option6);

					var option7 = document.createElement("option");
					option7.value = "Calcul intégral";
					option7.text = "Calcul intégral";
					chapitre.appendChild(option7);

					var option8 = document.createElement("option");
					option8.value = "Géométrie dans l'espace";
					option8.text = "Géométrie dans l'espace";
					chapitre.appendChild(option8);

					var option9 = document.createElement("option");
					option9.value = "Probabilités";
					option9.text = "Probabilités";
					chapitre.appendChild(option9);

					var option10 = document.createElement("option");
					option10.value = "Échantillonnage";
					option10.text = "Échantillonnage";
					chapitre.appendChild(option10);

					var option11 = document.createElement("option");
					option11.value = "Spécialité mathématiques";
					option11.text = "Spécialité mathématiques";
					chapitre.appendChild(option11);
				
				} else if (spe == "hlp"){
					var option1 = document.createElement("option");
					option1.value = "Éducation, transmission et émancipation";
					option1.text = "Éducation, transmission et émancipation";
					chapitre.appendChild(option1);

					var option2 = document.createElement("option");
					option2.value = "Les expressions de la sensibilité";
					option2.text = "Les expressions de la sensibilité";
					chapitre.appendChild(option2);

					var option3 = document.createElement("option");
					option3.value = "Les métamorphoses du moi";
					option3.text = "Les métamorphoses du moi";
					chapitre.appendChild(option3);

					var option4 = document.createElement("option");
					option4.value = "Création, continuités et ruptures";
					option4.text = "Création, continuités et ruptures";
					chapitre.appendChild(option4);

					var option5 = document.createElement("option");
					option5.value = "Histoire et violence";
					option5.text = "Histoire et violence";
					chapitre.appendChild(option5);

					var option6 = document.createElement("option");
					option6.value = "L’humain et ses limites";
					option6.text = "L’humain et ses limites";
					chapitre.appendChild(option6);

				} else if(spe == "geopo"){
					var option1 = document.createElement("option");
					option1.value = "De nouveaux espaces de conquête";
					option1.text = "De nouveaux espaces de conquête";
					chapitre.appendChild(option1);

					var option2 = document.createElement("option");
					option2.value = "Faire la guerre, faire la paix : formes de conflits et modes de résolution";
					option2.text = "Faire la guerre, faire la paix : formes de conflits et modes de résolution";
					chapitre.appendChild(option2);

					var option3 = document.createElement("option");
					option3.value = "Histoire et mémoires";
					option3.text = "Histoire et mémoires";
					chapitre.appendChild(option3);

					var option4 = document.createElement("option");
					option4.value = "Les enjeux géopolitiques liés à la conservation et à la valorisation du patrimoine";
					option4.text = "Les enjeux géopolitiques liés à la conservation et à la valorisation du patrimoine";
					chapitre.appendChild(option4);

					var option5 = document.createElement("option");
					option5.value = "L’environnement, un enjeu planétaire";
					option5.text = "L’environnement, un enjeu planétaire";
					chapitre.appendChild(option5);

					var option6 = document.createElement("option");
					option6.value = "L’enjeu de la connaissance";
					option6.text = "L’enjeu de la connaissance";
					chapitre.appendChild(option6);
				}

			} else if (niveaux == "premiere") {
				
				if (spe == "nsi") {
					var option1 = document.createElement("option");
					option1.value = "Au cœur de l'ordinateur";
					option1.text = "Au cœur de l'ordinateur";
					chapitre.appendChild(option1);

					var option2 = document.createElement("option");
					option2.value = "L'ordinateur de bureau";
					option2.text = "L'ordinateur de bureau";
					chapitre.appendChild(option2);

					var option3 = document.createElement("option");
					option3.value = "Réseaux";
					option3.text = "Réseaux";
					chapitre.appendChild(option3);

					var option4 = document.createElement("option");
					option4.value = "Interagir sur le web";
					option4.text = "Interagir sur le web";
					chapitre.appendChild(option4);

					var option5 = document.createElement("option");
					option5.value = "Génie logiciel";
					option5.text = "Génie logiciel";
					chapitre.appendChild(option5);

					var option6 = document.createElement("option");
					option6.value = "Algorithmique et programmation";
					option6.text = "Algorithmique et programmation";
					chapitre.appendChild(option6);
				
				} else if (spe == "ses") {
					var option1 = document.createElement("option");
					option1.value = "Le fonctionnement d'un marché concurrentiel";
					option1.text = "Le fonctionnement d'un marché concurrentiel";
					chapitre.appendChild(option1);

					var option2 = document.createElement("option");
					option2.value = "Le fonctionnement d'un marché concurrentiel";
					option2.text = "Le fonctionnement d'un marché concurrentiel";
					chapitre.appendChild(option2);

					var option3 = document.createElement("option");
					option3.value = "Les principales défaillances du marché";
					option3.text = "Les principales défaillances du marché";
					chapitre.appendChild(option3);

					var option4 = document.createElement("option");
					option4.value = "Le financement des agents économiques";
					option4.text = "Le financement des agents économiques";
					chapitre.appendChild(option4);

					var option5 = document.createElement("option");
					option5.value = "La définition de la monnaie et sa création";
					option5.text = "La définition de la monnaie et sa création";
					chapitre.appendChild(option5);

					var option6 = document.createElement("option");
					option6.value = "La manière dont la socialisation contribue à expliquer les différences de comportements des individus";
					option6.text = "La manière dont la socialisation contribue à expliquer les différences de comportements des individus";
					chapitre.appendChild(option6);

					var option7 = document.createElement("option");
					option7.value = "La construction et l'évolution des liens sociaux";
					option7.text = "La construction et l'évolution des liens sociaux";
					chapitre.appendChild(option7);

					var option8 = document.createElement("option");
					option8.value = "Les processus sociaux qui contribuent à la déviance";
					option8.text = "Les processus sociaux qui contribuent à la déviance";
					chapitre.appendChild(option8);

					var option9 = document.createElement("option");
					option9.value = "La formation et l'expression de l'opinion publique";
					option9.text = "La formation et l'expression de l'opinion publique";
					chapitre.appendChild(option9);

					var option10 = document.createElement("option");
					option10.value = "Voter : une affaire individuelle ou collective";
					option10.text = "Voter : une affaire individuelle ou collective";
					chapitre.appendChild(option10);

					var option11 = document.createElement("option");
					option11.value = "La manière dont l'assurance et de la protection sociale contribuent à la gestion des risques dans les sociétés développées ";
					option11.text = "La manière dont l'assurance et de la protection sociale contribuent à la gestion des risques dans les sociétés développées ";
					chapitre.appendChild(option11);

					var option12 = document.createElement("option");
					option12.value = "L'organisation et le gouvernement des entreprises";
					option12.text = "L'organisation et le gouvernement des entreprises";
					chapitre.appendChild(option12);
				
				} else if (spe == "svt") {
					var option1 = document.createElement("option");
					option1.value = "La reproduction conforme de la cellule et la réplication de l'ADN";
					option1.text = "La reproduction conforme de la cellule et la réplication de l'ADN";
					chapitre.appendChild(option1);

					var option2 = document.createElement("option");
					option2.value = "À l'origine de la variabilité génétique : les mutations";
					option2.text = "À l'origine de la variabilité génétique : les mutations";
					chapitre.appendChild(option2);

					var option3 = document.createElement("option");
					option3.value = "L'expression du patrimoine génétique";
					option3.text = "L'expression du patrimoine génétique";
					chapitre.appendChild(option3);

					var option4 = document.createElement("option");
					option4.value = "La mobilité des continents : naissance d'une idée";
					option4.text = "La mobilité des continents : naissance d'une idée";
					chapitre.appendChild(option4);

					var option5 = document.createElement("option");
					option5.value = "De la dérive des continents à l'expansion océanique";
					option5.text = "De la dérive des continents à l'expansion océanique";
					chapitre.appendChild(option5);

					var option6 = document.createElement("option");
					option6.value = "Le modèle actuel de la tectonique des plaques";
					option6.text = "Le modèle actuel de la tectonique des plaques";
					chapitre.appendChild(option6);

					var option7 = document.createElement("option");
					option7.value = "Tectonique des plaques et géologie appliquée";
					option7.text = "Tectonique des plaques et géologie appliquée";
					chapitre.appendChild(option7);

					var option8 = document.createElement("option");
					option8.value = "La production agricole végétale et animale";
					option8.text = "La production agricole végétale et animale";
					chapitre.appendChild(option8);

					var option9 = document.createElement("option");
					option9.value = "Les impacts des pratiques alimentaires";
					option9.text = "Les impacts des pratiques alimentaires";
					chapitre.appendChild(option9);

					var option10 = document.createElement("option");
					option10.value = "Devenir femme ou homme";
					option10.text = "Devenir femme ou homme";
					chapitre.appendChild(option10);

					var option11 = document.createElement("option");
					option11.value = "Sexualité et procréation";
					option11.text = "Sexualité et procréation";
					chapitre.appendChild(option11);

					var option12 = document.createElement("option");
					option12.value = "Patrimoine génétique et maladie";
					option12.text = "Patrimoine génétique et maladie";
					chapitre.appendChild(option12);

					var option13 = document.createElement("option");
					option13.value = "Variations du génome et maladie";
					option13.text = "Variations du génome et maladie";
					chapitre.appendChild(option13);

					var option14 = document.createElement("option");
					option14.value = "De la lumière au message nerveux";
					option14.text = "De la lumière au message nerveux";
					chapitre.appendChild(option14);

					var option15 = document.createElement("option");
					option15.value = "Cerveau et vision : aires visuelles et plasticité cérébrale";
					option15.text = "Cerveau et vision : aires visuelles et plasticité cérébrale";
					chapitre.appendChild(option15);
				
				} else if(spe == "maths"){
					var option1 = document.createElement("option");
					option1.value = "Étude de fonctions";
					option1.text = "Étude de fonctions";
					chapitre.appendChild(option1);

					var option2 = document.createElement("option");
					option2.value = "Dérivation";
					option2.text = "Dérivation";
					chapitre.appendChild(option2);

					var option3 = document.createElement("option");
					option3.value = "Suites";
					option3.text = "Suites";
					chapitre.appendChild(option3);

					var option4 = document.createElement("option");
					option4.value = "Géométrie";
					option4.text = "Géométrie";
					chapitre.appendChild(option4);

					var option5 = document.createElement("option");
					option5.value = "Probabilités et statistiques";
					option5.text = "Probabilités et statistiques";
					chapitre.appendChild(option5);

				}else if (spe == "hlp"){
					var option1 = document.createElement("option");
					option1.value = "L'art de la parole ";
					option1.text = "L'art de la parole ";
					chapitre.appendChild(option1);

					var option2 = document.createElement("option");
					option2.value = "L'autorité de la parole";
					option2.text = "L'autorité de la parole";
					chapitre.appendChild(option2);

					var option3 = document.createElement("option");
					option3.value = "Les séductions de la parole";
					option3.text = "LLes séductions de la parole";
					chapitre.appendChild(option3);

					var option4 = document.createElement("option");
					option4.value = "Découverte du monde et pluralité des cultures";
					option4.text = "Découverte du monde et pluralité des cultures";
					chapitre.appendChild(option4);

					var option5 = document.createElement("option");
					option5.value = "Décrire, figurer, imaginer";
					option5.text = "Décrire, figurer, imaginer";
					chapitre.appendChild(option5);

					var option6 = document.createElement("option");
					option6.value = "L'homme et l'animal";
					option6.text = "L'homme et l'animal";
					chapitre.appendChild(option6);

				} else if (spe == "geopo"){
					var option1 = document.createElement("option");
					option1.value = "Comprendre un régime politique : la démocratie";
					option1.text = "Comprendre un régime politique : la démocratie";
					chapitre.appendChild(option1);

					var option2 = document.createElement("option");
					option2.value = "Analyser les dynamiques des puissances internationales";
					option2.text = "Analyser les dynamiques des puissances internationales";
					chapitre.appendChild(option2);

					var option3 = document.createElement("option");
					option3.value = "Étudier les divisions politiques du monde : les frontières";
					option3.text = "Étudier les divisions politiques du monde : les frontières";
					chapitre.appendChild(option3);

					var option4 = document.createElement("option");
					option4.value = "S’informer : un regard critique sur les sources et modes de communication";
					option4.text = "S’informer : un regard critique sur les sources et modes de communication";
					chapitre.appendChild(option4);

					var option5 = document.createElement("option");
					option5.value = "Analyser les relations entre États et religions";
					option5.text = "Analyser les relations entre États et religions";
					chapitre.appendChild(option5);
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
			} else if (spe == "hlp" && (selectedOption == "chapitre5" || selectedOption == "chapitre6")){
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