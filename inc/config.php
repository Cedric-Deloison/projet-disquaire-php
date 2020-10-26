<?php


$connexion = 'mysql:host=localhost;dbname=proj_disquaire';
$user = 'root';
$password = '';



try {
    $dbh = new PDO($connexion, $user, $password);
} catch (PDOException $e) {
    header("Location: erreur.html");
}

function album($id, $photo, $titre, $album, $annee, $genre, $artiste, $description)
{

  return "<div class='card' style='width: 18rem;'>
  <a href=index.php?page=description&id=$id> <img src=template/$photo width='290' height='200'></a>
  <div class='card-body'>
    <h4 class='card-title'>$titre</h4>
    <h5>Nom de l'album :<br> $album</h5>
    <h5>Nom de l'artiste :<br>  $artiste</h5>
    <h5>Année de parution :<br>  $annee</h5>
    <h5>Genre musical :<br>  $genre</h5>

    <a href='index.php?page=formulaire&id=".$id."' class='btn btn-primary'>Cliquez ici pour le reserver</a>


  </div>
</div>";
}

function affich($reserve, $photo, $titre, $album, $annee, $genre, $artiste, $description)
{
  return
    album($reserve, $photo, $titre, $album, $annee, $genre, $artiste, $description);
}