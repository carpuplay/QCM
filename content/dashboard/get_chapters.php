<?php
// Assuming you have established a database connection
include_once("../../php-shit/php-files/config.php");

// Check if the subject is provided
if (isset($_POST['subject'])) {
    $subject = $_POST['subject'];

    // Check if the level is provided
    if (isset($_POST['level'])) {
        $level = $_POST['level'];
        $query = "SELECT DISTINCT chapitre FROM chapitres WHERE spe = '$subject' AND niveaux = '$level'";
    } else {
        $query = "SELECT DISTINCT chapitre FROM chapitres WHERE spe = '$subject'";
    }

    $result = mysqli_query($link, $query);

    $chapters = array();
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $chapter = $row['chapitre'];
            $chapters[] = $chapter;
        }
    }

    // Return the chapters as JSON response
    echo json_encode($chapters);
}
?>
