<?php
include "classes/page.php";
include "inc/config.php";
include "router/catalogue.php";

if (isset($_GET['id'])){
    $id = $_GET['id'];
$sql =  'SELECT U.id, titre, alimage, annee, album, N.styles, genre, M.noms, description_a 
FROM albums U, genres N, artistes M, descriptions D
WHERE N.id = U.genre AND M.id = U.artiste AND U.id = '.$id.' AND D.id = descriptionAlbums
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
    album($id, $photo, $titre, $album, $annee, $genre, $artiste);
    affich($id, $photo, $titre, $album, $annee, $genre, $artiste, $description);
    echo "</div>";
}
}
}else{
    echo "Rien afficher";
}
