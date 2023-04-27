<?php
session_start();



require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_SESSION['email'];
    $ses = isset($_POST['ses']) ? 1 : 0;
    $maths = isset($_POST['maths']) ? 1 : 0;
    $physique = isset($_POST['physique']) ? 1 : 0;
    $hlp = isset($_POST['hlp']) ? 1 : 0;
    $nsi = isset($_POST['nsi']) ? 1 : 0;
    $geopo = isset($_POST['geopo']) ? 1 : 0;
    $svt = isset($_POST['svt']) ? 1 : 0;
    $anglais = isset($_POST['anglais']) ? 1 : 0;

    try {
        $query = "UPDATE eleves SET ses = :ses, maths = :maths, physique = :physique, hlp = :hlp, nsi = :nsi, geopo = :geopo, svt = :svt, anglais = :anglais WHERE email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':ses', $ses);
        $stmt->bindParam(':maths', $maths);
        $stmt->bindParam(':physique', $physique);
        $stmt->bindParam(':hlp', $hlp);
        $stmt->bindParam(':nsi', $nsi);
        $stmt->bindParam(':geopo', $geopo);
        $stmt->bindParam(':svt', $svt);
        $stmt->bindParam(':anglais', $anglais);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        header('Location: ../../content/ff/index.php');
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        die();
    }
} else {
    header('Location: ../spe-select/spe-select.php');
    exit();
}
