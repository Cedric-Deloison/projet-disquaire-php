

<?php

include "inc/config.php";
include "classes/page.php";
//include "utilisateurs.php";
//include "disquaire.php";

$ma_page = new page();

//affiche_formulaire('get');
//$ma_page->prepare();


$ma_page->prepare();



echo $ma_page;


// On libère les ressources MySQL
$dbh = NULL;


?>


