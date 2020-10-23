<?php 



function album($album, $titre, $annee, $genre, $photo){
    echo "<img src=$photo width='214' height='204'>";
    echo "<h2>$album</h2>
    <table>";

    for($col=1;$col<=4;$col++){
        if($col==1){
        echo "<tr class='premier'>";
        }
        if($col==2){
            echo "<tr>";
            echo "<td>".$titre."</td>";
        }  
        if($col==3){
            echo "<tr>";
            echo "<td>".$annee."</td>";
        }  
        if($col==4){
            echo "<tr>";
            echo "<td>".$genre."</td>";
        }  


    }


    echo "</tr>";    
    echo "</table>";

}




    function affich($album, $titre, $annee, $genre, $photo){
        echo "<div col-sm-6 class=mgimg>";
        album($album, $titre, $annee, $genre, $photo);
        echo "</div>";
    }
    

//    function testId($id){
//        if ($id == 0){
//            echo "<h4>Il faut sélectionner un nom</h4>";
//            return false;
//        }else{
//            return true;
//        }
    
//    }
    

?>

<?php

function affiche_formulaire($m){

    ?>
    <h1>Notre formulaire de Réservation</h1>
    <form action="resultat-<?php echo $m; ?>.php" method="<?php echo $m; ?>">
        Votre nom ?
        <input type="text" name="nom"><br> 
           <input type="hidden" name="page" value="toto"><br>
        Votre adresse ?
    <input type="text" adresse="nom"><br>
    <input type="submit" value="Envoyer">
    </form>

<!--

 <div class="form-row" @click="createNewReferenceDe(),verifForm()">
  <div class="form-group col-md-6">
  <select class="form-control" v-model="cdpostal">
    <option value="">x-- SELECTIONNER CODE POSTALE --x</option>
    <option v-for="recher in rechers" :key="recher.id">
    {{ recher.cdpostal }}
    </option>
  </select>
  <p v-if="errors.cdpostal" class="alert alert-danger">      
  {{ errors.cdpostal }}</p>                                  
  </div>
  </div>

<div class="form-row">
  <div class="form-group col-md-6">
  <input v-model="adresse" type="text" @keyup="createNewReferenceDe(),verifForm()" class="form-control" id="adresse" placeholder="Adresse">
  <p v-if="errors.adresse" class="alert alert-danger">      
  {{ errors.adresse }}</p>                              
  </div>    
</div>


-->

    <?php
}
?>

<!--D1 MG 22/10

createNewReferenceDe() {
     //reinitialisation du tableau des erreurs
     this.errors = {};
     this.reference = "";
     this.Indout = true;   //MG 09

     //Verifier si tous les champs nécessaires sont renseignés

     if (this.nom == "") {                                   //MG 09
       this.errors.nom = "Nom: obligatoire !!";
       this.Indout = false;   //MG 11

     } else if ((!isNaN(this.nom))) {
       this.errors.nom = "Nom: Erreur de saisi !!";
       this.Indout = false;   //MG 11
     } else {
       this.nameOk = true;
     }

     if (this.adresse == "") {                                   //MG 09
       this.errors.adresse = "Adresse: obligatoire !!";
       this.Indout = false;   //MG 11
     } else if ((!isNaN(this.adresse))) {
       this.errors.adresse = "adresse: Erreur de saisi !!";
       this.Indout = false;   //MG 11
     } else {
       this.adressOk = true;
     }

     if (this.cdpostal === null) {
       this.errors.cdpostal = "code postale: obligatoire !!";
       this.Indout = false;   //MG 11

     } else if ((isNaN(this.cdpostal))) {
       this.errors.cdpostal = "code postale: Erreur de saisi !!";
       this.Indout = false;   //MG 11
     } else {
       this.postalOk = true;
     }


     if (this.ville == "") {                                   //MG 09
       this.errors.ville = "ville: obligatoire !!";
       this.Indout = false;   //MG 11

     } else if ((!isNaN(this.ville))) {
       this.errors.ville = "ville: Erreur de saisi !! !!";
       this.Indout = false;   //MG 11
     } else {
       this.villeOk = true;

     }


     console.log(this.errors);  //MG 09
     console.log(this.Indout);  //MG 09
   },

F1 MG 22/10 --> 

