<?php
session_start();
// Retrieve the user's ID and selected specialites
$_SESSION['email'] = $email; // Or however you store the user ID
$specialites = $_POST['spe'];

// Update the user's specialite in the database
$db = new mysqli('localhost', 'username', 'password', 'database_name');
$stmt = $db->prepare('UPDATE users SET specialite = ? WHERE email = ?');
$stmt->bind_param('si', $specialites, $email);
$result = $stmt->execute();

// Send a response back to the JavaScript code
if ($result) {
  echo 'Success';
} else {
  echo 'Error';
}
?>