<?php
session_start();
require_once('config.php');

// Retrieve the user's ID and selected specialites
$email = $_SESSION['email']; // Or however you store the user ID
$specialites = $_POST['spe'];

// Update the user's specialite in the database
$db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$stmt = $db->prepare('UPDATE users SET specialite = ? WHERE email = ?');
$stmt->bind_param('si', $specialites, $email);
$result = $stmt->execute();

// Send a response back to the JavaScript code
if ($result) {
  header('Location: ../../content/loader/loading.php');
  exit();
} else {
  echo 'Error';
}
?>
