<?php
session_start();
include_once("../../php-shit/php-files/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QCM</title>
    <link rel="stylesheet" href="quiz.css">

</head>
<body>
    <header>
        <h1 onClick="" id="redirectMain" >Interfaz_qcm</h1>
        <script type="text/javascript">
            document.getElementById("redirectMain").onclick = function () {
                location.href = "../../index.html";
                };
        </script>
    </header>
    <div class="slider-thumb"></div>
    <div class="big">
        <?php
        // Retrieve a random question from the database
        $sql = "SELECT id, question FROM questions ORDER BY RAND() LIMIT 1";
        $sth = $pdo->prepare($sql);
        $sth->execute();

        $questionData = $sth->fetch();

        if ($questionData) {
            $_SESSION["id"] = $questionData['id']; // Store the question ID in the session
        }
        ?>

        <h3 class="question-title">
            <?php
            if ($questionData) {
                echo $questionData['question'];
            } else {
                echo "Aucune question retrouvée";
            }
            ?>
        </h3>

        <div class="container">
            <?php
            if ($questionData) {
                $questionId = $_SESSION["id"];

                // Retrieve the question and answer options from the database based on the random question ID
                $sql = "SELECT question, r1, r2, r3, r4, pos FROM questions WHERE id = :questionId";
                $sth = $pdo->prepare($sql);
                $sth->bindParam(":questionId", $questionId);
                $sth->execute();

                $questionData = $sth->fetch();

                // Get the correct position from the question data
                $correctPosition = $questionData['pos'];

                // Output the question and answer options
                echo '<ul>';
                if (!empty($questionData['r1'])) {
                echo '<li>';
                echo '<input type="radio" id="option1" name="selector" value="1">';
                echo '<label for="option1" class="' . (($correctPosition == 1) ? 'correct' : '') . '">' . $questionData['r1'] . '</label>';
                echo '<div class="check"></div>';
                echo '</li>';
                }
                if (!empty($questionData['r2'])) {
                echo '<li>';
                echo '<input type="radio" id="option2" name="selector" value="2">';
                echo '<label for="option2" class="' . (($correctPosition == 2) ? 'correct' : '') . '">' . $questionData['r2'] . '</label>';
                echo '<div class="check"><div class="inside"></div></div>';
                echo '</li>';
                }
                if (!empty($questionData['r3'])) {
                echo '<li>';
                echo '<input type="radio" id="option3" name="selector" value="3">';
                echo '<label for="option3" class="' . (($correctPosition == 3) ? 'correct' : '') . '">' . $questionData['r3'] . '</label>';
                echo '<div class="check"><div class="inside"></div></div>';
                echo '</li>';
                }
                if (!empty($questionData['r4'])) {
                echo '<li>';
                echo '<input type="radio" id="option4" name="selector" value="4">';
                echo '<label for="option4" class="' . (($correctPosition == 4) ? 'correct' : '') . '">' . $questionData['r4'] . '</label>';
                echo '<div class="check"><div class="inside"></div></div>';
                echo '</li>';
                }
                echo '</ul>';

                // Replace the existing "Suivant" button with two buttons: "Verifier" and "Question Suivante"
                echo '<button id="verifier-btn" class="login-btn" onclick="verifyAnswer()">Verifier</button>';
                echo '<button id="suivant-btn" class="login-btn hidden" onclick="nextQuestion()">Question Suivante</button>';
            }
            ?>
            </div>


    </div>
    <script>
        function verifyAnswer() {
            var selectedAnswer = document.querySelector('input[name="selector"]:checked');
            if (selectedAnswer) {
                var selectedPosition = parseInt(selectedAnswer.value); // Parse the selected position as an integer
                var correctPosition = parseInt("<?php echo $correctPosition; ?>"); // Parse the correct position as an integer

                // Disable further selection
                var answerInputs = document.querySelectorAll('input[name="selector"]');
                answerInputs.forEach(function (input) {
                    input.disabled = true;
                });

                // Show the "Question Suivante" button and hide the "Verifier" button
                var verifierBtn = document.getElementById('verifier-btn');
                var suivantBtn = document.getElementById('suivant-btn');
                verifierBtn.classList.add('hidden');
                suivantBtn.classList.remove('hidden');

                // Check if the selected answer is correct
                if (selectedPosition === correctPosition) {
                    selectedAnswer.nextElementSibling?.classList.add('correct');
                    selectedAnswer.nextElementSibling && (selectedAnswer.nextElementSibling.style.color = 'green');
                } else {
                    selectedAnswer.nextElementSibling?.classList.add('incorrect');
                    selectedAnswer.nextElementSibling && (selectedAnswer.nextElementSibling.style.color = 'red');
                }
            } else {
                alert("Please select an answer.");
            }
        }

        function nextQuestion() {
            // Code to navigate to the next question or perform any desired action
            // For example, you can redirect to a new page or reload the current page
            window.location.reload(); // Reload the current page
        }
    </script>

</body>
</html>
