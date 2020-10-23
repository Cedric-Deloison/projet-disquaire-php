

<?php
  
    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        $id = 0;
    }

    
    $toto = 2;
    $contenu = "";
//    if(testId($id)){
    $sql =  "SELECT album, titre, annee, genre, N.styles, alimage
                    FROM albums U, genres N
                    WHERE N.id = U.genre AND N.id = '".$toto."'
                    ORDER BY album";
    foreach  ($dbh->query($sql) as $row) {
            $album = $row['album'];
            $titre = $row['titre'];
            $annee = $row['annee'];
            $genre = $row['styles'];
            $photo = $row['alimage'];

        
            echo "<div class='row'>";
            affich($album, $titre, $annee, $genre, $photo);
            echo "</div>";

        }

//MG 22/10
affiche_formulaire('get');




//    }


?>

