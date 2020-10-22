

<?php

//$tab = array(1, 2, 3, 4);
//echo somme($tab);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

//    if(testId($id)){
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
    affich($photo, $titre, $album, $annee, $genre, $artiste);
    echo "</div>";
}

//    }


?>

