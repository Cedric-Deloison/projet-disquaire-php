
<?php 

echo "<h1>Résultat par POST</h1>";

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    $nom = $_GET['nom'];

    echo "<p>Bonjour $nom </p>";

?>
