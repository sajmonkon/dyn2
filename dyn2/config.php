<?php
// Konfigurace databáze
$host = 'localhost';
$user = 'konecnys';
$password = 'Simon2006';
$dbname = 'konecnys_dyn2';
$conn = new mysqli($host, $user, $password, $dbname);

// Větvení 1: kontrola spojení
if ($conn->connect_error) {
    die("Spojení selhalo: " . $conn->connect_error);
}
?>