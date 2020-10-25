<?php


$sql =  'SELECT U.id, titre, alimage, annee, album, N.styles, genre, M.noms, description_a 
FROM albums U, genres N, artistes M, descriptions D
WHERE N.id = U.genre AND M.id = U.artiste AND U.id = .$id. AND D.id = descriptionAlbums
ORDER BY album';

if (isset($_GET['id'])){
  $id = $_GET['id'];
} else {
  $id = 0;
}

$dbh->query("SET NAMES utf8");

$contenu = "";
foreach ($dbh->query($sql) as $row) {
  $id = $row['id'];
  $album = $row['album'];
  $titre = $row['titre'];
  $annee = $row['annee'];
  $genre = $row['styles'];
  $photo = $row['alimage'];
  $artiste = $row['noms'];
  $description = $row['descriptionAlbums'];


  $contenu .= "<div class='row'>";
  $contenu .= affich($id, $photo, $titre, $album, $annee, $genre, $artiste, $description);
  $contenu .=  "</div>";
}


$texte = array("titre" => "Bienvenue", "sous-titre" => "Un site dynamique", "contenu" => $contenu);

function album($id, $photo, $titre, $album, $annee, $genre, $artiste, $description)
{
  return "<div class='card' style='width: 18rem;'>
  <img src='template/$photo' class='card-img-top' alt='...'>
  <a href=description.php?id=$id> <img src=$photo width='290' height='200'></a>
  <div class='card-body'>
    <h2 class='card-title'>$titre</h2>
    <h5>Nom de l'album :<br> $album</h5>
    <h5>Nom de l'artiste :<br>  $artiste</h5>
    <h5>Année de parution :<br>  $annee</h5>
    <h5>Genre musical :<br>  $genre</h5>
    <h5>Description :<br>  $description</h5>
    <a href='#' class='btn btn-primary'>Cliquez ici pour le reserver</a>
  </div>
</div>";
}



function affich($id, $photo, $titre, $album, $annee, $genre, $artiste, $description)
{
  return "<div col-sm-6 class=mgimg>" .
    album($id, $photo, $titre, $album, $annee, $genre, $artiste, $description) .
    "</div>";
}


?>
