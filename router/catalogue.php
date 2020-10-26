<?php

$sql =  'SELECT U.id AS id, titre, alimage, annee, album, styles, genre, noms , descriptionAlbums
FROM albums U, genres N, artistes M , descriptions D
WHERE N.id = U.genre AND M.id = U.artiste AND D.id = U.description
ORDER BY album';


$dbh->query("SET NAMES utf8");

$contenu = "";
foreach ($dbh->query($sql) as $row) {
  $id = $row['id'];
  $reserve = $id;
  $album = $row['album'];
  $titre = $row['titre'];
  $annee = $row['annee'];
  $genre = $row['styles'];
  $photo = $row['alimage'];
  $artiste = $row['noms'];
  $description = $row['descriptionAlbums'];



  $contenu .= affich($reserve, $photo, $titre, $album, $annee, $genre, $artiste, $description);
}


$texte = array("titre" => "Bienvenue", "sous-titre" => "Un site dynamique", "contenu" => $contenu);


?>