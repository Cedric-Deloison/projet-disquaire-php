<?php

include "classes/page.php";
include "inc/config.php";
//include "f_fonction.php";



$ma_page = new Page();

$ma_page->prepare();

//affiche_formulaire('GET');

echo $ma_page;
