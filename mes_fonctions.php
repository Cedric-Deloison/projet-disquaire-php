
<?php

function affiche_formulaire($m){

    ?>

    <h1>Notre formulaire de Réservation</h1>
    <form action="resultat-<?php echo $m; ?>.php" method="<?php echo $m; ?>">

        <input type="text" name="nom"><br> 
           <input type="hidden" name="page" value="toto"><br>
 
    <input type="text" adresse="nom"><br>
    <input type="submit" value="Envoyer">
    </form>

<?php

}

?>

<?php

function affiche_Navbar(){

?>

<!-- Debut -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <title>Les boucles</title>
    <style>
    </style>
</head>

<body>

<!-- Fin -->

<!-- NavBar -->
<div name="page" value="fnave">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Le Bateau Pirate</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Boutique</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Album</a>
                        <a class="dropdown-item" href="#">Artiste</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Genre</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    </div>
    <!-- Fin NavBar -->

</body>
</html>

    <?php

}

?>
