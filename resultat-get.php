<?php

echo "<h1>Résultat par GET</h1>";

print_r($_GET);

$nom = $_GET['nom'];

echo "<p>Bonjour $nom</p>";

?>
