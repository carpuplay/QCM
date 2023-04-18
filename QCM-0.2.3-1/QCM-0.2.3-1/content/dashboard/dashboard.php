<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: ../../login/login-eleve/login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang = 'en'>
<head>
    <meta charset = 'UTF-8' />
    <title>OmniSup - Dashboard</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./dashboard.css" >
</head>
<body>
<div class="navigation_header">
    <nav class="full">
        <div class="underline"></div>
        <div class="underline"></div>
        <div class="underline"></div>
        <a class="header-cl" onClick="ul(0)" id="menu-1">Home</a>
        <a class="header-cl" onClick="ul(1)" id="menu-2">FAQ</a>
        <a class="header-cl" onClick="ul(2)" id="menu-3" >Qui somme nous?</a>
        <a class="header-cl" onClick="ul(3)" id="menu-4">Orientation</a>
        <a class="header-cl" onClick="ul(4)" id="menu-5">Mon Profile</a>
        
        <script type="text/javascript">
            document.getElementById("menu-1").onclick = function () {
            location.href = "../../index.html";
            };
        </script>
        
        <script type="text/javascript">
            document.getElementById("menu-2").onclick = function () {
            location.href = "#";
            };
        </script>
        
        <script type="text/javascript">
        document.getElementById("menu-3").onclick = function () {
        location.href = "#";
        };
        </script>
        
        <script type="text/javascript">
        document.getElementById("menu-4").onclick = function () {
        location.href = "#";
        };
        </script>
        
        <script type="text/javascript">
        document.getElementById("menu-5").onclick = function () {
            location.href = "./landing-page/landing-prof/landing.html";
        };
        </script>
    </nav>
</div>



