<?php
session_start();
include_once("../../php-shit/php-files/config.php");

// Fetch distinct subjects from the chapitres table
$query = "SELECT DISTINCT spe FROM chapitres";
$result = mysqli_query($link, $query);

$subjects = array();

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $subject = $row['spe'];

        // Fetch the chapters for the current subject
        $chapterQuery = "SELECT DISTINCT chapitre FROM chapitres WHERE spe = '$subject'";
        $chapterResult = mysqli_query($link, $chapterQuery);

        $chapters = array();
        if ($chapterResult && mysqli_num_rows($chapterResult) > 0) {
            while ($chapterRow = mysqli_fetch_assoc($chapterResult)) {
                $chapter = $chapterRow['chapitre'];
                $chapters[] = $chapter;
            }
        }

        $subjects[$subject] = $chapters;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz Dashboard</title>
</head>
<body>
    <h1>Quiz Dashboard</h1>
    <form action="../quiz_interface/quiz.php" method="post">
        <label for="subject">Subject:</label>
        <select name="subject" id="subject">
            <option value="">Select a subject</option>
            <?php
            foreach ($subjects as $subject => $chapters) {
                echo '<option value="' . $subject . '">' . $subject . '</option>';
            }
            ?>
        </select>

        <label for="chapter">Chapter:</label>
        <select name="chapter" id="chapter">
            <option value="">Select a chapter</option>
            <?php
            // Get the selected subject from the submitted form data
            $selectedSubject = $_POST['subject'] ?? '';

            // Generate the options for the selected subject
            if (!empty($selectedSubject) && isset($subjects[$selectedSubject])) {
                $selectedChapters = $subjects[$selectedSubject];

                foreach ($selectedChapters as $chapter) {
                    echo '<option value="' . $chapter . '">' . $chapter . '</option>';
                }
            }
            ?>
        </select>

        <label for="level">Level:</label>
        <select name="level" id="level">
            <option value="">Select a level</option>
            <option value="premiere">Premiere</option>
            <option value="terminale">Terminale</option>
            <!-- Add more options for levels if needed -->
        </select>

        <input type="submit" value="Start Quiz">
    </form>
</body>
</html>
