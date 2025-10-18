<?php
// includes/config.php
$host = 'localhost';
$dbname = 'ucaotech_db';
$username = 'adavidj';
$password = '_K@izxn01';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion: " . $e->getMessage());
}
?>

