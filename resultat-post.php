<?php 

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

?>

<div class="col-md-8 offset-sm-2 mjjFormValid" >
      <h2>Vos informations ont bien été envoyées.
      <?php echo "<p>Nom : $nom </p>";?>
      <?php echo "<p>Prénom : $prenom </p>";?>
      <?php echo "<p>Email : $email </p>";?>
      <br> À très vite<br> 😊 </h2>
      <button type="button" class="btn btn-primary" >Retour</button>
</div>
