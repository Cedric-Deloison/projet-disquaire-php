<?php

<<<<<<< HEAD
$sql =  'SELECT U.id AS id, titre, alimage, annee, album, styles, genre, noms , descriptionAlbums
=======
$sql =  'SELECT U.id AS reserve, titre, alimage, annee, album, styles, genre, noms , descriptionAlbums
>>>>>>> 77e6522339bade5587288c84b0600be3273e0f1c
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
  $reserve = $row['reserve'];
  $description = $row['descriptionAlbums'];



  $contenu .= affich($reserve, $photo, $titre, $album, $annee, $genre, $artiste, $description);
}


$texte = array("titre" => "Bienvenue", "sous-titre" => "Un site dynamique", "contenu" => $contenu);

<<<<<<< HEAD
=======
function album($reserve, $photo, $titre, $album, $annee, $genre, $artiste, $description)
{

  return "<div class='card' style='width: 18rem;'>
  <img src='template/$photo' class='card-img-top' alt='...' >
  <div class='card-body'>
    <h4 class='card-title'>$titre</h4>
    <h5>Nom de l'album :<br> $album</h5>
    <h5>Nom de l'artiste :<br>  $artiste</h5>
    <h5>Année de parution :<br>  $annee</h5>
    <h5>Genre musical :<br>  $genre</h5>

    <a href='index.php?page=formulaire&id=" . $reserve . "' class='btn btn-primary'>Cliquez ici pour le reserver</a>


  </div>
</div>";
}



function affich($reserve, $photo, $titre, $album, $annee, $genre, $artiste, $description)
{
  return
    album($reserve, $photo, $titre, $album, $annee, $genre, $artiste, $description);
}
>>>>>>> 77e6522339bade5587288c84b0600be3273e0f1c

?>