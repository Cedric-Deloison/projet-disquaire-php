
<?php 


$sql = "SELECT * FROM albums U, artistes M WHERE U.id = $_GET[id] AND U.artiste = M.id";

foreach ($dbh->query($sql) as $row) {
  $album = $row['album'];
  $titre = $row['titre'];
  $annee = $row['annee'];
  $photo = $row['alimage'];
  $artiste = $row['noms'];
}

$contenu='
      <div class="form">
      <h2>Formulaire de réservation</h2>

      <form action="resultat-post.php" method="post">
          <div class="form-group">
          <img src="template/'.$photo.'" class="card-img-top" alt="..." >
          </div>
          <div class="form-group">
            <label >nom</label>
            <input
              type="text"
              name="nom"  />
          </div>
          <div class="form-group">
            <label >Prénom</label>
            <input
              type="text"
              name="prenom" />
          </div>
          <div class="form-group">
            <label >Email</label>
            <input
              type="email"
              name="email"      />
          </div>
          <div class="form-group form-check">
            <input
              type="checkbox"
              class="form-check-input"
              id="exampleCheck1"  />
            <label class="form-check-label" for="exampleCheck1">
              Jaccepte que mes données ci-dessus soient traitées à des
              fins de prises de contact commerciales.</label
            >
          </div>
          <div class="text-center">
            <button type="submit" class="Envoye">
              Envoyer
            </button>
          </div>
        </form>
  </div>' ;


$texte = array("contenu"=>$contenu);

?>
