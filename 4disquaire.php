

<?php

//$tab = array(1, 2, 3, 4);
//echo somme($tab);
  
    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        $id = 0;
    }

//    if(testId($id)){
        $sql =  'SELECT album, alimage FROM albums ORDER BY album';
        foreach  ($dbh->query($sql) as $row) {
                $album = $row['album'];                
                $titre = $row['titre'];
                $année = $row['année'];
                $genre = $row['genre'];
                $photo = $row['alimage'];


                echo "<div class='row'>";
                affich($photo, $titre);
                echo "</div>";


        }

//    }


?>

