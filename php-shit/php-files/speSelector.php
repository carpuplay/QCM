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

// Delete existing user specialties first
$stmt = $db->prepare('DELETE FROM user_specialities WHERE email = ?');
$stmt->bind_param('s', $email);
$stmt->execute();

// Insert new user specialties
$stmt = $db->prepare('INSERT INTO user_specialities (email, specialty) VALUES (?, ?)');
$stmt->bind_param('ss', $email, $speciality);

// If the user selected more than 3 specialities, only insert the first 3
$selected_specialities = array_slice(explode(',', $specialites), 0, 3);

foreach ($selected_specialities as $speciality) {
    $stmt->execute();
}

// Send a response back to the JavaScript code
header('Location: ../../content/loader/loading.php');
exit();
?>