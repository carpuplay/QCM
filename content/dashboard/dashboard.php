<?php
session_start();
include_once("../../php-shit/php-files/config.php");

// Fetch distinct subjects from the questions table
$query = "SELECT DISTINCT spe
          FROM questions";
$result = mysqli_query($link, $query);

$subjects = array();

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $subject = $row['spe'];
        $subjects[] = $subject;
    }
}

// Fetch distinct levels from the questions table
$query = "SELECT DISTINCT niveaux 
          FROM questions";
$result = mysqli_query($link, $query);

$levels = array();

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $level = $row['niveaux'];
        $levels[] = $level;
    }
}

// Fetch distinct chapters from the questions table based on the question IDs in the qcm table
$query = "SELECT DISTINCT chapitre 
          FROM questions
          INNER JOIN qcm ON FIND_IN_SET(questions.id, qcm.`questionId`)";
$result = mysqli_query($link, $query);

$chapters = array();

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $chapter = $row['chapitre'];
        $chapters[] = $chapter;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Load the chapters based on the selected subject and level
            $("#subject, #level").change(function () {
                var subject = $("#subject").val();
                var level = $("#level").val();

                $.ajax({
                    url: "get_chapters.php",
                    method: "POST",
                    data: {subject: subject, level: level},
                    dataType: "json",
                    success: function (data) {
                        $("#chapter").empty();
                        $("#chapter").append('<option value="">All Chapters</option>');
                        $.each(data, function (index, chapter) {
                            $("#chapter").append('<option value="' + chapter + '">' + chapter + '</option>');
                        });
                    }
                });
            });
        });
    </script>
</head>
<body>
    <div class="title-1">
        <h1>Quiz Dashboard</h1>
    </div>
    <form action="" method="post">
        <label for="subject">Subject:</label>
        <select name="subject" id="subject">
            <option value="">All Subjects</option>
            <?php
            foreach ($subjects as $subject) {
                $selected = ($_POST['subject'] ?? '') === $subject ? 'selected' : '';
                echo '<option value="' . $subject . '" ' . $selected . '>' . $subject . '</option>';
            }
            ?>
        </select>

        <label for="level">Level:</label>
        <select name="level" id="level">
            <option value="">All Levels</option>
            <?php
            foreach ($levels as $level) {
                $selected = ($_POST['level'] ?? '') === $level ? 'selected' : '';
                echo '<option value="' . $level . '" ' . $selected . '>' . $level . '</option>';
            }
            ?>
        </select>

        <label for="chapter">Chapter:</label>
        <select name="chapter" id="chapter">
            <option value="">All Chapters</option>
            <?php
            foreach ($chapters as $chapter) {
                $selected = ($_POST['chapter'] ?? '') === $chapter ? 'selected' : '';
                echo '<option value="' . $chapter . '" ' . $selected . '>' . $chapter . '</option>';
            }
            ?>
        </select>

        <input type="submit" value="Apply Filters">
    </form>

    <?php
    // Check if the filters form is submitted
    if (isset($_POST['subject']) || isset($_POST['level']) || isset($_POST['chapter'])) {
        $selectedSubject = $_POST['subject'] ?? '';
        $selectedLevel = $_POST['level'] ?? '';
        $selectedChapter = $_POST['chapter'] ?? '';

        $query = "SELECT qcm.titre 
                  FROM qcm
                  INNER JOIN questions ON FIND_IN_SET(questions.id, qcm.`questionId`)";

        // Apply the filters to the query
        $conditions = array();

        if (!empty($selectedSubject)) {
            $conditions[] = "questions.spe = '$selectedSubject'";
        }

        if (!empty($selectedLevel)) {
            $conditions[] = "questions.niveaux = '$selectedLevel'";
        }

        if (!empty($selectedChapter)) {
            $conditions[] = "questions.chapitre = '$selectedChapter'";
        }

        if (!empty($conditions)) {
            $query .= " WHERE " . implode(" AND ", $conditions);
        }

        $result = mysqli_query($link, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>" . $row['titre'] . "</p>";
            }
        } else {
            echo "<p>No results found.</p>";
        }
    }
    ?>
</body>
</html>
