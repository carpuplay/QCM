<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: ../../login/login-eleve/login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>OmniSup - Attendez...</title>
  <link rel="stylesheet" href="./loading.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- Loader -->
<div class="loader">
  <div class="blobs" id="loading">
    <div class="blob-center"></div>
    <div class="blob"></div>
    <div class="blob"></div>
    <div class="blob"></div>
    <div class="blob"></div>
    <div class="blob"></div>
    <div class="blob"></div>
  </div>
  <script>
    setTimeout(function(){
        document.getElementById('loading').style.display = 'none';
    }, 5000); // 10000ms = 10s
  </script>
  <script>
    var timer = setTimeout(function() {
        window.location='../dashboard/dashboard.php'
    }, 3000 + Math.floor(Math.random()*2000));
  </script>
  <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
      <filter id="goo">
        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
        <feBlend in="SourceGraphic" in2="goo" />
      </filter>
    </defs>
  </svg>
</div>

<!-- partial -->
  
</body>
</html>
