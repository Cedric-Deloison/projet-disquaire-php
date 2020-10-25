<?php


$connexion = 'mysql:host=localhost;dbname=proj_disquaire';
$user = 'root';
$password = '';



try {
    $dbh = new PDO($connexion, $user, $password);
} catch (PDOException $e) {
    header("Location: erreur.html");
}
