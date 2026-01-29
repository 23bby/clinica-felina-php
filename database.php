<?php

try {
$hostname = "localhost";
$dbname = "clinica_veterinaria";
$user = "root";
$pass = "";
$db2 = new PDO("mysql:host=$hostname;dbname=$dbname", $user, $pass); 
$db2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Errore: " . $e->getMessage();
    die();
}
