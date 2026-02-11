<?php
// Questi dati corrispondono esattamente a quelli nel docker-compose.yml
$hostname = "db"; 
$dbname = "clinica_veterinaria";
$user = "user_clinica";
$pass = "password_segreta";

try {
    $db2 = new PDO("mysql:host=$hostname;dbname=$dbname", $user, $pass); 
    $db2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Errore di connessione al database: " . $e->getMessage();
    die();
}