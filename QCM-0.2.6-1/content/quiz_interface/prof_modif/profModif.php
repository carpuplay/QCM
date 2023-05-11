<?php
    // Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Process form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $question = $_POST["question"];
        $r1 = $_POST["r1"];
        $r2 = $_POST["r2"];
        $r3 = $_POST["r3"];
        $r4 = $_POST["r4"];
        $pos = $_POST["pos"];
        $type = $_POST["type"];
        $chapitre = $_POST["chapitre"];
        $spe = $_POST["spe"];
        $niveaux = $_POST["niveaux"];
        $image = $_POST["image"];
        $user = $_POST["user"];

        $sql = "INSERT INTO questions (question, r1, r2, r3, r4, pos, type, chapitre, spe, niveaux, image)
                VALUES ('$question', '$r1', '$r2', '$r3', '$r4', '$pos', '$type', '$chapitre', '$spe', '$niveaux', '$image')";

        if (mysqli_query($conn, $sql)) {
            echo "Question added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
?>

