
<?php

$contenu = "";
$sql = 'SELECT titre, alimage, annee, album, styles, genre, noms , descriptionAlbums
  FROM albums U, genres N, artistes M , descriptions D
  WHERE N.id = U.genre AND M.id = U.artiste AND D.id = U.description
  ORDER BY U.id DESC LIMIT 0,4';

foreach ($dbh->query($sql) as $row) {
    $album = $row['album'];
    $titre = $row['titre'];
    $annee = $row['annee'];
    $genre = $row['styles'];
    $photo = $row['alimage'];
    $artiste = $row['noms'];
    $description = $row['descriptionAlbums'];



    $contenu .= affich($photo, $titre, $album, $annee, $genre, $artiste, $description);
}

function album($photo, $titre, $album, $annee, $genre, $artiste, $description)
{

    return "<div class='card' style='width: 18rem;'>
  <img src='template/$photo' class='card-img-top' alt='...' >
  <div class='card-body'>
    <h4 class='card-title'>$titre</h4>
    <h5>Nom de l'album :<br> $album</h5>
    <h5>Nom de l'artiste :<br>  $artiste</h5>
    <h5>Année de parution :<br>  $annee</h5>
    <h5>Genre musical :<br>  $genre</h5>
   
    <a href='index.php?page=formulaire' class='btn btn-primary'>Cliquez ici pour le reserver</a>
  </div>
</div>";
}



function affich($photo, $titre, $album, $annee, $genre, $artiste, $description)
{
    return  album($photo, $titre, $album, $annee, $genre, $artiste, $description);
}

$contenu .= ' <h1 style="text-align: center;background-color: #42413e;color: wheat;border-radius: 20%;margin-left: 200px;"> Voici une liste des derniers albums arrivés en stock</h1>  <img src="template/arrow"> <br>';

$contenu .= '<div class="jumbotron">
    <h1 class="display-4">Bienvenue sur notre boutique de disques!</h1>
    <p class="lead">Une petite présentation de notre boutique : </p>
    <hr class="my-4">
    <p>C’est en 1886 que Joseph Gibert, professeur de Lettres Classiques au Collège Saint-Michel à Saint-Étienne, décide de « monter » à Paris où il ouvre, face à Notre Dame, sur le parapet du quai Saint-Michel, quatre boîtes de bouquiniste.

    Dès 1888, il inaugure sa première librairie 23 quai Saint-Michel, spécialisée dans le négoce du livre scolaire d’occasion. Grâce à Jules Ferry qui rend l’école obligatoire, la librairie connaît un franc succès. Le nom GIBERT devient un acteur connu et reconnu du livre sur la place parisienne.
    
    Après quarante ans d’exploitation sur la rive gauche, la librairie GIBERT connaît sa première évolution. En 1929, la société GIBERT est scindée en deux. Le fondateur, décédé en 1915, laisse deux fils. Le premier s’installe sous son nom GIBERT JOSEPH dans le 6e arrondissement au 30 boulevard Saint-Michel. Son frère cadet continue l’exploitation quai St Michel sous l’enseigne GIBERT JEUNE. </p>
    <img src="template/bateau" alt="..." >
  </div>';




$texte = array("contenu" => $contenu);
