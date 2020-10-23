<?php
include "3utilisateurs.php";
include "2mes_fonctions.php";

$sql =  'SELECT titre, alimage, annee, album, N.styles, genre, M.noms 
FROM albums U, genres N, artistes M
WHERE N.id = U.genre AND M.id = U.artiste 
ORDER BY album';
foreach ($dbh->query($sql) as $row) {
    $album = $row['album'];
    $titre = $row['titre'];
    $annee = $row['annee'];
    $genre = $row['styles'];
    $photo = $row['alimage'];
    $artiste = $row['noms'];


    echo "<div class='row'>";
    album($photo, $titre, $album, $annee, $genre, $artiste);
    echo "</div>";
}