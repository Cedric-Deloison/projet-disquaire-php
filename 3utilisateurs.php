<?php


echo "<h1>Liste des albums</h1>";

$connexion='mysql:host=localhost;dbname=proj_disquaire';
$user='root';
$password='';



try{
    $dbh = new PDO($connexion, $user, $password);
} catch (PDOException $e) {
    header("Location: erreur.html");
}
