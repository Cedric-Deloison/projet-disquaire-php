<?php

$sql =  'SELECT U.id, titre, alimage, annee, album, N.styles, genre, M.noms, description_a
FROM albums U, genres N, artistes M, descriptions D
WHERE N.id = U.genre AND M.id = U.artiste AND D.id = U.descriptionAlbums
ORDER BY album';
foreach ($dbh->query($sql) as $row) {
    $id = $row['id'];
    $album = $row['album'];
    $titre = $row['titre'];
    $annee = $row['annee'];
    $genre = $row['styles'];
    $photo = $row['alimage'];
    $artiste = $row['noms'];
    $description = $row['description_a'];


    echo "<div class='row'>";
    affich($id, $photo, $titre, $album, $annee, $genre, $artiste, $description);
    echo "</div>";
}