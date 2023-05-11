<?php
session_start();

require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $email = $_SESSION['email'];
    if (isset($_POST['ses']) && $_POST['ses'] =='ses' ){
        $ses = 1;
    }else{
        $ses = 0;
    }
    if (isset($_POST['maths']) && $_POST['maths'] == 'maths'){
        $maths = 1;
     }else{
        $ses = 0;
    }
    if (isset($_POST['physique']) && $_POST['physique'] == 'physique'){
        $physique = 1;
    }else{
        $physique = 0;
    }
    if (isset($_POST['hlp']) && $_POST['hlp'] == 'hlp'){
        $hlp = 1;
    }else{
        $hlp = 0;
    }
    if (isset($_POST['nsi']) && $_POST['nsi'] == 'nsi'){
        $nsi = 1;
    }else{
        $nsi = 0;
    }
    if (isset($_POST['geopo']) && $_POST['geopo'] == 'geopo'){
        $geopo = 1;
    }else{
        $geopo = 0;
    }
    if (isset($_POST['svt']) && $_POST['svt'] == 'svt'){
        $svt = 1;
    }else{
        $svt = 0;
    }
    if (isset($_POST['anglais']) && $_POST['anglais'] == 'anglais'){
        $anglais = 1;
    }else{
        $anglais = 0;
    }

    try {
        $query = "UPDATE users SET spe_nsi = :nsi, spe_geopo = :geopo, spe_ses = :ses, spe_math = :maths, spe_physique = :physique,  spe_anglais = :anglais, spe_hlp = :hlp, spe_svt = :svt WHERE email = :email";
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
} 
else 
{
    header('Location: ../spe-select/spe-select.php');
    exit();
}